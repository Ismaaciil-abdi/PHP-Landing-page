<?php include_once("./connection/conn.php"); ?>
<?php include_once("./connection/fuction.php"); ?>
<?php include_once("./connection/session.php"); ?>


<?php

if (isset($_POST["singin"])) {
  $Username = $_POST["username"];
  $Password = $_POST["password"];

  global $conn;
  $sql_login = "SELECT * FROM clients WHERE username=:uSERnAME AND pass=:PAsswAoRD   limit 1";
  $stm = $conn;
  $stm = $conn->prepare($sql_login);
  $stm->bindValue(':uSERnAME', $Username);
  $stm->bindValue(':PAsswAoRD', $Password);
  $stm->execute();
  $result = $stm->rowcount();

  while ($Datarows = $stm->fetch()) {
    $_SESSION["AdminName"] = $Datarows["fullname"];
  }

  if ($result == 1) {
    $_SESSION["SuccessMessage"] = "{$Username}: Welcome Admin " . $_SESSION["AdminName"];
    redirect_to("./correctLogin.php");
  } else {
    $_SESSION["ErrorMessage"] = "Incorrect Username or Password ? Try again";
    redirect_to("./singin.php");
  }
}

?>


<!doctype html>
<html lang="en">

<head>
  <title>Login | sing in</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="icon" href="./image/logo.ico" type="image/x-icon">
</head>

<body style="

  background: linear-gradient(180deg, #353755 0%, #0e3959 30%, #3cff7d 30%, #3cff7d 100%);

">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">

            <h3 class="text-center mb-4">Sign In <i class="fas fa-sign-in"></i></h3>
            <?php echo ErrorMessage();
            ?>
            <form action="./singin.php" class="login-form" method="post">
              <div class="form-group">
                <input type="text" name="username" id="usrname" onkeyup="loginvalidation()"  class="form-control rounded-left" placeholder="Username" required>
                <span id="error-usrn"></span>
              </div>
              <div class="form-group d-flex">
                <input type="password" name=" password" class="form-control rounded-left" placeholder="Password" required>
              </div>
              <div class="form-group">
                <button type="submit" class="form-control btn btn-success active " name="singin">Login</button>
              </div>
              <div class="form-group d-md-flex">
                <div class="w-50">
                  <a href="../index.php" class=" btn btn-dark  text-center"><i class="fas fa-home"></i></a>

                </div>
                <div class="w-50 text-md-right">
                  <a href="./forgetpass.php" class="text-dark">Forgot Password</a><br>
                </div>
              </div>
              <center> <a href="./singup.php" class="text-success">New here create your account</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="./js/validation.js"></script>
  

</body>

</html>