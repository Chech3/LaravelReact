@extends('layout/plantilla')

@section('tituloPagina', 'Crud')

@section('contenido')

    <div class="row">
        <div class="col-12">
            <button src="crud.create" class="btn btn-primary">Agregar</button>
            <h2 class="d-flex justify-content-center"">
                Crudsito yuka
            </h2>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">First</th>
                        <th scope="col">Last</th>
                        <th scope="col">Handle</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>do</td>
                        <td>
                            <button class="btn btn-warning">Editar</button>
                            <button class="btn btn-danger">Eliminar</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

@endsection
