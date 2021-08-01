<?php
/**
 * Visistors and immigrants landing page
 */
 
require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

?><!doctype html>
<html>
<head>

	<title>Neighbor.ly - Immigrant Community</title>

	<?php include DIR_BASE . "/_includes/partials/users-head-meta.php"; ?>

</head>
<body>

  <?php include DIR_BASE . "/_includes/partials/users-header.php"; ?>

	<main class="main-content">

  <header class="article-header">
        <div class="container">
          <h1><?php echo $_SESSION['user_role']; ?> Portal</h1>
      </div>
    </header>

    <article>

      <section class="padded">
        <div class="container">
          <div class="trifold">
            <article class="icon-feature">
              <figure><i class="fa fa-commenting" aria-hidden="true"></i></figure>
              <a href="/users/tips.php"><h2>Connect with others</h2> </a>
              <p>Share Tips and Suggestions with others.</p>
            </article>
            <article class="icon-feature">
              <figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
              <a href="/users/upload.php"><h2>Share photos & videos</h2></a>
              <p>Share your experience visually and watch others experiences.</p>
            </article>
            <article class="icon-feature">
              <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
              <a href="/users/searchplaces.php"><h2>Find places to visit</h2></a>
              <p>Find exciting places to visit nearby and learn more about the region</p>
            </article>

          </div>
        </div>
      </section>
    </article>

	</main><!-- /.main-content -->

	<?php include DIR_BASE . "/_includes/partials/footer.php"; ?>

</body>
</html>
