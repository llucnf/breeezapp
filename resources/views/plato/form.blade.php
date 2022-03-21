<label class="h3 amarillo">Registro de Platos</label>
<div class="mb-3 amarillo">
    <label class="form-label">Plato </label>
    <input type="text" class="form-control" name="name"   placeholder="Ej:Macarrones con queso">

  </div>
  <div class="mb-3 amarillo">
    <label class="form-label">Precio</label>
    <input type="float" class="form-control" name="price"  placeholder="">
  </div>
  <div class="mb-3 amarillo">
    <label class="form-label">Ingredientes</label>
    <select multiple name="ingrediente_id[]" >
      @foreach ($ingredientes as $ingrediente)
      <option value="{{$ingrediente->id}}">{{$ingrediente->name}}</option>
      @endforeach
    </select>
  </div>
  <div class="mb-3 amarillo">
    <div class="form-group">
        <strong>Image:</strong>
        <input type="file" name="image" class="form-control" placeholder="image">
    </div>
</div>
  <input type="submit" class="btn btn-primary" value="enviar" >