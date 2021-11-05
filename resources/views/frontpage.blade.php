@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>

                <div class="card-body">
                    <ul class="list-group-item">
                        <form action="{{route('frontpage')}}" method="get">
                            <a href="/">Todas</a>
                            <input type="submit" value="vegetariana" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="novegetariana" name="category" class="list-group-item list-group-item-action">
                            <input type="submit" value="traditional" name="category" class="list-group-item list-group-item-action">
                        </form>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizzas</div>
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
