<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

use App\Post;
use DB;

class PostsController extends Controller
{

    public function index()
    {
        $posts=DB::table('posts')->get();
        return view('posts.index',compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        Post::create($request->all());
        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    public function edit($id)
    {
        $post=Post::findorFail($id);
        return view('posts.edit',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post=Post::findorFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = DB::table('posts')->whereId($id)->delete();
        return redirect('/posts');
    }

    // public function myContact(){
    //     return view('contact');
    // }

    // public function myContact($name){
    //     if(View::exists('contact')){
    //         return view('contact',compact('name'));
    //     }
    // }

    // public function myTest()
    // {
    //     return view('greeting');
    // }

    // public function myGreeting(){
    //     return view('greeting');
    // }

    public function myContact($data = null)
    {
        $users = [];
        if($data != null){
            $users = explode('-',$data);
        }
        return view('contact',compact('users'));
    }
}
