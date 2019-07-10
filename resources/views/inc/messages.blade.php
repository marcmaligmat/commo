@if(count($errors) > 0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger offset-md-4 col-md-4 mt-3">
            {{$error}}
        </div>
    @endforeach
@endif

@if(session('success'))
    <div class="alert alert-success offset-md-4 col-md-4 mt-3">
        {{session('success')}}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger offset-md-4 col-md-4 mt-3">
        {{session('error')}}
    </div>
@endif