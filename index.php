<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link href="project/css/bootstrap.min.css" rel="stylesheet">
  <link href="project/css/sign-in.css" rel="stylesheet">

  <script type="text/javascript">
    window.onload = function () {
      alert("Username is aboyaci and password is 123.");
    }
  </script>


</head>


<?php

include 'config.php';


if (isset($_POST["submit"])) {
  $uname = $_POST["username"];
  $upass = $_POST["upass"];

  $result = $database->query("SELECT * FROM USERS WHERE username='$uname' AND upassword='$upass'");

  if ($result->num_rows == 0) {

    echo "<h1>YOUR PASSWORD IS INCORRECT</h1>";
  } else {
    header("Location: project/homepage.php");
  }
}

?>


<body class="text-center">
  <main class="form-signin w-100 m-auto">
    <form action="index.php" method="post">
      <h1 class="h3 mb-3 fw-normal">Welcome to my project website</h1>

      <div class="form-floating">
        <input type="text" id="uname" name="username" placeholder="Enter username" required class="form-control">
        <label for="floatingPassword">Username</label>
      </div>
      <div class="form-floating">
        <input type="password" id="inputpassword1" name="upass" placeholder="Password" required class="form-control">
        <label for="floatingPassword">Password</label>
      </div>

      <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit" value="LOGIN">Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; MIS 233 Yusuf Coşkun</p>
    </form>
  </main>

  <?php

  ?>

</body>

</html>