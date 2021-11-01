@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Orders</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Orders</div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Usuario</th>
                                <th scope="col">Telefono/Email</th>
                                <th scope="col">Fecha/Hora</th>
                                <th scope="col">Pizza</th>
                                <th scope="col">Pizza pequeña</th>
                                <th scope="col">Pizza mediana</th>
                                <th scope="col">Pizza grande</th>
                                <th scope="col">Total(€)</th>
                                <th scope="col">Mensaje</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aceptar</th>
                                <th scope="col">Rechazar</th>
                                <th scope="col">Completado</th>
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
                                <form action="{{route('order.status',$order->id)}}" method="post">@csrf
                                    <td>
                                        <input name="status" type="submit" value="aceptado" class="btn btn-primary btn-sm">
                                    </td>
                                    <td>
                                        <input name="status" type="submit" value="rechazado" class="btn btn-danger btn-sm">
                                    </td>
                                    <td>
                                        <input name="status" type="submit" value="completado" class="btn btn-success btn-sm">
                                    </td>
                                </form>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection