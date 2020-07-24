<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Order;
use App\Product;
use DateTime;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Contracts\View\Factory;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\View\View;
use Stripe\Exception\ApiErrorException;
use Stripe\PaymentIntent;
use Stripe\Stripe;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     * @throws ApiErrorException
     */
    public function index()
    {
        if (Cart::count() <= 0){
            return redirect()->route('shop_home');
        }

        if (request()->session()->has('coupon')){
            $total = (Cart::subtotal() - request()->session()->get('coupon')['remise']) + (Cart::subtotal() - request()->session()->get('coupon')['remise']) * (config('cart.tax') / 100);
        }else{
            $total = Cart::total();
        }

        Stripe::setApiKey('sk_test_51H2h8rFJdwGaW11fl6op193HqdCwh0W6YcAvFwwDGzwlmXpOJY5UcNkOkPHnX2x3mGeVx4WwKlKK1mZdDA7RPzMx00RlvX6DSK');
        $intent = PaymentIntent::create([
            'amount' => round($total) * 100,
            'currency' => 'eur',
        ]);
        $clientSecret = Arr::get($intent, 'client_secret');
        return view('pages.checkout',[
            'clientSecret' => $clientSecret,
            'total' => $total
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Product::checkIfNotAvailable()){
            Session::flash('error', "Un produit dans votre panier n'est plus disponible");
            return response()->json(['error' => false], 400);
        }

        $data = $request->json()->all();

        $order = new Order();

        $order->payment_intent_id = $data['paymentIntent']['id'];
        $order->amount = $data['paymentIntent']['amount'];

        $order->payment_created_at = (new DateTime())
            ->setTimestamp($data['paymentIntent']['created'])
            ->format('Y-m-d H:i:s');

        $products = [];
        $i = 0;

        foreach (Cart::content() as $product) {
            $products['product_' . $i][] = $product->model->name;
            $products['product_' . $i][] = $product->model->price;
            $products['product_' . $i][] = $product->qty;
            $i++;
        }

        $order->products = serialize($products);
        $order->user_id = Auth()->user()->id;
        $order->save();

        if ($data['paymentIntent']['status'] === 'succeeded') {
            Product::updateStock();
            Cart::destroy();
            Session::flash('success', 'Votre commande a été traitée avec succès.');
            return response()->json(['success' => 'Payment Intent Succeeded']);
        } else {
            return response()->json(['error' => 'Payment Intent Not Succeeded']);
        }
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|Factory|\Illuminate\Http\RedirectResponse|View
     */
    public function thankYou()
    {
        return Session::has('success') ? view('pages.thank-you') : redirect()->route('shop_home');
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeCoupon(Request $request)
    {
        $code =$request->get('code');
        $coupon = Coupon::where('code', $code)->first();

        if (!$coupon){
            return redirect()->back()->with('error', 'Le coupon est invalide');
        }
        $request->session()->put('coupon', [
            'code' => $coupon->code,
            'remise' => $coupon->discount(Cart::subtotal())
        ]);


        return redirect()->back()->with('success', 'Le coupon est appliqué');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function destroyCoupon()
    {
        request()->session()->forget('coupon');

        return redirect()->back()->with('success', 'Le coupon a été retiré');
    }

}
