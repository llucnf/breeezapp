@include('header')

    <div class="container mt-4" >
        <form  action="{{url('/plato')}}" method="post" enctype="multipart/form-data" id="registro">
            @csrf
            @include('plato.form')
        </form>
    </div>
