@extends('admin.layouts.app')

@section('title', 'Ajouter un produit - Admin')

@section('content')

    <div class="content-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-lg-8">
                    <div class="card card-default">
                        <div class="card-header card-header-border-bottom">
                            <h2>Créer une Catégorie</h2>
                        </div>
                        <div class="card-body">
                            <form action="{{route('store_category')}}" method="post">
                                @csrf
                                <div class="form-row">
                                    <div class="col-md-12 mb-3">
                                        <label for="name">Nom </label>
                                        <!--is-valid-->
                                        <input type="text" class="form-control " id="name" placeholder="Saisissez le nom de la catégorie" value=""
                                               name="name" required>
                                        {{--<div class="invalid-feedback">
                                            Looks good!
                                        </div>--}}
                                    </div>
                                 </div>
                                <button class="btn btn-primary" type="submit">Enregistrer</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
