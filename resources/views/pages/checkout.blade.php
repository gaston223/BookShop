@extends('layouts.master')

@section('title' , 'Votre paiement sécurisé')

@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Checkout</h2>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb_item active">Checkout</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- Start Checkout Area -->
    <section class="wn__checkout__area section-padding--lg bg__white">
        <div class="container">
      {{--      <div class="row">
                <div class="col-lg-12">
                    <div class="wn_checkout_wrap">
                        <div class="checkout_info">
                            <span>Returning customer ?</span>
                            <a class="showlogin" href="#">Click here to login</a>
                        </div>
                        <div class="checkout_login">
                            <form class="wn__checkout__form" action="#">
                                <p>If you have shopped with us before, please enter your details in the boxes below. If you are a new customer please proceed to the Billing & Shipping section.</p>

                                <div class="input__box">
                                    <label>Username or email <span>*</span></label>
                                    <input type="text">
                                </div>

                                <div class="input__box">
                                    <label>password <span>*</span></label>
                                    <input type="password">
                                </div>
                                <div class="form__btn">
                                    <button>Login</button>
                                    <label class="label-for-checkbox">
                                        <input id="rememberme" name="rememberme" value="forever" type="checkbox">
                                        <span>Remember me</span>
                                    </label>
                                    <a href="#">Lost your password?</a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>--}}

            @include('partials.flash-message')
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="customer_details">
                        <h3>Billing details</h3>
                        <div class="customar__field">
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>First name <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="input_box space_between">
                                    <label>last name <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Company name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box">
                                <label>Country<span>*</span></label>
                                <select class="select__option">
                                    <option>Select a country…</option>
                                    <option>Afghanistan</option>
                                    <option>American Samoa</option>
                                    <option>Anguilla</option>
                                    <option>American Samoa</option>
                                    <option>Antarctica</option>
                                    <option>Antigua and Barbuda</option>
                                </select>
                            </div>
                            <div class="input_box">
                                <label>Address <span>*</span></label>
                                <input type="text" placeholder="Street address">
                            </div>
                            <div class="input_box">
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="input_box">
                                <label>District<span>*</span></label>
                                <select class="select__option">
                                    <option>Select a country…</option>
                                    <option>Afghanistan</option>
                                    <option>American Samoa</option>
                                    <option>Anguilla</option>
                                    <option>American Samoa</option>
                                    <option>Antarctica</option>
                                    <option>Antigua and Barbuda</option>
                                </select>
                            </div>
                            <div class="input_box">
                                <label>Postcode / ZIP <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>Phone <span>*</span></label>
                                    <input type="text">
                                </div>

                                <div class="input_box space_between">
                                    <label>Email address <span>*</span></label>
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                        <div class="create__account">
                            <div class="wn__accountbox">
                                <input class="input-checkbox" name="createaccount" value="1" type="checkbox">
                                <span>Create an account ?</span>
                            </div>
                            <div class="account__field">
                                <form action="#">
                                    <label>Account password <span>*</span></label>
                                    <input type="text" placeholder="password">
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="customer_details mt--20">
                        <div class="differt__address">
                            <input name="ship_to_different_address" value="1" type="checkbox">
                            <span>Ship to a different address ?</span>
                        </div>
                        <div class="customar__field differt__form mt--40">
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>First name <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="input_box space_between">
                                    <label>last name <span>*</span></label>
                                    <input type="text">
                                </div>
                            </div>
                            <div class="input_box">
                                <label>Company name <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="input_box">
                                <label>Country<span>*</span></label>
                                <select class="select__option">
                                    <option>Select a country…</option>
                                    <option>Afghanistan</option>
                                    <option>American Samoa</option>
                                    <option>Anguilla</option>
                                    <option>American Samoa</option>
                                    <option>Antarctica</option>
                                    <option>Antigua and Barbuda</option>
                                </select>
                            </div>
                            <div class="input_box">
                                <label>Address <span>*</span></label>
                                <input type="text" placeholder="Street address">
                            </div>
                            <div class="input_box">
                                <input type="text" placeholder="Apartment, suite, unit etc. (optional)">
                            </div>
                            <div class="input_box">
                                <label>District<span>*</span></label>
                                <select class="select__option">
                                    <option>Select a country…</option>
                                    <option>Afghanistan</option>
                                    <option>American Samoa</option>
                                    <option>Anguilla</option>
                                    <option>American Samoa</option>
                                    <option>Antarctica</option>
                                    <option>Antigua and Barbuda</option>
                                </select>
                            </div>
                            <div class="input_box">
                                <label>Postcode / ZIP <span>*</span></label>
                                <input type="text">
                            </div>
                            <div class="margin_between">
                                <div class="input_box space_between">
                                    <label>Phone <span>*</span></label>
                                    <input type="text">
                                </div>
                                <div class="input_box space_between">
                                    <label>Email address <span>*</span></label>
                                    <input type="email">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 md-mt-40 sm-mt-40">
                    <div class="wn__order__box">

                        <h3 class="onder__title">Votre commande</h3>
                        <ul class="order__total">
                            <li>Produits</li>
                            <li>Total</li>
                        </ul>


                        <ul class="order_product">
                            @if(Cart::count() > 0)
                                @foreach(Cart::content() as  $product)
                            <li>{{$product->name}} X {{$product->qty}}<span>{{$product->subtotal}}</span></li>
                                @endforeach

                                    @if(!request()->session()->has('coupon'))

                                        <div class="checkout_info">
                                            <span>Vous avez un coupon ?</span>
                                            <a class="showcoupon" href="#">Cliquez ici pour entrer votre code</a>
                                        </div>
                                        <div class="checkout_coupon">
                                            <form action="{{route('store_coupon')}}" method="POST">
                                                @csrf
                                                <div class="form__coupon">
                                                    <input type="text" placeholder="Coupon code" name="code">
                                                    <button type="submit">Appliquer le coupon</button>
                                                </div>
                                            </form>
                                        </div>

                                    @else

                                        <li>Le Coupon {{request()->session()->get('coupon')['code']}} de <strong>{{request()->session()->get('coupon')['remise'] }}€</strong> est bien appliqué
                                            <span>
                                                    <form action="{{route('destroy_coupon')}}" method="POST" class="d-inline-block">
                                                    @csrf
                                                        @method('DELETE')
                                                    <button type="submit" style="padding: 0; border: none;background: none;">
                                                        <i class="zmdi zmdi-delete" style="color: #0b0e19; font-size: 1.2rem; line-height: 0"></i>
                                                    </button>
                                                </form>
                                                </span>

                                        </li>
                                    @endif
                                <li><strong>Sous Total <span>{{ Cart::subtotal() - request()->session()->get('coupon')['remise'] }}  €</span> </strong></li>

                                <li><strong>Taxe <span>{{ (Cart::subtotal() - request()->session()->get('coupon')['remise']) * config('cart.tax')/100 }} €</span> </strong></li>

                            @endif
                        </ul>


                        <ul class="total__amount">
                            <li> Total
                                <span>{{$total}} €
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div id="accordion" class="checkout_accordion mt--30" role="tablist">
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingOne">
                                <a class="checkout__title" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <span>Paiement par Carte bancaire</span>
                                </a>
                            </div>
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="payment-body">
                                    <form action="{{route('checkout_store')}}" method="POST" class="my-4" id="payment-form">
                                        @csrf
                                        <div id="card-element">
                                            <!-- Elements will create input elements here -->
                                        </div>

                                        <!-- We'll put the error messages in this element -->
                                        <div id="card-errors" role="alert"></div>

                                        <button class="btn btn-success mt-4" id="submit">Procéder au paiement</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingTwo">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>Cheque Payment</span>
                                </a>
                            </div>
                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="payment-body">Please send your cheque to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingThree">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <span>Cash on Delivery</span>
                                </a>
                            </div>
                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="payment-body">Pay with cash upon delivery.</div>
                            </div>
                        </div>
                        <div class="payment">
                            <div class="che__header" role="tab" id="headingFour">
                                <a class="collapsed checkout__title" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <span>PayPal <img src="images/icons/payment.png" alt="payment images"> </span>
                                </a>
                            </div>
                            <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="payment-body">Pay with cash upon delivery.</div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Checkout Area -->
