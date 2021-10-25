@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Menu</div>
                <div class="card-body">
                    <ul class="list-group">
                        <a href="" class="list-group-item list-group-item-action">View</a>
                        <a href="" class="list-group-item list-group-item-action">Create</a>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Pizza</div>

                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nombre de la pizza</label>
                        <input type="text" class="form-control" name="name" placeholder="Nombre de la pizza">
                    </div>
                    <div class="form-group">
                        <label for="description">Descripción de la pizza</label>
                        <textarea class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-inline">
                        <label>Precio (€)</label>
                        <input type="number" class="form-control" placeholder="pequeña">
                        <input type="number" class="form-control" placeholder="mediana">
                        <input type="number" class="form-control" placeholder="grande">
                    </div>
                    <div class="form-group">
                        <label for="description">Categoría</label>
                        <select class="form-control">
                        <option value="vegetariana">Vegetariana</option>
                        <option value="noegetariana">No Vegetariana</option>
                        <option value="traditional">Tradicional</option>

                        </select>
                    </div>
                    <div class="form-group">
                        <label>Imagen</label>
                        <input type="file" class="form-control" name=image>
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