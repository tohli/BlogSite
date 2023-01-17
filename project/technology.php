<?php
include "../config.php";

$sql = "SELECT * FROM posts WHERE categories='Technology'";
$result = mysqli_query($database, $sql);

?>

<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Technology News</title>
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/blog.css" rel="stylesheet">

</head>


<body>
<div class="container">

<?php
    include "header.php";
    ?>


    <?php
    include "navbar.php";
    ?>

<div class="row my-3">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\sbf.png" alt="Card image cap">
            </div>
        </div>
   
    <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\google.png" alt="Card image cap">
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\twit.png" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-nosne d-md-block" src="images\satellite.png" alt="Card image cap">
            </div>
        </div>

    </div>

    <div class="row my-3">
    <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\lapptop.png" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                        <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a>
                    </h3>
                    <div class="mb-1 text-muted"><?php echo $row['created_at']; ?></div>
                    <?php } ?>

                    
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\wp.png" alt="Card image cap">
            </div>
        </div>
    </div>
</div>
    <?php
  include "footer.php";
  ?>
</body>

</html>