@extends('layouts.users')

@section('title', 'Chat')

@section('content')

<main class="main-content">

  <header class="article-header">
        <div class="container">
          <h1> {{ $user_role }} Portal</h1>
      </div>
    </header>

    <article>
      <section class="padded">
      <div class="container">
        <article class="icon-feature">
          <figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
          <h2>Chat with other Users</h2>
          @if( auth()->check() )
            <iframe src="/chat?name={{ auth()->user()->fname }}" style="width:90%;height:600px;margin:0 auto;border:0;" ></iframe>
          @endif
        </article>

        </div>
        </section>
        </article>

	</main><!-- /.main-content -->

@endsection