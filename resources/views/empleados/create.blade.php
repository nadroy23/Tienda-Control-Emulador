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
        <h1>Crear nuevo Empleado</h1>
    </div>
    

    <form action="{{ url('/empleados') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}

        <label for="Cedula">{{ 'Cedula' }}</label>
        <input type="number" name="Cedula" id="Cedula" value="">
        <br>

        <label for="Nombre">{{ 'Nombre' }}</label>
        <input type="text" name="Nombre" id="Nombre" value="">
        <br>

        <label for="Apellido">{{ 'Apellido' }}</label>
        <input type="text" name="Apellido" id="Apellido" value="">
        <br>

        <label for="Direccion">{{ 'Direccion' }}</label>
        <input type="text" name="Direccion" id="Direccion" value="">
        <br>

        <label for="Telefono">{{ 'Telefono' }}</label>
        <input type="text" name="Telefono" id="Telefono" value="">
        <br>

        <label for="Imagen">{{ 'Imagen' }}</label>
        <input type="file" name="Imagen" id="Imagen" value="">
        <br>

        <input type="submit" value="Agregar" class="btn btn-success">
        <a href="{{ url('empleados') }}" class="btn btn-secondary">Regresar</a>

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
