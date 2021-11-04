@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group-item">
                        <a href="" class="list-group-item list-group-item-action">Categoría 1</a>
                        <a href="" class="list-group-item list-group-item-action">Categoría 2</a>
                        <a href="" class="list-group-item list-group-item-action">Categoría 3</a>
                        <a href="" class="list-group-item list-group-item-action">Categoría 4</a>
                        <a href="" class="list-group-item list-group-item-action">Categoría 5</a>

                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($pizzas as $pizza)
                        <div class="col-md-4 mt-2 text-center" style="border: 1px solid #ccc;">
                            <img src="{{Storage::url($pizza->image)}}" class="img-thumbnail" style="width:100%;" alt="">
                            <p>{{$pizza->name}}</p>
                            <p>{{$pizza->description}}</p>
                            <a href="{{route('pizza.show',$pizza->id)}}">
                                <button class="btn btn-danger mb-1">Pedir ahora</button>
                            </a>

                        </div>
                        @empty
                        <p>no hay pizzas que mostrar</p>
                        @endforelse
                    </div>
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