@include('header')
<body>
    <div class="container top">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="amarillo">ID del autor</th>
                    <th class="amarillo">Nombre del Autor</th>
                    <th class="amarillo">Fecha de nacimiento</th>
                    <th class="amarillo">Modificar</th>
                </tr>
            </thead> 
            <tbody>
                @foreach ($autors as $autor)
                    
               
                <tr>
                    <td>{{$autor->id}}</td>
                    <td>{{$autor->nombre}}</td>
                    <td>{{$autor->fecha_de_nacimiento}}</td>
                    <td class="row">
                        <a class="btn bg-success col-3" href="{{ url('/autor/'.$autor->id.'/edit');}}">Editar</a>
                        <form class="col-3" action="{{url('/autor/'.$autor->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn bg-danger" type="submit" onclick="return confirm('Desea eliminarlo?')" value="Borrar">
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="autor/create" class="btn btn-primary rounded-circle">+</a>
    </div>
   
</body>
</html>