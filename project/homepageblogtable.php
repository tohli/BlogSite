<?php
include "../config.php";

$sql = "SELECT * FROM posts ORDER BY id ASC";
$result = mysqli_query($database, $sql);

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="project/css/bootstrap.min.css" rel="stylesheet">


</head>


<body>
    <div class="row my-3">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-primary">World</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>

                    <p class="card-text mb-auto">Erdogan has announced a new batch of gas.</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\blacksea.jpg" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-success">Technology</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>
                    <p class="card-text mb-auto">SBF in trouble as evidence closes in on him.</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\sbf.png" alt="Card image cap">
            </div>
        </div>
    </div>

    <div class="row mb-2">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-secondary">Design</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>
                    <p class="card-text mb-auto">AiDA takes the design industry by storm.</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\aida.png" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-danger">Business</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>
                    <p class="card-text mb-auto">Auto industry continues to shrink.</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\auto.png" alt="Card image cap">
            </div>
        </div>
    </div>

    <div class="row my-3">
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-warning">Science</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>
                    <p class="card-text mb-auto">Can NASA find a way to protect it's million dollar investments?</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\mars.png" alt="Card image cap">
            </div>
        </div>
        <div class="col-md-6">
            <div class="card flex-md-row mb-4 box-shadow h-md-250">
                <div class="card-body d-flex flex-column align-items-start">
                    <strong class="d-inline-block mb-2 text-info">Travel</strong>
                    <h3 class="mb-0">
                        <?php if ($row = mysqli_fetch_assoc($result)) { ?>
                            <a class="text-dark" href="post.php?id=<?php echo $row['id']; ?>">
                                <?php echo $row['title']; ?>
                            </a>
                        </h3>
                        <div class="mb-1 text-muted">
                            <?php echo $row['created_at']; ?>
                        </div>
                    <?php } ?>
                    <p class="card-text mb-auto">We take a look at the best travel deals to take you to your dream country.</p>
                    <a href="post.php?id=<?php echo $row['id']; ?>">Continue reading</a>
                </div>
                <img class="card-img-right flex-auto d-none d-md-block" src="images\plane.png" alt="Card image cap">
            </div>
        </div>
    </div>


</body>

</html>