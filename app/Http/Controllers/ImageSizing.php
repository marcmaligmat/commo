<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;


class ImageSizing extends Controller
{
    public function update (Request $request){
        if($request->hasFile('original') )
        {
            $save_path = public_path()."/storage/image_sizing/";
            if (!file_exists($save_path)) {
                mkdir($save_path);
            }
    
    
            $main_pic = $request->file('original');
            $filename = 'original.jpg';
            // echo public_path('/storage/uploads/avatars/'. $filename);
            //Image::make($main_pic)->resize(400,300)->save( public_path('storage/image_sizing/'.$save->id.'/'.$filename));
            Image::make($main_pic)->save( public_path('storage/image_sizing/'.$filename));
            Image::make($main_pic)->resize(120,240)->save( public_path('storage/image_sizing/120x240.jpg'));
            Image::make($main_pic)->resize(300,120)->save( public_path('storage/image_sizing/300x120.jpg'));
            Image::make($main_pic)->resize(120,300)->save( public_path('storage/image_sizing/120x300.jpg'));
            Image::make($main_pic)->resize(120,600)->save( public_path('storage/image_sizing/120x600.jpg'));
            Image::make($main_pic)->resize(160,600)->save( public_path('storage/image_sizing/160x600.jpg'));
            Image::make($main_pic)->resize(800,150)->save( public_path('storage/image_sizing/800x150.jpg'));
            
            Image::make($main_pic)->resize(1200,628)->save( public_path('storage/image_sizing/1200x628.jpg'));
           
            //chmod($save_path.'/'.$filename,755);
    
        }
        //echo 'wewew';
        return view('image_sizing');
    }
}