@endsection
@section('scripts')
    <script src="https://js.stripe.com/v3/"></script>

    <script>
        // Set your publishable key: remember to change this to your live publishable key in production
        // See your keys here: https://dashboard.stripe.com/account/apikeys
        var stripe = Stripe('pk_test_51H2h8rFJdwGaW11fResjPaQ8ErBNk2PQjDDDP31SvFSjSw39zhAY21SS4EKsgVDJeO6sryo1J8EaJbPtsUmSSjRZ00GK6Et3k3');
        var elements = stripe.elements();
        // Set up Stripe.js and Elements to use in checkout form
        var style = {
            base: {
                color: "#32325d",
            }
        };
        var card = elements.create("card", { style: style });
        card.mount("#card-element");

        card.addEventListener('change', ({error}) => {
            const displayError = document.getElementById('card-errors');
            if (error) {
                displayError.classList.add('alert', 'alert-warning', 'mt-3');
                displayError.textContent = error.message;
            } else {
                displayError.classList.remove('alert', 'alert-warning', 'mt-3');
                displayError.textContent = '';
            }
        });

        var submitButton = document.getElementById('submit');
        submitButton .addEventListener('click', function(ev) {
            ev.preventDefault();
            submitButton.disabled = true;
            stripe.confirmCardPayment("{{ $clientSecret }}", {
                payment_method: {
                    card: card,
                }
            }).then(function(result) {
                if (result.error) {
                    // Show error to your customer (e.g., insufficient funds)
                    submitButton.disabled = false;
                    console.log(result.error.message);
                } else {
                    // The payment has been processed!
                    if (result.paymentIntent.status === 'succeeded') {
                        var paymentIntent = result.paymentIntent;
                        var token = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
                        var form = document.getElementById('payment-form');
                        var url = form.action;
                        var redirect = '/thanks';
                        fetch(
                            url,
                            {
                                headers: {
                                    "Content-Type": "application/json",
                                    "Accept": "application/json, text-plain, */*",
                                    "X-Requested-With": "XMLHttpRequest",
                                    "X-CSRF-TOKEN": token
                                },
                                method: 'post',
                                body: JSON.stringify({
                                    paymentIntent: paymentIntent
                                })
                            }).then((data) => {
                                if (data.status === 400){
                                    var redirect = '/';
                                }else{
                                    var redirect = '/thanks';
                                }
                            console.log(data);
                            form.reset();
                            window.location.href = redirect;
                        }).catch((error) => {
                            console.log(error)
                        })
                    }
                }
            });
        });


    </script>
@endsection

@section('extra-meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@endsection
