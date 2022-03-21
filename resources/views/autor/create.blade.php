@include('header')
<body>
    <div class="container mt-4" >
        <form  action="{{url('/autor')}}" method="post" enctype="multipart/form-data" id="registro">
            @csrf
            @include('autor.form')
        </form>
    </div>
    
</body>
</html>