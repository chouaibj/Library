<?php
session_start();
include('models/config.php');
if (isset($_POST['username'])) {
  $username = mysqli_real_escape_string($db, $_POST['username']);
  $password = mysqli_real_escape_string($db, $_POST['password']);



      $password = md5($password);
      $query = "SELECT * FROM users WHERE login='$username' AND password='$password'";
      $results = mysqli_query($db, $query);
      if (mysqli_num_rows($results) == 1) {
        $_SESSION['username'] = $username;
        $_SESSION['success'] = "You are now logged in";
        header('location: index.php');
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
      header("location: index.php");
  }
  
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS']) ? "https" : "http").
"://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));

require_once "controllers/LivresController.controller.php";
$livreController = new LivresController;

try{
    if(empty($_GET['page'])){
        require "views/accueil.view.php";
    } else {
        $url = explode("/", filter_var($_GET['page']),FILTER_SANITIZE_URL);

        switch($url[0]){
            case "accueil" : require "views/accueil.view.php";
            break;
            case "apropos" : require "views/apropos.view.php";
            break;
            case "livres" : 
                if(empty($url[1])){
                    $livreController->afficherLivres();
                } else if($url[1] === "l") {
                    $livreController->afficherLivre($url[2]);
                } else if($url[1] === "a") {
                    $livreController->ajoutLivre();
                } else if($url[1] === "m") {
                    $livreController->modificationLivre($url[2]);
                } else if($url[1] === "s") {
                    $livreController->suppressionLivre($url[2]);
                } else if($url[1] === "av") {
                    $livreController->ajoutLivreValidation();
                } else if($url[1] === "mv") {
                    $livreController->modificationLivreValidation();
                }
                else {
                    throw new Exception("La page n'existe pas");
                }
            break;
            default : throw new Exception("La page n'existe pas");
        }
    }
}
catch(Exception $e){
    $msg = $e->getMessage();
    require "views/error.view.php";
}
