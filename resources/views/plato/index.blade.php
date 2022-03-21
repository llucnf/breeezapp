@include('header')

<body>
    <div class="container top">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th class="amarillo">ID del plato</th>
                    <th>Image</th>
                    <th class="amarillo">Nombre del plato</th>
                    <th class="amarillo">Precio €</th>
                    <th class="amarillo">Ingredientes</th>
                    <th class="amarillo">Modificar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($platos as $plato)


                <tr>
                    <td>{{$plato->id}}</td>
                    <td><img src="/image/{{ $plato->image }}" width="100px"></td>
                    <td>{{$plato->name}}</td>
                    <td>{{$plato->price}}</td>

                    <td>
                        @foreach ($plato->ingredientes as $ingrediente)
                          
                            <li>{{$ingrediente->name}}</li>
                        @endforeach
                    </td>
                    <td class="row">
                        <a class="btn bg-success col-3" href="{{ url('/plato/'.$plato->id.'/edit');}}">Editar</a>
                        <form class="col-3" action="{{url('/plato/'.$plato->id)}}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <input class="btn bg-danger" type="submit" onclick="return confirm('Desea eliminarlo?')"
                                value="Borrar">
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="plato/create" class="btn btn-primary rounded-circle">+</a>
    </div>

</body>

</html>
