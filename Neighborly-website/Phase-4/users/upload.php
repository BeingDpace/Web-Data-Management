<?php
/**
 * Upload pictures and videos
 */
 
require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

$message = null;

if (!empty($_POST['submit'])) {

    $allowed_types = ['png','jpg','mp4', 'jpeg'];
    $file = $_FILES['filename'];
    $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

    // Check file size and type
    if ($file["size"] > 10000000) {
        $message = ['error',"Sorry, your file is too large (> 10 Mb)."];
    }
    else if (!in_array( $ext, $allowed_types)) {
        $message = ['error', "Sorry, this type of file is not allowed"];
    }
    else {

        $uploadPath = $_SERVER['DOCUMENT_ROOT'] . '/uploads/' . basename($file['name']);
        $result = move_uploaded_file($file['tmp_name'], $uploadPath);
        $mediaType = ($ext == 'mp4') ? 'video' : 'photo';

        // insert to database
        try {
            $sql = "INSERT INTO media (user_id, type, path, content, date_created) VALUES ( ?, ?, ?, ?, NOW() )";
            $statement = $pdo->prepare($sql);
            $result = $statement->execute([ 
                $_SESSION['user_id'], 
                $mediaType,
                '/uploads/' . basename($file['name']),
                $_POST['comments'] 
            ]);
            if (false === $result) throw new PDOException('Insert failed');
            $message = ['success', 'File uploaded successfully'];
        }
        catch (PDOException $e) {
            $message = ['error', 'Database error: ' . $e->getMessage()];
        }
    }
}

?><!doctype html>
<html>
<head>

	<title>Upload pictures and videos | neighbor.ly</title>

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

        <?php if ($message) displayMessage($message); ?>

            <article class="icon-feature">
							<figure><i class="fa fa-video-camera" aria-hidden="true"></i></figure>
              <h2>Upload photos & videos</h2>
                <form enctype="multipart/form-data" method="post">
                    <input type="file" id="myFile" name="filename">
                    <textarea class="form-control" type="textarea" name="comments" id="comments" placeholder="Any comments or description" maxlength="6000" rows="7"></textarea>
                    <input type="submit" name="submit">
                </form>

            </article>

            <article>
              <h2>Uploads from Other users</h2>
<?php

try {
    $sql = "SELECT M.id, M.content, M.date_created, M.type, M.path, U.username FROM media M LEFT JOIN user U ON M.user_id = U.user_id ORDER BY M.date_created DESC";
    $result = $pdo->query($sql);
    $i=0;
    while ($row = $result->fetch()) {
        $cssclass = ($i%2==0) ? 'container-chat' : 'container-chat darker';
        echo '<div class="'.$cssclass.'">';
        echo '<img src="/_images/' . $row['username'] . '.jpg" />';
        echo '<p><strong>'.$row['username'].'</strong><br/>';
        echo '<a href="'.$row['path'].'">'.$row['path'].'</a><br/>'.$row['content'].'</p>';
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
