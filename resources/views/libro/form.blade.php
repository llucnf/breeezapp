<label class="h3 amarillo">Registro de Libros</label>
            <div class="mb-3">
                <label class="form-label amarillo">Titulo del libro</label>
                <input type="text" class="form-control" name="titulo" placeholder="El principito">
              </div>
              <div class="mb-3">
                <label for="genero" class="form-label amarillo">Género</label>
               
                <select name="IdGenero" >
                  @foreach ($generos as $genero)
                  <option value="{{$genero->id}}">{{$genero->genero}}</option>
                  @endforeach
                </select>
                
                
              </div>

              <div class="mb-3">
                <label class="form-label amarillo">Nombre del autor</label>
                
                <select name="IdAutor">
                  @foreach ($autors as $autor)
                  <option value="{{$autor->id}}">{{$autor->nombre}}</option>
                  @endforeach
                </select>
                
              </div>
              <div class="mb-3">
                <label class="form-label amarillo">ISBN</label>
                <input type="text" class="form-control" name="ISBN" placeholder="STS-32EE25422">
              </div>
              <input type="submit" class="btn btn-primary" value="enviar" >