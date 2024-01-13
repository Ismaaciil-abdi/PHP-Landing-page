<?php include_once("./connection/conn.php"); ?>
<?php include_once("./connection/fuction.php"); ?>
<?php include_once("./connection/session.php"); ?>


<?php
if (isset($_POST["change"])) {
  $email = $_POST["email"];
  $username = $_POST["username"];
  $passoword = $_POST["password"];
  $confrim = $_POST["confrimpassword"];

  // function checkmailExitsOrNot($email)


  if (strlen($username) < 4) {
    # code...
    $_SESSION["ErrorMessage"] = "Username must be greate then 4";
    redirect_to("./forgetpass.php");
  }
   elseif ($passoword !== $confrim) {
    # code...
    $_SESSION["ErrorMessage"] = "Password should be match";
    redirect_to("forgetpass.php");
  } elseif ($passoword < 8) {
    # code...
    $_SESSION["ErrorMessage"] = "Password should be 8 digits";
    redirect_to("forgetpass.php");
  } 
   else {
    global $conn;
    $sqlupdate  = " UPDATE clients SET pass='$passoword',  cpass='$confrim' WHERE username='$username' OR Email='$email'";

    $stmt = $conn->query($sqlupdate);



    if ($sqlupdate) {
      # code...
      $_SESSION["SuccessMessage"] = " | Password Changed  Successfully Back to sing in page";
      redirect_to("./forgetpass.php");
    }
  }
}


?>

<!doctype html>
<html lang="en">

<head>
  <title>Forget Password | Change</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="./css/all.min.css">
  <link rel="icon" href="./image/logo.ico" type="image/x-icon">

</head>

<body style=" background: linear-gradient(180deg, #353755 0%, #0e3959 30%, #3cff7d 30%, #3cff7d 100%);">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <h3 class="text-center mb-4">Change Password <i class="fas fa-edit"></i></h3>
            <?php echo ErrorMessage();
            echo SuccessMessage();
            ?>
            <form action="./forgetpass.php" class="login-form" method="post">

              <div class="form-group">
                <input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
              </div>
              <div class="form-group">
                <input type="text" name="username" class="form-control rounded-left" placeholder="Username" required>
              </div>
              <div class=" d-flex">
                <input type="password" name="password" class="form-control rounded-left" placeholder="Password" required>

                <input type="password" name="confrimpassword" class="form-control rounded-left" placeholder="Confrim Password" required>
              </div>
              <div class="form-group my-4">
                <button type="submit" class="form-control btn btn-success active " name="change">Change</button>
              </div>
              <div class="form-group d-md-flex">
              </div>
              <center>
                <p>Create new account <a href="./singup.php" class="text-primary">Sing UP..</a></p>
              </center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

</body>

</html>