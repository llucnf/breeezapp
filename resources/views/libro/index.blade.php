@include('header')
<body class="libro">
    <div class="container  top">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="amarillo">Titulo</th>
                    <th class="amarillo">ISBN</th>
                    <th class="amarillo">IdAutor</th>
                    <th class="amarillo">IdGenero</th>
                    <th class="amarillo">Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($libros as $libro)
                    
               
                <tr>
                    
                    <td>{{$libro->titulo}}</td>
                    <td>{{$libro->ISBN}}</td>
                    <td>{{$libro->IdAutor}}</td>
                    <td>{{$libro->IdGenero}}</td>
                    <td class="row">
                        <a class="btn bg-success col-3" href="{{ url('/libro/'.$libro->id.'/edit');}}">Editar</a>
                        <form class=" col-3 " action="{{url('/libro/'.$libro->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                        <input class="btn bg-danger" type="submit" onclick="return confirm('Desea eliminarlo?')" value="Borrar">
                        </form>
                    </td>
                   
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="libro/create" class="btn btn-primary rounded-circle">+</a>
    </div>
    
   
</body>
</html>