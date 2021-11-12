
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
    <div class="alert alert-primary" role="alert">
        <h1>Editar Empleado</h1>
    </div>

    <form action="{{url('/empleados/'.$empleado->id)}}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        {{method_field('PATCH')}}
    
        <label for="Imagen">{{'Imagen'}}</label>
        <img src="{{asset('storage').'/'.$empleado->imagen}}" alt="" width="100">
        <input type="file" name="Imagen" id="Imagen" value="{{$empleado->imagen}}">
        <br>
        
        <label for="Cedula">{{'Cedula'}}</label>
        <input type="number" name="Cedula" id="Cedula" value="{{$empleado->cedula}}" disabled>
        <br>
        
        <label for="Nombre">{{'Nombre'}}</label>
        <input type="txt" name="Nombre" id="Cedula" value="{{$empleado->nombre}}">
        <br>
        
        <label for="Apellido">{{'Apellido'}}</label>
        <input type="text" name="Apellido" id="Apellido" value="{{$empleado->apellido}}">
        <br>
        
        <label for="Direccion">{{'Direccion'}}</label>
        <input type="text" name="Direccion" id="Direccion" value="{{$empleado->direccion}}">
        <br>
        
        <label for="Telefono">{{'Telefono'}}</label>
        <input type="text" name="Telefono" id="Telefono" value="{{$empleado->telefono}}">
        <br>
            
        <input type="submit" value="Actualizar" class="btn btn-success">
        <a href="{{url('empleados')}}" class="btn btn-secondary">Regresar</a>
    
        </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>
