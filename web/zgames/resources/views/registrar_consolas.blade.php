<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset('img/z.png')}}" 
            class="img-fluid" height="50" width="50"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
              <a class="nav-link active" aria-current="page" href="{{route('registrar_consolas')}}">Registrar Consola</a>
              <a class="nav-link" href="{{route('registrar_juego')}}">Registrar Juego</a>
              <a class="nav-link" href="{{route('ver_consolas')}}">Ver Consolas</a>
              <a class="nav-link" href="{{route('ver_juegos')}}">Ver Juegos</a>
            </div>
          </div>
        </div>
      </nav>
    </header>
    <main class="container-fluid">
      <div class="row mt-5">
        <div class="col-12 col-md-8 col-lg-5 mx-auto">
          <div class="card">
            <div class="card-header bg-warning">
            <span>Agregar consola</span>
          </div>
          <div class="card-body">
            <div class="mb-3">
              <label for="consola-txt" class="form-label">Nombre</label>
              <input type="text" class="form-control" id="consola-txt">
            </div>
            <div class="mb-3">
              <label for="marca-select" class="form-label">Marca</label>
              <select id="marca-select" class="form-select">
                <option value="Microsoft">Microsoft</option>
                <option value="Nintendo">Nintendo</option>
                <option value="Sony">Sony</option>
                <option value="Sega">Sega</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="anio-num" class="form-label">Año</label>
              <input type="number" class="form-control" id="anio-num">
            </div>
          </div>
          <div class="card-footer d-grid gap-1">           
            <button type="button" class="btn btn-success">Agregar</button>
          </div>
          </div>
        </div>
      </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>