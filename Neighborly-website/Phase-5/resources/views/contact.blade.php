@extends('layouts.public')

@section('title', 'Contact us')

@section('content')

<main class="main-content">

<article>
  
  <header class="article-header">
    <div class="container">
    <h1>Contact Us</h1>
  </div>
  </header>
  
  <section class="padded">
    <div class="container">
      <p>Let us know any questions, comments, or suggestions using the form below.</p>

      <form method="post" action="/contact">
        <fieldset>

          <div class="form-field">
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required />
          </div>

          <div class="form-field">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" required />
          </div>

          <div class="form-field">
            <label for="comments">Comments</label>
            <textarea name="comments" id="comments" maxlength="500"></textarea>
          </div>

          <input type="submit" name="submit" value="Submit" />

        </fieldset>
      </form>

    </div>
  </section>

</article>

</main><!-- /.main-content -->

@endsection