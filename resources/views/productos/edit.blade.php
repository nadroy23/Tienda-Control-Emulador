@extends('layouts.app')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <title>Hello, world!</title>
    </head>

    <body>
        <div class="alert alert-primary" role="alert">
            <h1>Editar Producto</h1>
        </div>

        <form action="{{ url('/productos/' . $productos->id) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('PATCH') }}

            <label for="Imagen">{{ 'Imagen' }}</label>
            <img src="{{ asset('storage') . '/' . $productos->imagen }}" alt="" width="100">
            <input type="file" name="Imagen" id="Imagen" value="{{ $productos->imagen }}">
            <br>

            <label for="Codigo">{{ 'Codigo' }}</label>
            <input type="number" name="Codigo" id="Codigo" value="{{ $productos->codigo }}" disabled>
            <br>

            <label for="Nombre">{{ 'Nombre' }}</label>
            <input type="txt" name="Nombre" id="Nombre" value="{{ $productos->nombre }}">
            <br>

            <label for="Destalles">{{ 'Destalles' }}</label>
            <input type="text" name="Destalles" id="Destalles" value="{{ $productos->destalles }}">
            <br>

            <label for="Cantidad">{{ 'Cantidad' }}</label>
            <input type="text" name="Cantidad" id="Cantidad" value="{{ $productos->cantidad }}">
            <br>

            <label for="Precio">{{ 'Precio' }}</label>
            <input type="text" name="Precio" id="Precio" value="{{ $productos->precio }}">
            <br>

            <input type="submit" value="Actualizar" class="btn btn-success">
            <a href="{{ url('productos') }}" class="btn btn-secondary">Regresar</a>

        </form>

        <!-- Optional JavaScript; choose one of the two! -->

        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
        </script>

        <!-- Option 2: Separate Popper and Bootstrap JS -->
        <!--
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>
        -->
    </body>

    </html>
@endsection
