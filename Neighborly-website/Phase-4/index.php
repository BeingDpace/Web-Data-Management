<?php

require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

?><!doctype html>
<html>
<head>
  
	<title>Neighbor.ly - Immigrant Community</title>

  <?php include DIR_BASE . "/_includes/partials/head-meta.php"; ?>

</head>
<body>

  <?php include DIR_BASE . "/_includes/partials/header.php"; ?>

	<main class="main-content">
  
    <section class="hero">
      <img class="hero-bg" src="_images/hero-3.jpg" alt="description"/>
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
          <a class="button" href="register.php">Sign Up</a>
          <a class="button-alt" href="services.php">Learn more</a>
        </div>
      </section>

    </article>
    
	</main><!-- /.main-content -->

  <?php include DIR_BASE . "/_includes/partials/footer.php"; ?>

</body>
</html>