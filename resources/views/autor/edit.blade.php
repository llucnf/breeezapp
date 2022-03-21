@include('header')

<body>
    <div class="container mt-4">
        <form action="{{url('/autor/'.$autor->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            {{ method_field('PATCH')}}
            <label class="h3 amarillo">Registro de Autores</label>
            <div class="mb-3">
                <label class="form-label amarillo">Nombre del Autor</label>
                <input type="text" class="form-control" value="{{$autor->nombre}}" name="nombre">
            </div>
            <div class="mb-3">
                <label for="genero" class="form-label amarillo">Fecha de nacimiento</label>
                <input type="text" class="form-control" value="{{$autor->fecha_de_nacimiento}}" name="fecha_de_nacimiento" placeholder="dd/mm/aaaa">
            </div>
            <input type="submit" class="btn btn-primary" value="GUARDAR">
        </form>
    </div>

</body>

</html>
