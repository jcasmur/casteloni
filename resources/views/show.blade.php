@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    @if(Auth::check())
                    <form action="{{route('order.store')}}" method="post">@csrf
                        <div class="form-group">
                            <p>Nombre: {{auth()->user()->name}}</p>
                            <p>Email: {{auth()->user()->email}}</p>
                            <p>Teléfono: <input type="number" class="form-control" name="phone"></p>
                            <p>Pequeña: <input type="number" class="form-control" name="small_pizza" value="0"></p>
                            <p>Mediana: <input type="number" class="form-control" name="medium_pizza" value="0"></p>
                            <p>Grande: <input type="number" class="form-control" name="large_pizza" value="0"></p>
                            <p><input type="hidden" name="pizza_id" value="{{$pizza->id}}"></p>
                            <p><input type="date" name="date" class="form-control" required></p>
                            <p><input type="time" name="time" class="form-control"required></p>
                            <p><textarea name="body" class="form-control" required></textarea></p>
                            <p class="text-center">
                                <button class="btn btn-danger" type="submit">Realizar pedido</button>
                            </p>
                            @if (session('message'))
                            <div class="alert alert-success" role="alert">
                                {{ session('message') }}
                            </div>
                            @endif

                            @if (session('error_message'))
                            <div class="alert alert-danger" role="alert">
                                {{ session('error_message') }}
                            </div>
                            @endif

                        </div>
                    </form>
                    @else
                    <p><a href="/login">Por favor, lógese para realizar un pedido.</a></p>
                    @endif
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                    <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width:100%;" alt="">
                    <p>
                    <h3>{{$pizza->name}}</h3>
                    </p>
                    <p>
                    <h3>{{$pizza->description}}</h3>
                    </p>
                    <p>Small pizza price: {{$pizza->small_pizza_price}} €</p>
                    <p>Medium pizza price: {{$pizza->medium_pizza_price}} €</p>
                    <p>Large pizza price: {{$pizza->large_pizza_price}} €</p>

                </div>
            </div>
        </div>
    </div>
</div>
<style>
    a.list-group-item {
        font-size: 18px;
    }

    a.list-group-item:hover {
        background-color: red;
        color: white;
    }

    .card-header {
        background-color: red;
        color: white;
        font-size: 20px;
    }
</style>
@endsection