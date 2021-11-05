@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">

            <div class="card">
                <div class="card-header">Tus pedidos
                </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Telefono/Email</th>
                                <th scope="col">Fecha/Hora</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">Pequeña</th>
                                <th scope="col">Mediana</th>
                                <th scope="col">Grande</th>
                                <th scope="col">Total(€)</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $order)
                            <tr>
                                <td>{{$order->user->name}}</td>
                                <td>{{$order->user->email}}<br>{{$order->user->phone}}</td>
                                <td>{{$order->date}}/{{$order->time}}</td>
                                <td>{{$order->pizza->name}}</td>
                                <td>{{$order->small_pizza}}</td>
                                <td>{{$order->medium_pizza}}</td>
                                <td>{{$order->large_pizza}}</td>
                                <td>{{ ($order->pizza->small_pizza_price * $order->small_pizza) + 
                                    ($order->pizza->medium_pizza_price * $order->medium_pizza) + 
                                    ($order->pizza->large_pizza_price * $order->large_pizza) }} €</td>
                                <td>{{$order->body}}</td>
                                <td>{{$order->status}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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