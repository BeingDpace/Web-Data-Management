@extends('layouts.users')

@section('title', 'Find Places to Visit')

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
            <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
            <h2>Find places to visit</h2>
            <form method="post" action="/users/places">
              {{ csrf_field() }} 
              <input type="search" name="q">
              <input type="submit" name="submit" vale="Submit">
            </form>


            @if ($query != NULL)

            <p>Found {{ $num_results }} results for {{ $query }}</p>

            @foreach ($places as $place)

              <div class="place">
              
                <p><strong>{{ $place->name }}</strong></p>

              </div>

            @endforeach

        @endif
        </article>

      </div>

    </section>
  </article>

</main><!-- /.main-content -->

@endsection