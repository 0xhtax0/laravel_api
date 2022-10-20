<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\CategoryPost;
use App\Post;
use App\User;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function tim_kiem(){
        // $category_post = Post::orderBy('id','DESC')->paginate(3);
        $keywords = $_GET['keywords'];
        $category_post = Post::with('category')->where('title','LIKE','%'.$keywords.'%')->orwhere('short_desc','LIKE','%'.$keywords.'%')->orwhere('desc','LIKE','%'.$keywords.'%')->get();

        $category = CategoryPost::all();

        return view('pages.tim_kiem')->with(compact('category','category_post','keywords'));

    }

    public function index()
    {
        $all_post = Post::orderBy('id','DESC')->paginate(3);
        $viewest_post = Post::orderBy('views','DESC')->limit(3)->get();
        $newest_post = Post::orderBy(DB::raw('RAND()'))->limit(3)->get();
        $category = CategoryPost::all();
        return view('pages.main')->with(compact('category','all_post','newest_post','viewest_post'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
