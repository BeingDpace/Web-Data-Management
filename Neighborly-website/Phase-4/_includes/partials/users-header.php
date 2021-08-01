
	<header class="main-header">
    <div class="container">
      <div class="main-logo">
        <a href="/">Neighbor.ly</a>
      </div>

      <nav class="main-nav">
        <ul>
          <!-- <li><a href="/users/chat.php">Chat</a></li> -->
          <li><a href="/users/upload.php">Upload Files</a></li>
            <li><a href="/users/searchplaces.php">Search Places</a></li>
            <li><a href="/users/tips.php">Tips</a></li>
            <li><a href="/users/donation.php">Contributions</a></li>
          <li><a class="button" href="/login.php">Log Out</a></li>
        </ul>
      </nav>
    </div>
	</header><!-- /.main-header -->

<?php
if (!empty($_SESSION['username'])) {
    echo '<p class="login_status">Logged in as ' . $_SESSION['username'] . '</p>';
}
?>