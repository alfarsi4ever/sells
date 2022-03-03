<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\post;
use DB;
class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$posts = post::all();
        //$posts = post::orderBy('title','desc')->get();
        //$posts = post::orderBy('title','desc')->take(1)->get();
        // We also have where
        //$posts = DB::select('SELECT * FROM posts');
        $posts = post::orderBy('created_at','desc')->paginate(10);
        return view("posts.index")->with('posts',$posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("posts.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
        'title' => 'required',
        'Body' => 'required',
        'Image' => 'required'
    ]);
        // createpost
        $post = new post;
        $post->title = $request->input('title');
        $post->body = $request->input('Body');
        $post->image = $request->input('Image');
        $post->user_id = auth()->user()->id;
        $post->save();

        return redirect('/post')->with('success','Post Created');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = post::find($id);
        return view("posts.show")->with('posts',$posts);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = post::find($id);
        return view("posts.edit")->with('posts',$posts);
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
        $this->validate($request,[
            'title' => 'required',
            'Body' => 'required',
            'Image' => 'required'
            ]);
            // createpost
            $post = post::find($id);
            $post->title = $request->input('title');
            $post->body = $request->input('Body');
            $post->image = $request->input('Image');
            $post->save();
    
            return redirect('/post')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $posts = post::find($id);
        $posts->delete();
        return redirect('/post')->with('danger','Post Removed');
    }
}
