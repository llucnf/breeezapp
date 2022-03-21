

<div class="container mt-4">
    <form action="{{route('plato.update',$plato)}}" method="post" enctype="multipart/form-data">
        @csrf
        {{ method_field('PATCH')}}
        <label class="h3 amarillo">Registro de Plato</label>
        <div class="mb-3 amarillo">
            <label class="form-label" value="" >plato</label>
            <input type="text" class="form-control" name="name" value="{{$plato->name}}" placeholder="Ej:Comedia">
        </div>
        <div class="mb-3 amarillo">
            <label class="form-label">Precio</label>
            <input type="float" class="form-control"  value="{{$plato->precio}}" name="price"  placeholder="">
          </div>
        <input type="hidden" value="{{$plato->id}}" name="id" >
        <div class="mb-3 amarillo">
            <label class="form-label">Ingredientes</label>
            @php
                $ingredienteplato = $plato->ingredientes->toArray();
                $ingredienteid = [];
                foreach ($ingredienteplato as $clave) {
                    array_push($ingredienteid,$clave['id']);
                   
                }
            @endphp
            <select name="ingrediente_id[]" multiple>
                @foreach ($ingredientes as $ingrediente)
                
                
               
                <option value="{{$ingrediente->id}}"@php
                    if(in_array($ingrediente->id, $ingredienteid))
                    echo 'selected';
                @endphp>{{$ingrediente->name}}</option>  
                
                
                @endforeach
            </select>
            
           

        </div>
        <div class="mb-3 amarillo">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
                <img src="/image/{{ $plato->image }}" width="300px">
            </div>
        </div>

        <input type="submit" class="btn btn-primary" value="GUARDAR">
    </form>
</div>
