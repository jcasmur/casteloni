@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-14">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                </ol>
            </nav>
            <div class="card">
                <div class="card-header">Customers
                <a style="float:right;" href="{{route('pizza.index')}}"><button class="bnt btn-secondary btn-sm" style="margin-left: 5px;">Ver Pizzas</button></a>
                        <a style="float:right;" href="{{route('pizza.create')}}"><button class="bnt btn-secondary btn-sm">Crear Pizza</button></a>
    
                    </div>

                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Miembro desde</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <td>{{$customer->name}}</td>
                                <td>{{$customer->email}}</td>
                                <td>{{\Carbon\Carbon::parse($customer->created_at)->format('d M Y')}}</td>
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