@include('header')

    <div class="container mt-4" >
        <form  action="{{url('/libro')}}" method="post" enctype="multipart/form-data" id="registro">
            @csrf
            @include('libro.form');
        </form>
    </div>
