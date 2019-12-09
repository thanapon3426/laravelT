@extends('layouts.app')

@section('content')

<body>
    <header class="masthead" style="background-image: url('/image/about.jpg');">
        <div class="container" style="height: 150px;">
            <div class="intro-text">
            {{-- <div class="intro-lead-in">Welcome To Our Studio!</div> --}}
            {{-- <div class="intro-heading text-uppercase">It's Nice To Meet You</div> --}}
            {{-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> --}}
            </div>
        </div>
    </header>


<section class="bg-light page-section" id="portfolio">
    <div class="container">
         <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">{{$types}}</h2>
          <h3 class="section-subheading text-muted">Categories and Style that are yours.</h3>
        </div>
      </div>
         <div class="row">
        @foreach ($menu as $post)
        <div class="col-md-4 col-sm-6 portfolio-item " alt="Center">
          <a class="portfolio-link"   >

            <img class="img-fluid " src="/image/{{$post->path}}" >
          </a>
          <div class="portfolio-caption">
            <a class="card-title"  href=""><h3>{{$post->title}}</h3></a>

            @if($post->discount == null)
                <h5>Price : {{$post->price}} .-Bath</h5>
            @else
            <s> <h5> Price : {{$post->price}} .-Bath</h5></s>
            <font color="RED"> <h5>Discount : {{$post->discount}} .-Bath</h5></font>
            @endif


            @if($post->status == 'Open for sale')
                <h5>Status : {{$post->status}}</h5>
            @else
            <font color="RED">
                <h5>Status : {{$post->status}}</h5>
            </font>
            @endif

          </div>
        </div>
        @endforeach
        {{-- <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href= "/createmenu">
                <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
                </div>
                <img class="img-fluid" src="/image/plus.jpg" alt="">
            </a>
        </div> --}}
    </div>
</body>

@endsection


