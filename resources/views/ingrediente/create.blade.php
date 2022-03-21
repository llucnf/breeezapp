@include('header')

    <div class="container mt-4" >
        <form  action="{{url('/ingrediente')}}" method="post" enctype="multipart/form-data" id="registro">
            @csrf
            @include('ingrediente.form')
        </form>
    </div>
