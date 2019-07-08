<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use App\Blog;
use Illuminate\Http\Request;
use Auth;
use DB;
class BlogController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified']);

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
        return view('blog.create')
                ->with('user_id', Auth::user()->id);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request->all());
        Blog::create([
            'title' => strtolower($request->get('title')),
            'body' => $request->get('body'),
            'user_id' => $request->get('user_id'),
        ]);

        return redirect()->back();
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
