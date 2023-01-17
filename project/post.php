<?php
include '../config.php';

// Get the post ID from the URL
$id = $_GET['id'];

// Retrieve the post from the database
$query = "SELECT * FROM posts WHERE id = $id";
$result = mysqli_query($database, $query);
$post = mysqli_fetch_assoc($result);
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <title>
    <?php echo $post['title']; ?>
  </title>

</head>
<div class="container">
  <?php
  include "header.php";
  include "navbar.php";
  ?>
</div>

<body>

  <div class="blog-post">
    <h2 class="blog-post-title mx-5">
      <?php echo $post['title']; ?>
    </h2>
    <p class="blog-post-meta mx-5"><?php echo $post['created_at']; ?></p>

    <p class="post-check">
      <?php echo $post['body']; ?>
    </p>

  </div>

  <?php
  include "footer.php";
  ?>
</body>

</html>