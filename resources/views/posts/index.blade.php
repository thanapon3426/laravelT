@extends('layouts.app')

@section('content')

  <!-- Header -->
  <header class="masthead" style="background-image: url('/image/asd.jpg');">
    <div class="container" style="height: 500px;">
      <div class="intro-text">
        {{-- <div class="intro-lead-in">Welcome To Our Studio!</div>  --}}
       <div class="intro-heading text-uppercase" >Data management</div>
         {{-- <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Tell Me More</a> --}}
      </div>
    </div>
  </header>

  <!-- Services -->



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
          <a class="portfolio-link"  href= "/menu/{{$post->title}}">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="/image/{{$post->path}}" alt="">
          </a>
          <div class="portfolio-caption">
            <a class="card-title"  href="{{route('posts.edit',$post->id)}}"><h4>{{$post->title}}</h4></a>
          </div>
        </div>
        @endforeach
        <div class="col-md-4 col-sm-6 portfolio-item">
            <a class="portfolio-link"  href= "{{route('posts.create')}}">
                <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <i class="fas fa-plus fa-3x"></i>
                </div>
                </div>
                <img class="img-fluid" src="/image/03-thumbnail.jpg" alt="">
            </a>
        </div>

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
                <a class="portfolio-link"  href= "/editabout/{{$post->id}}">
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
                    <a class="portfolio-link"  href= "/createabout">
                <h4>ADD</h4>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- Team -->
  {{-- <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Our Amazing Team</h2>
          <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
        </div>
      </div>

      <div class="row">

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/1.jpg" alt="">
            <h4>Kay Garland</h4>
            <p class="text-muted">Lead Designer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>

        <div class="col-sm-4">
          <div class="team-member">
            <img class="mx-auto rounded-circle" src="img/team/2.jpg" alt="">
            <h4>Larry Parker</h4>
            <p class="text-muted">Lead Marketer</p>
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>




      </div>
      <div class="row">
        <div class="col-lg-8 mx-auto text-center">
          <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque, laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
        </div>
      </div>
    </div>
  </section> --}}

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Project Name</h2>
                <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                <ul class="list-inline">
                  <li>Date: January 2017</li>
                  <li>Client: Threads</li>
                  <li>Category: Illustration</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  @endsection

