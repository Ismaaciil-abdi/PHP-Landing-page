<?php
$host = "localhost";
$dbname = "starbus";
$username = "root";
$passwd = "";

$conn = new PDO("mysql:root=$host;dbname=$dbname", "$username", "$passwd");

/*
if($conn == true) {
    echo" CONNECTED";
}else {
    echo"NOT CONNECTED";
}
*/

?>