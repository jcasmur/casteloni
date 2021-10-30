@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-8">
            @if(count($errors)>0)
            <div class="card mt-5">
                <div class="card-body">
                    <div class="alert alert-danger">
                        @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                        @endforeach
                    </div>
                </div>
            </div>
            @endif
            <div class="card">
                <div class="card-header">Editar Pizza</div>
                <form action="{{route('pizza.update',$pizza->id)}}" method="post" enctype="multipart/form-data">@csrf
                    @method('PUT')
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name">Nombre de la pizza</label>
                            <input type="text" class="form-control" name="name" placeholder="Nombre de la pizza" value="{{$pizza->name}}">
                        </div>
                        <div class="form-group">
                            <label for="description">Descripción de la pizza</label>
                            <textarea class="form-control" name="description">{{$pizza->description}}</textarea>
                        </div>
                        <div class="form-inline">
                            <label>Precio (€)</label>
                            <input type="text" name="small_pizza_price" class="form-control" placeholder="pequeña" value="{{$pizza->small_pizza_price}}">
                            <input type="text" name="medium_pizza_price" class="form-control" placeholder="mediana" value="{{$pizza->medium_pizza_price}}">
                            <input type="text" name="large_pizza_price" class="form-control" placeholder="grande" value="{{$pizza->large_pizza_price}}">
                        </div>
                        <div class="form-group">
                            <label for="category">Categoría</label>
                            <select class="form-control" name="category">
                                <option value=""></option>
                                <option value="vegetariana">Vegetariana</option>
                                <option value="noegetariana">No Vegetariana</option>
                                <option value="traditional">Tradicional</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Imagen</label>
                            <input type="file" name="image" class="form-control" name=image>
                            <img src="{{Storage::url($pizza->image)}}" width="80">
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-primary" type="submit">Guardar</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
@endsection