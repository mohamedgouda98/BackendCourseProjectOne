@if($errors->any())
    <ul class="alert alert-danger" role="alert">

        @foreach($errors->all() as $error)
            <li> {{$error}}</li>
        @endforeach
    </ul>

@endif

@if(session('status'))
    <div class="alert alert-success" role="alert">
        {{session('status')}}
    </div>
@endif
