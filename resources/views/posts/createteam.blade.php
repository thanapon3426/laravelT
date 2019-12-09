@extends('layouts.app')

@section('content')

<header class="masthead" style="background-image: url('/image/header-bg2.jpg');">
    <div class="container" style="height: 150px;">
        <div class="intro-text">
        {{-- <div class="intro-lead-in">Welcome To Our Studio!</div> --}}
        {{-- <div class="intro-heading text-uppercase">It's Nice To Meet You</div> --}}
        {{-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> --}}
        </div>
    </div>
</header>

<div class="container">
<form action="/storeteam" method="get" enctype="multipart/form-data">
    {{ csrf_field() }}
    <input type="text" name="title" placeholder="Enter Title">
    <textarea name="content" cols="30" rows="10"> </textarea>
    <input type="text" name="face" placeholder="Enter face">
    <input type="text" name="ins" placeholder="Enter ins">
    <input type="file" name="path">
    <input type="submit" name="submit" id="submit">
</form>
</div>


@endsection
