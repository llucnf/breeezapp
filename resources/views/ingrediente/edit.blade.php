@include('header')

<div class="container mt-4">
    <form action="{{url('/ingrediente/'.$ingrediente->id)}}" method="post" enctype="multipart/form-data" id="registro">
        @csrf
        {{ method_field('PATCH')}}
        <label class="h3 amarillo">Registro de Ingredientes</label>
        <div class="mb-3 amarillo">
            <label class="form-label">Ingredeiente</label>
            <input type="text" class="form-control" name="name" value="{{$ingrediente->name}}" placeholder="Ej:Perejill">
        </div>


        <input type="submit" class="btn btn-primary" value="GUARDAR">
    </form>
</div>
