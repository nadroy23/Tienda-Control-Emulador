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
        <h1>Lista de empleados</h1>
    </div>

    @if (Session::has('Mensaje'))
        <div class="alert alert-success" role="alert">
            {{ Session::get('Mensaje') }}
        </div>

    @endif

    <div class="d-grid gap-2 d-md-block">
        <a href="{{ url('empleados/create') }}" class="btn btn-primary">Nuevo</a>
        <a href="{{ url('/') }}" class="btn btn-danger">Cerrar</a>
    </div>
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th> #</th>
                <th>Imagen</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Acción</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($empleados as $empl)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><img src="{{ asset('storage') . '/' . $empl->imagen }}" alt="" width="100"> </td>
                    <td>{{ $empl->nombre }}</td>
                    <td>{{ $empl->apellido }}</td>
                    <td>
                        <div class="mb-6">
                            <a href="{{ url('empleados/' . $empl->id . '/edit') }}" class="btn btn-warning">Editar</a>
                            <form method="POST" action="{{ url('empleados/' . $empl->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" onclick="return confirm('¿Deseas Eliminar?');"
                                    class="btn btn-danger">Eliminar</button>
                        </div>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


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
