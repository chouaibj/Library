<?php

include("config.php");
  
  // REGISTER USER
  
if (isset($_POST['usernameReg'])) {

  // receive all input values from the form + protection for mysql injections
  $username = mysqli_real_escape_string($db, $_POST['usernameReg']);
  $email = mysqli_real_escape_string($db, $_POST['email']);
  $password_1 = mysqli_real_escape_string($db, $_POST['passwordReg']);
  $password_2 = mysqli_real_escape_string($db, $_POST['confirm_password']);

  // first check the database to make sure
  // a user does not already exist with the same username and/or email
  // $user_check_query = "SELECT * FROM users WHERE login='$username' OR email='$email' LIMIT 1";
  $result = mysqli_query($db, "SELECT * FROM users WHERE login='$username' OR email='$email' LIMIT 1");
  $user = mysqli_fetch_assoc($result);

    $errors = array();

  if ($user) { // if user exists
    if ($user['login'] === $username) {
      array_push($errors, "Username already exists");
    }
    echo"il rentre dans le premier if";

    if ($user['email'] === $email) {
      array_push($errors, "email already exists");
    }
  }

  // Finally, register user if there are no errors in the form
  if (count($errors) == 0) {
    
  	$password = md5($password_1);//encrypt the password before saving in the database

  	$query = "INSERT INTO users (login, password, email)
  			  VALUES('$username', '$password', '$email')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
    $message = "Your account has been created!";
    echo "<script type='text/javascript'>alert('$message');</script>";
  	header('location: ../index.php');
  }

}

?>
