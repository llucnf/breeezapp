@include('header')

<div class="container mt-4">
    <form action="{{url('/genero/'.$genero->id)}}" method="post" enctype="multipart/form-data" id="registro">
        @csrf
        {{ method_field('PATCH')}}
        <label class="h3 amarillo">Registro de Géneros</label>
        <div class="mb-3 amarillo">
            <label class="form-label">Género</label>
            <input type="text" class="form-control" name="genero" value="{{$genero->genero}}" placeholder="Ej:Comedia">
        </div>


        <input type="submit" class="btn btn-primary" value="GUARDAR">
    </form>
</div>
