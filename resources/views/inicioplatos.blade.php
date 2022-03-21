@include('header')
@extends('layouts.navigation')
@section('content')
    

<body class="imge">
    <div class="card  align-items-center a ">
        <h1 class="card-title">BIENVENIDO AL REGISTRO</h1>
        <h2 class="card-subtitle"> Escoja la categoria que desee ver</h2>
        <div class="row">
            <div class=" col-3 m-1">
                <a class="btn btn-primary" href="/plato">PLATOS</a>
            </div>
            <div class="col-3  m-1">
                <a class="btn btn-primary" href="/ingrediente">INGREDIENTES</a>
            </div>
            

        </div>
       
       
    
    </div>

    
</body>
@endsection