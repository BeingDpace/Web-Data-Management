<?php
/**
 * Tips
 */
 
require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

$message = null;

if (!empty($_POST['comments'])) {

  // insert to database
  try {
    $sql = "INSERT INTO post (user_id, content, date_created) VALUES ( ?, ?, NOW() )";
    $statement = $pdo->prepare($sql);
    $result = $statement->execute([ $_SESSION['user_id'], $_POST['comments'] ]);
    if (false === $result) throw new PDOException('Insert failed');
  } 
  catch (PDOException $e) {
    die('Database error: ' . $e->getMessage());
  }
}

?><!doctype html>
<html>
<head>

	<title>Submit Tips | Neighbor.ly</title>

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
							<h2>Tips and Suggestion</h2>
							<p> Please provide your experience and tips below: </p>
							<form role="form" method="post" id="reused_form">
													<textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Your Tips and Suggestion" maxlength="6000" rows="7"></textarea>
													<button type="submit" class="btn btn-lg btn-warning btn-block" >Post </button>
							</form>
						</article>

            <article>
              <h2>Tips from Other users</h2>
<?php

try {
  $sql = "SELECT post.post_id, post.content, post.date_created, user.username FROM post LEFT JOIN user ON post.user_id = user.user_id ORDER BY post.date_created DESC";
  $result = $pdo->query($sql);
  $i=0;
  while ($row = $result->fetch()) {
    $cssclass = ($i%2==0) ? 'container-chat' : 'container-chat darker';
    echo '<div class="'.$cssclass.'">';
    echo '<img src="/_images/' . $row['username'] . '.jpg" />';
    echo '<p><strong>'.$row['username'].'</strong><br/>'.$row['content'].'</p>';
    echo '<span class="time-left">'.$row['date_created'].'</span>';
    echo "</div>\n";
    $i++;
  }
}
catch (PDOException $e) {
  echo 'Database error: ' . $e->getMessage();
}

?>
          </article>
				</div>

      </section>
    </article>

	</main><!-- /.main-content -->

	<?php include DIR_BASE . "/_includes/partials/footer.php"; ?>

</body>
</html>
