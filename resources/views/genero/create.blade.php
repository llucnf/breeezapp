@include('header')

    <div class="container mt-4" >
        <form  action="{{url('/genero')}}" method="post" enctype="multipart/form-data" id="registro">
            @csrf
            @include('genero.form')
        </form>
    </div>
