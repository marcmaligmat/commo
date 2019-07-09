<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;
class UsersController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('users.index',compact('user'));
    
    }

    public function edit(Request $request)
    {
        //echo $request->get('name');

        if($request->hasFile('avatar'))
        {
            $user  = Auth::user();
        //     // Delete current image before uploading new image
        //     if ($user->avatar != 'default.jpg') 
        //     {
        //         $file = public_path('/storage/uploads/avatars/' . $user->avatar);
        //         unlink($file);
        //     }


        //     $avatar = $request->file('avatar');
        //     $filename = time() . '.' . $avatar->getClientOriginalExtension();
        //    // echo public_path('/storage/uploads/avatars/'. $filename);
        //     Image::make($avatar)->resize(90,90)->save( public_path('storage/uploads/avatars/'. $filename));
        //     $user->avatar = $filename;
        //     $user->save();

        //     return redirect('users')->with('success', "Image uploaded successfully.");

            $avatar = $request->file('avatar');
            $fileNameToStore = time() . '.jpg'; 

            $source = storage_path().'/app/public/uploads/avatars/'.$fileNameToStore;
            $target = public_path('/uploads/avatars/' . $avatar);

            dd($source, $target);

            Image::make($source)->fit(90, 90)->save($target);
        }

    }

}
