@extends('layouts.users')

@section('title', 'Upload Photos and Videos')

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

        <article class="icon-feature">
          <figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
          <h2>Upload photos & videos</h2>
            <form enctype="multipart/form-data" method="post" action="/users/media">
              {{ csrf_field() }} 
                <input type="file" id="myFile" name="upload_file">
                <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Any comments or description" maxlength="6000" rows="7"></textarea>
                <input type="submit" name="submit">
            </form>

        </article>

        <article>
          <h2>Uploads from Other users</h2>

          
          @foreach ($media as $med)

          <div class="container-chat">

            <img src="/_images/{{ $med->username }}.jpg" />
            <p><strong>{{ $med->username }}</strong><br/>
            <a href="{{ $med->path }}" target="_blank"><img src="{{ $med->path }}" /></a> <br/>
            {{ $med->content }}
            </p>

            <span class="time-left">{{ $med->date_created }}</span>

          </div>

          @endforeach

      </article>
    </div>
  </section>
</article>

</main><!-- /.main-content -->

@endsection