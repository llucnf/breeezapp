@include('header')
<body>
    <div class="container top">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="amarillo">ID del genero</th>
                    <th class="amarillo">Nombre del genero</th>
                    <th class="amarillo">Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($generos as $genero)
                    
               
                <tr>
                    <td>{{$genero->id}}</td>
                    <td>{{$genero->genero}}</td>
                    <td class="row">
                        <a class="btn bg-success col-3" href="{{ url('/genero/'.$genero->id.'/edit');}}">Editar</a>
                        <form class="col-3" action="{{url('/genero/'.$genero->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn bg-danger" type="submit" onclick="return confirm('Desea eliminarlo?')" value="Borrar">
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="genero/create" class="btn btn-primary rounded-circle">+</a>
    </div>
    
</body>
</html>