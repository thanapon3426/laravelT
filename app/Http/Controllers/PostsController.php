<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;


use Illuminate\Support\Facades\Input;
use App\Category;
use App\Menu;
use App\About;
use App\Team;
use App\Users;
use DB;
class PostsController extends Controller
{

    public function index()
    {

        $category=DB::table('category')->get();
        $about=DB::table('about')->get();
        return view('posts.index',compact('category'),compact('about'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function createmenu($type)
    {
        return view('posts.createmenu',compact('type'));
    }


    public function createabout()
    {
        return view('posts.createabout');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('path')){
            $name=$file->getClientOriginalName();
            $file->move('image',$name);
            $input['path']=$name;
        }
        Category::create($input);
        return redirect('/posts');
    }

    public function storemenu(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('path')){
            $name=$file->getClientOriginalName();
            $file->move('image',$name);
            $input['path']=$name;
        }
        Menu::create($input);
        return redirect('/posts');
    }

    public function storeabout(Request $request)
    {
        $input = $request->all();
        if($file = $request->file('path')){
            $name=$file->getClientOriginalName();
            $file->move('image',$name);
            $input['path']=$name;
        }
        About::create($input);
        return redirect('/posts');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.show',compact('post'));
    }

    public function edit($id)
    {
        $post=Category::findorFail($id);
        return view('posts.edit',compact('post'));
    }

    public function editmenu($id)
    {
        $post=Menu::findorFail($id);
        return view('posts.editmenu',compact('post'));
    }
    public function edittypet($id)
    {
        $post=Menu::findorFail($id);
        return view('posts.editstatusmenu',compact('post'));
    }

    public function editabout($id)
    {
        $post=About::findorFail($id);
        return view('posts.editabout',compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post=Category::findorFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    public function updatemenu(Request $request, $id)
    {
        $post=Menu::findorFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    public function updateabout(Request $request, $id)
    {
        $post=About::findorFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    public function updateusers(Request $request, $id)
    {
        $post=Users::findorFail($id);
        $post->update($request->all());
        return redirect('/posts');
    }

    public function destroy($id)
    {
        $post = DB::table('category')->whereId($id)->delete();
        return redirect('/posts');
    }

    public function destroymenu($id)
    {
        $post = DB::table('menu')->whereId($id)->delete();
        return redirect('/posts');
    }
    public function destroyabout($id)
    {
        $post = DB::table('about')->whereId($id)->delete();
        return redirect('/posts');
    }

    public function destroyuser($id)
    {
        $post = DB::table('users')->whereId($id)->delete();
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
    // public function mymenu()
    // {
    //     $menu=DB::table('chees')->get();

    //     return view('menu',compact('menu'));
    // }

    public function mymenu($type)
    {
        $menu=DB::select('select * from menu where type = ?',[$type]) ;
        $types=$type;
        return view('menu',compact('menu'),compact('types'));
    }


    public function indexx()
    {

        $category=DB::table('category')->get();
        $about=DB::table('about')->get();
        return view('indexx',compact('category'),compact('about'));
    }

    public function indexmenu($type)
    {
        $menu=DB::select('select * from menu where type = ?',[$type]) ;
        $types=$type;
        return view('indexmenu',compact('menu'),compact('types'));
    }

    public function indexusers()
    {
        $menu=DB::select('select * from users ') ;
        return view('index',compact('menu'));
    }
}
