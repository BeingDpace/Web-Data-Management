<!doctype html>
<html>
<head>
  <title>@yield('title')</title>
  
  <!-- Required meta tags --> 
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>  
  
  <!-- Bootstrap CSS --> 
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css"/>
  <link rel="stylesheet" href="/resources/css/main.css"/>
  <link rel="stylesheet" type="text/css" href="/resources/css/admin.css"/>

  <link rel="preconnect" href="https://fonts.gstatic.com"/>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300;700;900&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"/>

  @yield('extra_styles')

</head>
<body>

  @yield('header')

  @yield('content')

  @yield('footer')
 
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->  
  <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

  <script type="text/javascript">
    var oldload = window.onload;
  </script>
  <script src="_js/countryselect.js" type="text/javascript"></script>
  <script type="text/javascript">
      // just making up for my double use of onload ;)
      var newload = window.onload;
      function replacedload() { oldload(); newload(); };
      if( oldload ) { window.onload = replacedload; }
  </script>


</body>
</html>