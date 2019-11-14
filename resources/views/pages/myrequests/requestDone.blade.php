@extends('layouts.homeUser')
 
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 my-5">
                <h1>Seu pedido foi realizado com sucesso!!</h1>
            </div>

            <a href="/menu/categories" class="my-btn-primary-sm col-sm-12 mx-3">Fazer novo pedido</a>
            <a href="/requests" class="my-btn-add col-sm-12 mx-3 mt-3">Acompanhar pedido</a>
        </div>
    </div>
@endsection