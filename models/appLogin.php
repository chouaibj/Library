<?php
include("config.php");


if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);



  	$password = md5($password);
  	$query = "SELECT * FROM users WHERE login='$username' AND password='$password'";
  	$results = mysqli_query($db, $query);
  	if (mysqli_num_rows($results) == 1) {
  	  $_SESSION['username'] = $username;
  	  $_SESSION['success'] = "You are now logged in";
  	  header('location: ../index.php');
  	}else {
      $message = "Wrong username/password combination";
      echo "<script type='text/javascript'>alert('$message');</script>";

  	}

}

if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
    $message = "You are now logged out!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  	header("location: ../index.php");
  }

?>
