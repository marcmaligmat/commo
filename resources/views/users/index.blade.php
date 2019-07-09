@extends('layouts.app')

@section('content')
<div class="container">
    <h1><a href="blog/create">Create Blog</a></h1>

    <div class="tabs tabs-bordered clearfix" id="tab-2">

        <ul class="tab-nav clearfix">
            <li><a href="#profile-tab">Profile&nbsp;<i class="icon-settings2 norightmargin"></i></a></li>
            <li><a href="#tabs-6">My Blog Posts&nbsp;<i class="icon-blogger1 norightmargin"></i></a></li>
            <li><a href="#tabs-7">My Comments&nbsp;<i class="icon-comments1 norightmargin"></i></a></li>
            
        </ul>

        <div class="tab-container">

            {{-- ****************PROFILE TAB************* --}}


            <div class="tab-content clearfix" id="profile-tab">
                <div class="">
                    <div class="d-flex flex-wrap justify-content-center m-0 py-3 ">
                            <input type="image" src="/storage/uploads/avatars/{{ $user->avatar }}" style="  border-radius:50%;" class=" m-0 py-3"  style="height:90px; width:90px">
                            <input type="file" id="edit_profile_picture" style="display: none;" />
                        <span class="col-12 text-center pt-3" ><h4>Welcome, {{ ucfirst($user->name) }} </h4></span>
                    </div>
                </div>

                <form enctype="multipart/form-data" action="/profile" method="POST">@csrf
                    <div class="form-group row ">

                        {{-- Form Input for Name --}}
                        <div class="col-sm-12 col-lg-3 row justify-content-lg-end">
                            <div class="">
                                <label for="name" class=" col-form-label  mt-1 mr-2">Name</label>
                            </div>
                                
                        </div>
                        <div class="col-sm-10 col-lg-7 p-0">                                                                              
                            <input type="text" class="form-control text-small" id="name" placeholder="{{ucfirst($user->name)}}">
                        </div> 
                    </div>


                    <div class="row align-items-center pt-4">

                        <div class="offset-md-4 col-sm-7 p-0">
                            <input type="submit" value="Save" class="pull-left btn  btn-primary" >
                            
                        </div>
                    </div>

                </form>
            </div>{{-- ****************END PROFILE TAB ************* --}}




















            <div class="tab-content clearfix" id="tabs-6">
                Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.
            </div>
            <div class="tab-content clearfix" id="tabs-7">
                <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
                Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.
            </div>


        </div>

    </div>
</div>


@endsection