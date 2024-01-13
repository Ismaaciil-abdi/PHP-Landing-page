<?php
  function redirect_to($New_Location){
    header("Location:".$New_Location);
    exit;
  }



 function checkusernameExits($username)
{
  global $conn;
  $sql = "SELECT username FROM user WHERE username=:UserNa";
  $statement = $conn->prepare($sql);
  $statement->bindValue('UserNa', $username);
  $statement->execute();
  $Output = $statement->rowCount();
  if ($Output == 1) {
    return true;
  } else {
    return false;
  }
}


function checkusernameExitsOrNot($username)
{
  global $conn;
  $sql = "SELECT username FROM admins WHERE username=:UserNa";
  $statement = $conn->prepare($sql);
  $statement->bindValue('UserNa', $username);
  $statement->execute();
  $Output = $statement->rowCount();
  if ($Output == 1) {
    return true;
  } else {
    return false;
  }
}

function login_required()
{
  if (isset($_SESSION["adminFullname"])) {
    return true;
    // code...
  } else {
    $_SESSION["ErrorMessage"] = "Login Required";
    redirect_to("admin.php");
  }
}


  function totaluser()
  {
    global $conn;
    $sql = "SELECT  COUNT(*) FROM user";
    $stmt = $conn->query($sql);
    $totaladmin =  $stmt->fetch();
    $adminlist = array_shift($totaladmin);
    echo $adminlist;
  }


  function totalDriver()
  {
    global $conn;
    $sql = "SELECT  COUNT(*) FROM driver";
    $stmt = $conn->query($sql);
    $totaladmin =  $stmt->fetch();
    $adminlist = array_shift($totaladmin);
    echo $adminlist;
  }

function totalcargos()
{
  global $conn;
  $sql = "SELECT  COUNT(*) FROM cargo";
  $stmt = $conn->query($sql);
  $totaladmin =  $stmt->fetch();
  $adminlist = array_shift($totaladmin);
  echo $adminlist;
}


function admins()
{
  global $conn;
  $sql = "SELECT  COUNT(*) FROM admins";
  $stmt = $conn->query($sql);
  $totaladmin =  $stmt->fetch();
  $adminlist = array_shift($totaladmin);
  echo $adminlist;
}

 ?>
