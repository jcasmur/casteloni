@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-2">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="{{route('pizza.index')}}" class="list-group-item list-group-item-action">View</a>
                        <a href="{{route('pizza.create')}}" class="list-group-item list-group-item-action">Create</a>
                        <a href="{{route('user.order')}}" class="list-group-item list-group-item-action">User Order</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-10">
            <div class="card">
                <div class="card-header">Lista de Pizzas
                <a href="{{route('pizza.create')}}">    
                <button class="btn btn-success" style="float: right">Añadir pizza</button>
                </a>
                </div>

                <div class="card-body">
                    @if (session('message'))
                    <div class="alert alert-success" role="alert">
                        {{ session('message') }}
                    </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Imagen</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Descripción</th>
                                <th scope="col">Categoría</th>
                                <th scope="col">Precio pequeña</th>
                                <th scope="col">Precio mediana</th>
                                <th scope="col">Precio grande</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(count($pizzas)>0)
                            @foreach($pizzas as $key=>$pizza)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td><img src="{{Storage::url($pizza->image)}}" width="80"></td>
                                <td>{{$pizza->name}}</td>
                                <td>{{$pizza->description}}</td>
                                <td>{{$pizza->category}}</td>
                                <td>{{$pizza->small_pizza_price}}</td>
                                <td>{{$pizza->medium_pizza_price}}</td>
                                <td>{{$pizza->large_pizza_price}}</td>
                                <td><a href="{{route('pizza.edit', $pizza->id)}}"><button class="btn btn-primary">Editar</button></a></td>
                                <td><button class="btn btn-danger" data-toggle="modal" data-target="#exampleModal{{$pizza->id}}">Eliminar</button></td>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{$pizza->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <form action="{{route('pizza.destroy',$pizza->id)}}" method="post">@csrf
                                    @method('DELETE')
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Confirmación de eliminación</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    ¿Está seguro que quiere Eliminar la pizza?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </tr>
                            @endforeach

                            @else
                            <p>No hay pizzas que mostrar.</p>
                            @endif

                        </tbody>
                    </table>
                    {{$pizzas->links()}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection