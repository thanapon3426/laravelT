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
            <h1 class="card-title text-center">MODIFY STATUS</h1>
            <form action="/updatemenu/{{$post->id}}" method="post">
            {{ csrf_field() }}
            <input type="hidden" name="_method" value="PUT">
            <h4>STATUS</h4>
            <input class="btn btn-warning" type="text" name="status" value="{{$post->status}}">
            <input type="submit" value="Save" class="btn btn-warning">
            </form>

            
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
@endsection

