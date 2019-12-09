@extends('layouts.app')
@section('content')
  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        {{-- <div class="intro-lead-in">Welcome To Our Studio!</div>  --}}
       <div class="intro-heading text-uppercase">Welcome To Mozza by cocotte</div>
         {{-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> --}}
      </div>
    </div>
  </header>
<!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">CATEGORY</h2>
          <h3 class="section-subheading text-muted">Categories and Style that are yours.</h3>
        </div>
      </div>
      <div class="row">
        @foreach ($category as $post)
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link"  href= "/indexmenu/{{$post->title}}">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="/image/{{$post->path}}" alt="">
          </a>
          <div class="portfolio-caption">
            <a class="card-title"  ><h4>{{$post->title}}</h4></a>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
  <!-- About -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">About</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="timeline">
            @foreach ($about as $post)
            <li>
              <div class="timeline-image">
                <img class="rounded-circle img-fluid" src="/image/{{$post->path}}" alt="">
              </div>
              <div class="timeline-panel">
                <div class="timeline-heading">
                <a class="portfolio-link"  >
                  <h4>{{$post->title}}</h4>
                </div>
                <div class="timeline-body">
                  <p class="text-muted">{{$post->content}}</p>
                </div>
              </div>
            </li>
            @endforeach
            <li class="timeline-inverted">
              <div class="timeline-image">
                    <a class="portfolio-link"  >
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>
@endsection

