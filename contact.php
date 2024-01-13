<?php include_once("./connection/conn.php");
include_once("./connection/fuction.php");
include_once("./connection/session.php");




if (isset($_POST["submit"])) {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $email = $_POST["email"];
    $Phoneno = $_POST["phone"];
    $message = $_POST["message"];


    $query = "INSERT INTO contact(fname,lname,mails,phone,mssge) VALUES (:fn,:ln,:em,:ph,:mm)";
    $statement = $conn->prepare($query);
    $statement->bindValue('fn', $firstname);
    $statement->bindValue('ln', $lastname);
    $statement->bindValue('em', $email);
    $statement->bindValue('ph', $Phoneno);
    $statement->bindValue('mm', $message);

    $Execute = $statement->execute();
    // if phone number is less then 10 number it will show this error message
    if (strlen($Phoneno) < 10) {
        # code...
        $_SESSION["ErrorMessage"] = " Phone Number  must be at leat 10";
        redirect_to("contact.php");
    } else {
        $_SESSION["SuccessMessage"] = "{$fullname} Message sent successfully-->";
        redirect_to("contact.php");
    }
    // the the success message 
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/all.min.css">
    <link rel="icon" href="./images/logo.ico" type="image/x-icon">
    <title>StarBus | Contact </title>
</head>
<body>

    <div class="contactUs">

        <div class="box">
            <!-- forms -->
            <div class="contact form">
                <h3 class="text-primary">Send Message <i class="fa far far fa-comment-dots text-primary"></i></h3>
                <?php echo ErrorMessage();
                echo SuccessMessage(); ?>
                <form action="./contact.php" method="post">
                    <div class="formBox">
                        <div class="row50">
                            <div class="inputBox">
                                <span>First Name</span>
                                <input type="text" placeholder="Your First name" name="fname">
                            </div>
                            <div class="inputBox">
                                <span>Last Name</span>
                                <input type="text" placeholder="Your Last name" name="lname">
                            </div>
                        </div>
                        <div class="row50">
                            <div class="inputBox">
                                <span>Email</span>
                                <input type="email" placeholder="Your Email Address" name="email">
                            </div>
                            <div class="inputBox">
                                <span>Phone</span>
                                <input type="number" placeholder="Your Mobile number" name="phone">
                            </div>
                        </div>
                        <div class="row100">
                            <div class="inputBox">
                                <span>Message</span>
                                <textarea name="message" id="" cols="20" rows="10" placeholder="Write your message here......"></textarea>
                            </div>
                        </div>

                        <div class="row100">
                            <div class="inputBox">

                                <center>
                                    <input type="submit" value="Send" name="submit">
                                    <br> <br>
                                    <p>Don't want to send message <a href="./index.php">Back Home <i class="fa far far fas fas fa-arrow-circle-left"></i></a></p>
                                </center>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!-- forms -->
            <!-- more informations -->
            <div class="contact info">
                <h4>Contact info </h4>
                <div class="infoBox">
                    <div>
                        <span><i class="fa  fas fa-location"></i></span>
                        <p>Bille Road, Borama <br>Awdal</p>
                    </div>
                    <div>
                        <span><i class="fa fa-message"></i></span>
                        <a href="mailto:ismaililmi39@gmail.com">StarBus@outlook.com</a>
                    </div>
                    <div>
                        <span><i class="fa fa-phone"></i></span>
                        <a href="tel:+2520634677584">+252-063-467-7584</a>
                    </div>

                    <ul class="sci">
                        <li><a href="https://www.facebook.com/Star-Bus-Transportation-348114562364855"><i class="fab fa-facebook fa-2x"></i></a></li>
                        <li><a href=""> <i class="fab fa-instagram fa-2x"></i></a></li>
                        <li><a href=""><i class="fab fab fab fa-twitter fa-2x"></i></a></li>
                        <li><a href=""><i class="fab fab fa-linkedin fa-2x"></i></a></li>
                    </ul>
                </div>
            </div>
            <!-- more informations -->

            <div class="contact map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1237.8552594195962!2d43.18316241856082!3d9.938516840510482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x162f7f8fb66e4549%3A0x1faf0cd9b9724581!2sMasjidka%20Harrawo!5e0!3m2!1sen!2sso!4v1643624766248!5m2!1sen!2sso" style="border:0;" allowfullscreen="" loading="lazy"></iframe>

            </div>
        </div>
    </div>
    <!-- leave a message -->


</body>

</html>