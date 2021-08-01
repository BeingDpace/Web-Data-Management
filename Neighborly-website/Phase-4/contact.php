<?php
/**
 * Contact Us page
 */

require($_SERVER['DOCUMENT_ROOT'] . '/_includes/loader.php');

$message = null;

if (!empty($_POST['submit'])) {

    if (! validate_email( $_POST['email'] )) {
        $message = array('error', 'Invalid Email address');
    } else {
        $email = $_POST['email'];
        $name = $_POST['name'];
        $comments = $_POST['comments'];

        $to = "danevil@uta.edu";
        $subject = "Form Submitted";
        $txt = $email . "\n" . $name . "\n" . $comments;
        $headers = "From: danevil@uta.cloud";

        mail($to,$subject,$txt,$headers);

        $message = array('success', 'We have received your query. We will get back to you.');
    } 

}

?><!doctype html>
<html>
<head>

	<title>Contact Us - Neighbor.ly</title>
  
	<?php include DIR_BASE . "/_includes/partials/head-meta.php"; ?>

</head>
<body>

    <?php include DIR_BASE . "/_includes/partials/header.php"; ?>
	
	<main class="main-content">

    <article>
      
      <header class="article-header">
        <div class="container">
        <h1>Contact Us</h1>
      </div>
      </header>

      <?php if ($message) displayMessage($message); ?>
      
      <section class="padded">
        <div class="container">
          <p>Let us know any questions, comments, or suggestions using the form below.</p>

          <form method="post">
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

    <?php include DIR_BASE . "/_includes/partials/footer.php"; ?>

</body>
</html>