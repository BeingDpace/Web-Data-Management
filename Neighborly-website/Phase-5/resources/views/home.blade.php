@extends('layouts.public')

@section('title', 'Neighbor.ly')

@section('content')

<main class="main-content">
  
  <section class="hero">
    <img class="hero-bg" src="/_images/hero-3.jpg" alt="description"/>
    <div class="container">
      <div class="hero-overlay">
        <h1>Neighbor.ly is a Community for New Immigrants</h1>
        
      </div>
    </div>
  </section>
  
  <article>

    <section class="padded">
      <div class="container">
        <div class="trifold">
          <article class="icon-feature">
            <figure><i class="fa fa-commenting" aria-hidden="true"></i></figure>
            <h2>Connect with others</h2>
            <p>Chat with others in your new country of residence. Learn tips.</p>
          </article>
          <article class="icon-feature">
            <figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
            <h2>Share photos & videos</h2>
            <p>Share your experience visually and watch others experiences.</p>
          </article>
          <article class="icon-feature">
            <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
            <h2>Find places to visit</h2>
            <p>Find exciting places to visit nearby and learn more about the region</p>
          </article>

        </div>
      </div>
    </section>

    <section class="padded text-center">
      <div class="container">
        
        <h2>Sign Up Today</h2>
        <p>Join today to start learning from others in your new community.</p>
        <a class="button" href="{{ url('/register') }}">Sign Up</a>
        <a class="button-alt" href="{{ url('/services') }}">Learn more</a>
      </div>
    </section>

  </article>
  
  </main><!-- /.main-content -->
@endsection