@extends('layouts.master')

@section('title', 'Mes commandes')

@section('content')
    <!-- Start Bradcaump area -->
    <div class="ht__bradcaump__area bg-image--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h2 class="bradcaump-title">Mes commandes</h2>
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

    <section class="wn__faq__area bg--white pt--80 pb--60">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="wn__accordeion__content">
                        <h2>Mes Commandes</h2>
                    </div>
                    <div id="accordion" class="wn_accordion" role="tablist">
                        @foreach(Auth()->user()->orders as $order)
                            <div class="card">
                                <div class="acc-header" role="tab" id="{{$order->id}}">
                                    <h5>
                                        <a data-toggle="collapse" href="#collapse{{$order->id}}" role="button" aria-expanded="true" aria-controls="collapse{{$order->id}}">
                                            Commande passé le {{ \Carbon\Carbon::parse($order->payment_created_at)->format('d/m/Y à H:i') }} d'un montant de <strong>{{$order->amount /100}} €</strong>
                                        </a>
                                    </h5>
                                </div>
                                <div id="collapse{{$order->id}}" class="collapse show" role="tabpanel" aria-labelledby="{{$order->id}}" data-parent="#accordion">
                                    <div class="card-body">
                                      <h6 class="mb-2">Liste des produits : </h6>
                                        @foreach(unserialize($order->products) as $product)
                                            <div>Nom du produit : {{$product[0]}}</div>
                                            <div>Prix : {{$product[1]}}</div>
                                            <div>Quantité : {{$product[2]}}</div>
                                            <hr>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
