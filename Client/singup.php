<?php include_once("./connection/conn.php"); ?>
<?php include_once("./connection/fuction.php"); ?>
<?php include_once("./connection/session.php"); ?>


<?php
if (isset($_POST["singup"])) {
  $fullname = $_POST["fullname"];
  $phone = $_POST["phonenumber"];
  $email = $_POST["email"];
  $username = $_POST["username"];
  $passoword = $_POST["password"];
  $confrim = $_POST["confrimpassword"];



  if (strlen($username) < 4) {
    # code...
    $_SESSION["ErrorMessage"] = "Username must be greate then 4";
    redirect_to("./singup.php");
  } elseif (strlen($phonenumber) > 11) {
    $_SESSION["ErrorMessage"] = "Phone number  must be  10 or 7 numbers";
    redirect_to("./singup.php");
  } elseif (checkusernameExits($username)) {
    $_SESSION["ErrorMessage"] = "Username Exit | Please Try Another one";
    redirect_to("singup.php");
  } elseif (checkusernameExits($email)) {
    $_SESSION["ErrorMessage"] = "Email Exit | Please Try Another one";
    redirect_to("singup.php");
  } else {
    global $conn;
    $insert = "INSERT INTO clients  (fullname,phone,Email,username,pass) VALUES (:full,:ph,:Em,:us,:pas)";
    $stm = $conn->prepare($insert);
    $stm->bindValue('full', $fullname);
    $stm->bindValue('ph', $phone);
    $stm->bindValue('Em', $email);
    $stm->bindValue('us', $username);
    $stm->bindValue('pas', $passoword);
   
    $Executequery = $stm->execute();


    if ($Executequery) {
      # code...
      $_SESSION["SuccessMessage"] = "{$fullname}  | Added Successfully Back to sing in page";
      redirect_to("./singup.php");
    }
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

<body style=" background: linear-gradient(180deg, #353755 30%, #0e3959 30%, #3cff7d 30%, #3cff7d 100%);">
  <section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="login-wrap p-4 p-md-5">
            <h3 class="text-center mb-4">Sign Up <i class="fas fa-user-circle"></i></h3>

            <!-- if it's true echo success message else echo error message -->
            <?php echo ErrorMessage();
                  echo SuccessMessage(); ?>
            <!-- if it's true echo success message else echo error message -->

            <form action="./singup.php" class="login-form" method="post">

              <div class="form-group">
                <input type="text" name="fullname" id="contact-name" class="form-control rounded-left" onkeyup="validateName()" placeholder="First and Last Name" required>
                <span id="error-name"></span>
              </div>

              <div class="form-group">
                <input type="text" name="phonenumber" id="contact-phone" onkeyup="validatePhone()" class="form-control rounded-left" placeholder="Phone" required>
                <span id="error-phone"></span>
              </div>

              <div class="form-group">
                <input type="email" name="email" class="form-control rounded-left" placeholder="Email" required>
              </div>

              <div class="form-group">
                <input type="text" name="username" id="contact-username" onkeyup="ValidationUser()" class="form-control rounded-left" placeholder="Username" required>
                <span id="error-Uname"></span>
              </div>

              <div class=" d-flex">
                <input type="password" id="password" name="password" class="form-control rounded-left" placeholder="Password" required> <br>

                <!-- <input type="password" id="password" name="confrimpassword" class="form-control rounded-left" placeholder="Confrim Password" required>  <br> -->
                
              </div>
              <!-- waa outputka ka so baxaya marka input ka lagu qoro  -->
              <p class="my-3" id="message"><span id="stringh"></span></p>
              <!-- waa outputka ka so baxaya marka input ka lagu qoro  -->

              <div class="form-group my-4">
                <button type="submit" class="form-control btn btn-success active" name="singup">Create</button>
              </div>

              <div class="form-group d-md-flex">
              </div>
              <center> <a href="./singin.php" class="text-success">Already Have Account Sing in....</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="./js/validation.js"></script>
</body>

</html>