@extends('layouts.users')

@section('title', 'Tips')

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
            <h2>Tips and Suggestion</h2>
            <p> Please provide your experience and tips below: </p>
            <form role="form" method="post" id="reused_form">
              {{ csrf_field() }} 
              <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Tips and Suggestion" maxlength="6000" rows="7"></textarea>
              <button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
            </form>
          </article>

          <article>
            <h2>Tips from Other users</h2>

            @foreach ($tips as $tip)

              <div class="container-chat">
              
                <img src="{{ $tip->username }}.jpg" />
                <p><strong>{{ $tip->username }}</strong><br/>

                {{ $tip->content }}
                </p>

                <span class="time-left">{{ $tip->date_created }}</span>

              </div>

            @endforeach

        </article>
      </div>

    </section>
  </article>

</main><!-- /.main-content -->

@endsection