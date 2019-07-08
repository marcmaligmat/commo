@extends('layouts.app')

@section('content')
<div class="offset-md-2 col-md-8">
  
    {{-- {{var_dump($game_info)}}  --}}
    <div class="col-12 mt-5">
        <div class="cardshadow-sm">
            <div class="card-header">
                <h4 class="mb-0">Create</h4>
            </div>
            <div class="card-body">

                @if(!empty($success))
                    <div>{{var_dump($success)}}</div>
                @endif
                <form enctype="multipart/form-data" action="#" method="POST">@csrf
                    <div class="form-group row">

                        <label for="title" class=" col-form-label  mt-1">Title</label>                                  
                        <input type="text" class="form-control" id="title" name="id" placeholder="" ">

                        
                        
                        <label for="ckeditor" class=" col-form-label  mt-1">Blog Body</label>  
                        <div class='col-12 mx-0 px-0'>
                            <textarea id ="ckeditor" class="form-control" name="body">
                            </textarea>
                        </div>
                        

                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        
                    </div>
                    <div class="mx-0 px-0">
                        <input type="submit" value="Create" class="mt-3 mx-auto btn  btn-primary" >
                    </div>

                    
                </form>

            </div>
        </div> 
    </div>                    
</div>
<script src="{{ asset('vendor/unisharp/laravel-ckeditor/ckeditor.js') }}"></script>
<script>
    CKEDITOR.replace( 'ckeditor' );
</script>
@endsection