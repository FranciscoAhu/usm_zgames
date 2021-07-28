@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-12 col-lg-6 mx-auto">
            <table class="table table-bordered table-hover table-striped table-responsive">               
                <thead class="bg-info text-dark">
                    <tr>
                        <th>Nombre</th>
                        <th>Marca</th>
                        <th>Año de lanzamiento</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody id="tbody-tabla"></tbody>
            </table>
        </div>
    </div>
@endsection