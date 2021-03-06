@extends('layouts.master')

@section('contenido')
    <div class="row mt-5">
        <div class="col-12 col-md-8 col-lg-5 mx-auto">
          <div class="card">
            <div class="card-header bg-warning">
            <span>Agregar consola</span>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="nombre-txt" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="nombre-txt">
            </div>
            <div class="mb-3">
              <label for="marca-select" class="form-label">Marca</label>
              <select id="marca-select" class="form-select"></select>
            </div>
            <div class="mb-3">
              <label for="anio-txt" class="form-label">Año de lanzamiento</label>
              <input type="number" class="form-control" id="anio-txt">
            </div>
          </div>
          <div class="card-footer d-grid gap-1">           
            <button type="button" class="btn btn-info" id="registrar-btn">Agregar</button>
          </div>
          </div>
        </div>
      </div>
@endsection
@section('javascript')
  <script src="{{asset('js/servicios/consolasService.js')}}"></script>
  <script src="{{asset('js/servicios/marcasService.js')}}"></script>
  <script src="{{asset('js/home.js')}}"></script>
@endsection