<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
use Illuminate\Http\Request;
use Auth;
use DB;
use File;
use Image;
class BlogController extends Controller
{
    public function __construct()
    {
        //$this->middleware(['auth','verified']);

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(!empty(Auth::user()->id)){
            return view('blog.create')
                ->with('user_id', Auth::user()->id);
        } else {
            return view('auth.login');
        }
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {



        $this->validate($request, [
            'title' => 'required',
            'main_pic' => 'required',
            'body' => 'required',
            'user_id' => 'required',
        ]);

        //dd($request->all());
        $save = Blog::create([
            'title' => strtolower($request->get('title')),
            'body' => $request->get('body'),
            'user_id' => $request->get('user_id'),
        ]);
        

        //check if blog creation has file for main pic
        if($request->hasFile('main_pic') )
        {
            $save_path = public_path()."/storage/blogs/".$save->id;
            if (!file_exists($save_path)) {
                mkdir($save_path, 755, true);
            }


            $main_pic = $request->file('main_pic');
            $filename = 'main_pic.jpg';
            // echo public_path('/storage/uploads/avatars/'. $filename);
            Image::make($main_pic)->resize(400,300)->save( public_path('storage/blogs/'.$save->id.'/'.$filename));


        }

        if($save){
            return redirect()->back()->with('success', 'Blog Created');
        } else {
            return redirect()->back()->with('error', 'There was a problem');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show($title)
    {
        $title = $this->removeDash($title);
        //echo $title;
        $blog =  Blog::where('title',$title)->first();
        
        return view('blog.show',compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }

    public function formatDate(){
        $this->created_at = date_format($this->created_at,"d F Y");
    }

    private function removeDash($title){
        return str_replace('-',' ',$title);
    }
}
