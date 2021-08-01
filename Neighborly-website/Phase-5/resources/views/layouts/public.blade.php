<!doctype html>
<html>
<head>
  <title>@yield('title') | Neighbor.ly</title>
  
  <!-- Required meta tags --> 
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>  
  
  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/main.css') }}"/>

  <link rel="preconnect" href="https://fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700;900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>

  @yield('extra_styles')

</head>
<body>

  <header class="main-header">
      <div class="container">
        <div class="main-logo">
          <a href="{{ url('/') }}">Neighbor.ly</a>
        </div>
        
        <nav class="main-nav">
          <ul>
            <li><a href="{{ url('/about') }}">About Us</a></li>
            <li><a href="{{ url('/services') }}">Services</a></li>
            <li><a class="button" href="{{ url('/login') }}">Login</a></li>
          </ul>
        </nav>
      </div>
  </header><!-- /.main-header -->


  @yield('content')

  
  <footer class="main-footer">
      <div class="container">
        <div class="grid-50-50">
          <div>
        <p>&copy; Daniel Evilsizor, Muraj Shrestha, and Deepesh Bhatta<br/>
          CSE 5335-002 -Spring 2021 - Group Project</p>

      </div>
      <div>
        <ul class="footer-links">
          <li><a href="{{ url('/contact') }}"><i class="fa fa-envelope-o"></i> Contact Us</a></li>
          <li><a href="{{ url('/blog') }}"><i class="fa fa-rss"></i> Blog</a></li>
        </ul>
      </div>
    </div>
      </div>
  </footer><!-- /.main-footer -->
 
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

</body>
</html>