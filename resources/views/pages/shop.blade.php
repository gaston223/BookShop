@extends('layouts.master')

@section('title', 'Vos livres préférés aux meilleurs prix')



@section('content')
    <!-- End Search Popup -->
    <!-- Start Slider area -->
    <div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class="shopbtn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->
        <!-- Start Single Slide -->
        <div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="slider__content">
                            <div class="contentbox">
                                <h2>Buy <span>your </span></h2>
                                <h2>favourite <span>Book </span></h2>
                                <h2>from <span>Here </span></h2>
                                <a class="shopbtn" href="#">shop now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Single Slide -->

    </div>
    <!-- End Slider area -->
    <!-- Start BEst Seller Area -->
    <section class="wn__product__area brown--color pt--80  pb--30">
        <div class="container">

            @if(session('success'))
                <div class="alert  alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('success')}}
                </div>
            @endif

            @if(session('error'))
                <div class="alert  alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    {{session('error')}}
                </div>
            @endif


            {{--<div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Les Derniers <span class="color--theme">Livres</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>--}}
            <!-- Start Single Tab Content -->

            <!-- Start Single Product -->
            <div class="product product__style--3 row ">

      {{--          @foreach($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 mt-5">
                        <div class="product__thumb">
                            <a class="first__img" href="{{route('shop_product_single', $product->slug)}}"><img src="{{asset('images/'.$product->image)}}" alt="product image"></a>
                            <a class="second__img animation1" href="{{route('shop_product_single', $product->slug)}}"><img src="{{asset('images/'.$product->image)}}" alt="product image"></a>
                            <div class="hot__box">
                                @foreach($product->categories as $category)
                                    <span class="hot-label mb-5">{{$category->name}}</span> <br>

                                @endforeach

                            </div>
                        </div>
                        <div class="product__content content--center">
                            <h4><a href="single-product.html">{{$product->name}}</a></h4>
                            <ul class="prize d-flex">
                                <li>{{$product->price}} €</li>
                                <li class="old_prize">{{$product->old_price}} €</li>
                            </ul>
                            <div class="action">
                                <div class="actions_inner">
                                    <ul class="add_to_links">
                                        <li><a class="cart" href="{{route('shop_product_single', $product->slug)}}"><i class="bi bi-shopping-bag4"></i></a></li>
                                        <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                        <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                        <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__hover--content">
                                <ul class="rating d-flex">
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach--}}


                <!-- Start Single Product -->

            </div>
            <!-- End Single Tab Content -->
        </div>
    </section>
    <!-- Start BEst Seller Area -->

    <!-- Start Best Seller Area -->
    <section class="wn__bestseller__area bg--white pt--80  pb--30" id="all-books">
        <div class="container">
            @if(count($errors)>0)
                <div class="alert  alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <ul class="mb-0 mt-0">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row">
                <div class="col-lg-12">
                    <div class="section__title text-center">
                        <h2 class="title__be--2">Tous vos <span class="color--theme">Livres</span></h2>
                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered lebmid alteration in some ledmid form</p>
                    </div>
                </div>
            </div>
            <div class="row mt--50">
                <div class="col-md-12 col-lg-12 col-sm-12">
                    <div class="product__nav nav justify-content-center" role="tablist">
                        <a class="nav-item nav-link active"  href="{{route('shop_home')}}#all-books" role="tab">TOUS</a>
                        @foreach(DB::table('categories')->get() as $category)
                        <a class="nav-item nav-link" href="{{route('shop_home', ['categorie' => $category->slug])}}#all-books">{{$category->name}}</a>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="row tab__container mt--60">
                <!-- Start Single Tab Content -->
                <!-- Start Single Product -->
                @foreach($products as $product)
                <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="product product__style--3">
                        <div class="product__thumb">
                            <a class="first__img" href="{{route('shop_product_single', $product->slug)}}"><img src="{{asset('storage/'.$product->image)}}" alt="product image"></a>
                            <a class="second__img animation1" href="{{route('shop_product_single', $product->slug)}}"><img src="{{asset('storage/'.$product->image)}}" alt="product image"></a>
                            <div class="hot__box">
                                @foreach($product->categories as $category)
                                    <span class="hot-label mb-5">{{$category->name}}</span> <br>

                                @endforeach

                            </div>
                        </div>
                        <div class="product__content content--center">
                            <h4><a href="single-product.html">{{$product->name}}</a></h4>
                            <ul class="prize d-flex">
                                <li>{{$product->price}} €</li>
                                <li class="old_prize">{{$product->old_price}} €</li>
                            </ul>
                            <div class="action">
                                <div class="actions_inner">
                                    <ul class="add_to_links">
                                        <li><a class="cart" href="{{route('shop_product_single', $product->slug)}}"><i class="bi bi-shopping-bag4"></i></a></li>
                                        <li><a class="wishlist" href="wishlist.html"><i class="bi bi-shopping-cart-full"></i></a></li>
                                        <li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
                                        <li><a data-toggle="modal" title="Quick View" class="quickview modal-view detail-link" href="#productmodal"><i class="bi bi-search"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product__hover--content">
                                <ul class="rating d-flex">
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li class="on"><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                    <li><i class="fa fa-star-o"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
               <!-- End Single Product -->

            </div>
            @if(request()->input('q'))
                <h6>{{$products->total()}} résultat(s) pour la recherche "{{request()->q}}"</h6>
            @endif
            {{$products->appends(request()->input())->fragment('all-books')->links()}}
        </div>
    </section>
    <!-- Start BEst Seller Area -->

@endsection
