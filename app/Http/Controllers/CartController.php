<?php

namespace App\Http\Controllers;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
      $duplicata = Cart::search(function ($cartItem, $rowId) use($request) {
        return $cartItem->id == $request->product_id;
        });

      if($duplicata->isNotEmpty()){
          return redirect()->route('shop_home')->with('success', 'Le produit a déja été ajouté ');
      }

        $product = Product::find($request->product_id);

        Cart::add($product->id, $product->name, 1, $product->price)
        ->associate('App\Product');
        return redirect()->route('shop_cart')->with('success', 'Le produit a bien été ajouté dans le panier');
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
    public function update(Request $request, $rowId)
    {
        $data = $request->json()->all();

        $validator =Validator::make($request->all(),[
            'qty' => 'required|numeric|between:1,6'
        ]);

        if ($validator->fails()){
            Session::flash('danger', "La quantité du produit n'est pas valide");
            return response()->json(['error' => 'Cart quantity has not been updated']);
        }

        Cart::update($rowId, $data['qty']);

        Session::flash('success', "La quantité du produit est passée à {$data['qty']}");

        return response()->json(['success' => 'Cart quantity has been updated']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $rowId
     * @return RedirectResponse
     */
    public function destroy($rowId)
    {
        Cart::remove($rowId);
        return back()->with('success', 'Le produit a été supprimé .');
    }
}
