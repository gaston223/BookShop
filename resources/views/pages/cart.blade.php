@extends('layouts.app')

@section('title', 'Résumé de votre panier')

@section('content')

    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Shopping Cart</h2>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="index.html">Home</a>
                            <span class="brd-separetor">/</span>
                            <span class="breadcrumb_item active">Shopping Cart</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Bradcaump area -->
    <!-- cart-main-area start -->
    <div class="cart-main-area section-padding--lg bg--white">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 ol-lg-12">
                        <div class="table-content wnro__table table-responsive">
                            <table>
                                <thead>
                                <tr class="title-top">
                                    <th class="product-thumbnail">Image</th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">Quantity</th>
{{--                                    <th class="product-subtotal">Total</th>--}}
                                    <th class="product-remove">Remove</th>
                                </tr>
                                </thead>
                                <tbody>
                                @if(Cart::count() > 0)
                                @foreach(Cart::content() as  $product)
                                    <tr>
                                        <td class="product-thumbnail"><a href="#"><img src="{{asset('images/'.$product->model->image)}}" alt="product img"></a></td>
                                        <td class="product-name"><a href="#">{{$product->model->name}}</a></td>
                                        <td class="product-price"><span class="amount">{{$product->model->price}} €</span></td>
                                        <td class="product-quantity"><input type="number" value="1"></td>
{{--                                        <td class="product-subtotal">{{ Cart::subtotal() }} €</td>--}}
                                        <td class="product-remove">
                                            <form action="{{ route('cart.destroy', $product->rowId)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" style="padding: 0; border: none;background: none;">
                                                    <i class="zmdi zmdi-delete" style="color: #0b0e19; font-size: 1.2rem; line-height: 0"></i>
                                                </button>
                                            </form>

                                        </td>
                                    </tr>

                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    <div class="cartbox__btn">
                        <ul class="cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                            <li><a href="#">Coupon Code</a></li>
                            <li><a href="#">Apply Code</a></li>
                            <li><a href="#">Update Cart</a></li>
                            <li><a href="#">Check Out</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="cartbox__total__area">
                        <div class="cartbox-total d-flex justify-content-between">
                            <ul class="cart__total__list">
{{--                                <li>Cart total</li>--}}
                                <li>Sub Total</li>
                                <li>TVA</li>
                            </ul>
                            <ul class="cart__total__tk">
{{--                                <li>$70</li>--}}
                                <li>{{Cart::subtotal()}}</li>
                                <li>{{Cart::tax()}}€</li>
                            </ul>
                        </div>
                        <div class="cart__total__amount">
                            <span>TOTAL</span>
                            <span>{{Cart::total()}} €</span>
                        </div>

                    </div>

                </div>

            </div>


            <ul class=" pt-3 float-right cart__btn__list d-flex flex-wrap flex-md-nowrap flex-lg-nowrap justify-content-between">
                <li ><a href="{{route('shop_checkout')}}" style="background: #e59285; color: white">Procéder au paiement</a></li>
            </ul>

        </div>
    </div>
    <!-- cart-main-area end -->
    @else
    <div>
        Votre panier est vide.
    </div>
    @endif
@endsection
