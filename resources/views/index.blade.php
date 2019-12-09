@extends('layouts.app')

@section('content')
<header class="masthead" style="background-image: url('/image/bg.jpg');">
    <div class="container" style="height: 100px;">
    </div>
</header>



<body>
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <font color="RED">
            <h1 class="card-title text-center" >MANAGER USERS</h1>
            </font>
            @foreach ($menu as $post)


            <form action="/updateusers/{{$post->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <h4>NAME : {{$post->id}}</h4>
            <input class="btn btn-warning" type="text" name="name" value="{{$post->name}}">

            <h4>E-MAIL</h4>
            <input  class="btn btn-warning"  name="email" value="{{$post->email}}">
            <h4>STATUS</h4>
            <input  class="btn btn-warning"  name="status" value="{{$post->status}}">
            <input type="submit" value="Save" class="btn btn-warning">
            </form>


            <form action="/destroyusers/{{$post->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

@endsection







