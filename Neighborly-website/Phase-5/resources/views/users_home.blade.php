@extends('layouts.users')

@section('title', 'Neighbor.ly')

@section('content')

<main class="main-content">

  <header class="article-header">
        <div class="container">
          @if( auth()->check() )
          <h1> {{ auth()->user()->role }} Portal</h1>
          @endif
      </div>
    </header>

    <article>

      <section class="padded">
        <div class="container">
          <div class="trifold">
            <article class="icon-feature">
              <figure><i class="fa fa-commenting" aria-hidden="true"></i></figure>
              <a href="/users/tips"><h2>Connect with others</h2> </a>
              <p>Share Tips and Suggestions with others.</p>
            </article>
            <article class="icon-feature">
              <figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
              <a href="/users/media"><h2>Share photos & videos</h2></a>
              <p>Share your experience visually and watch others experiences.</p>
            </article>
            <article class="icon-feature">
              <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
              <a href="/users/places"><h2>Find places to visit</h2></a>
              <p>Find exciting places to visit nearby and learn more about the region</p>
            </article>

          </div>
        </div>
      </section>
    </article>

	</main><!-- /.main-content -->

@endsection