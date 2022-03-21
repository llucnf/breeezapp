@include('header')
   

<body>
    <div class="container top">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="amarillo">ID del ingrediente</th>
                    <th class="amarillo">Nombre del ingrediente</th>
                    <th class="amarillo">categoria</th>
                    <th class="amarillo">Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($ingredientes as $ingrediente)
                    
               
                <tr>
                    <td>{{$ingrediente->id}}</td>
                    <td>{{$ingrediente->name}}</td>
                    <td>{{$ingrediente->category}}</td>
                    <td class="row">
                        <a class="btn bg-success col-3" href="{{ url('/ingrediente/'.$ingrediente->id.'/edit');}}">Editar</a>
                        <form class="col-3" action="{{url('/ingrediente/'.$ingrediente->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn bg-danger" type="submit" onclick="return confirm('Desea eliminarlo?')" value="Borrar">
                        </form>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="ingrediente/create" class="btn btn-primary rounded-circle">+</a>
    </div>
    
</body>
</html>
