<?php
/**
 * Search Places
 */
 
require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

?><!doctype html>
<html>
<head>

	<title>Search Places | Neighbor.ly</title>

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
            <article class="icon-feature">
              <figure><i class="fa fa-map-marker" aria-hidden="true"></i></figure>
              <h2>Find places to visit</h2>
              <form method="get">
              <input type="search" name="q">
              <input type="submit" name="submit" vale="Submit">
</form>
            </article>
          </div>
        </div>
      </section>
    </article>

<?php

$message = null;

if (!empty($_GET['submit'])) {

  echo '<article><section class="padded"><div class="container">';

  try {
    $sql = "SELECT * FROM places_to_visit WHERE location_name LIKE :name_query ";
    $statement = $pdo->prepare($sql);
    $statement->bindValue(':name_query', '%' . $_GET['q'] . '%');
    $result = $statement->execute();
    if (false === $result) throw new PDOException('Insert failed');

    $data = $statement->fetchAll();

    echo 'Found ' . count($data) . ' results for ' . $_GET['q'];

    foreach ($data as $row) {
        echo '<div class="place">';
        echo '<p><strong>'.$row['location_name'].'</strong></p>';
        echo "</div>\n";
    }
  } 
  catch (PDOException $e) {
    echo 'Database error: ' . $e->getMessage();
  }
}

echo '</div></section></article>';

?>

	</main><!-- /.main-content -->

	<?php include DIR_BASE . "/_includes/partials/footer.php"; ?>

</body>
</html>
