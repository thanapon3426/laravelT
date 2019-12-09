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
            <h1 class="card-title text-center">MODIFY CATEGORY</h1>
            <form action="/posts/{{$post->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <input type="text" name="title" placeholder="Enter Title" value="{{$post->title}}" class="btn btn-warning">
            <input class="btn btn-warning" type="submit" value="Save"  >
            </form>


            <form action="/posts/{{$post->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="Delete" class="btn btn-danger">
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</body>


@endsection




