@extends('layouts.app')

@section('content')
    <div class="ht__bradcaump__area bg-image--3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="bradcaump__inner text-center">
                        <h1 class="bradcaump-title">Votre commande a bien été effectuée !</h1>
                        <nav class="bradcaump-content">
                            <a class="breadcrumb_item" href="{{route('shop_home')}}">Revenir au Shop</a>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
