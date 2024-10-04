
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bibliothèque en Ligne</title>
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="js/modal.js"></script>
  
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">-->
        <!--    <span class="navbar-toggler-icon"></span>-->
        <!--</button>-->

        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>accueil">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>livres">Livres</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= URL ?>apropos">A Propos</a>
                </li>
                <li>
                    <?php 
                    if (isset($_SESSION['username'])) 
                    {                 
                        $usr = $_SESSION['username'];               
                        echo "<li><a href='index.php?logout='1''>Logout ($usr)</a></li>";               
                        
                    } else {    
                        echo "<a onclick=\"document.getElementById('id01').style.display='block'\" style=\"width:auto;\">Login</a>";
                    }         
                    ?>
                        
                </li>
            </ul>
        </div>
    </nav>

    <div class="container">
        <h1 class="rounded border border-dark p-2 m-2 text-center text-white bg-info"><?= $titre ?></h1>
        <?= $content ?>
    </div>

    <div id="id01" class="modal">
  
  <form class="modal-content animate" action="/index.php" method="post">
    <div class="imgcontainer">
      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
    </div>

    <div class="container">
      <label for="uname"><b>Pseudo</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <span class="psw">Pas encore de compte? <a onclick="document.getElementById('registerModal').style.display='block'" style="width:auto;">s'inscrire</a></span>
    </div>
  </form>
</div>

  <!-- MODAL REGISTER-->
  <div class="modal" role="dialog" id="registerModal">
    <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
            <h3 class="modal-title">S'inscrire</h3>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <div class="modal-body">
            <form action="models/appRegister.php" id="regForm" method="post">
            <div class="form-group">
              <input type="text" name="usernameReg" id="usernameReg" class="form-control" placeholder="Username" style="color:black;">
            </div>
            <div class="form-group">
              <input type="password" name="passwordReg" id="passwordReg" class="form-control" placeholder="Password" style="color:black;">
            </div>
            <div class="form-group">
              <input type="password" name="confirm_password" id="confirm_password" class="form-control"  placeholder="Confirm password" style="color:black;">
            </div>
            <div class="form-group">
              <input type="email" name="email" class="form-control" id="email" placeholder="Email address"  style="color:black;">
            </div>

            <div class="modal-footer">
              <input action="#" type="submit" class="btn btn-success" onclick="submitRegisterForm()" value="Sign up">
            </div>
            </form>


          </div>
      </div>
    </div>
  </div>
  <!-- MODAL REGISTER END -->

    
</body>
</html>
