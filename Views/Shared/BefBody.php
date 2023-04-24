<?php
   include_once "../RootClasses/Config.php";
   session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title><?php echo Config::$title; ?></title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
   <header class="mb-3">
      <nav class="navbar navbar-expand-lg bg-body-tertiary">
         <div class="container-fluid">
            <?php
               if(!isset($_SESSION["email"])){
                  echo "<a href='Login.php' class='navbar-brand'>LoginSystem</a>";
               } else {
                  echo "<a href='Main.php' class='navbar-brand'>LoginSystem</a>";
               }
            ?>
            <ul class="navbar-nav">
               <?php 
                  if(!isset($_SESSION["email"])){
                     echo <<< END
                        <li class="nav-item me-2">
                           <a href="Login.php" class="btn btn-primary">Login</a>
                        </li>
                        <li class="nav-item">
                           <a href="Regsiter.php" class="btn btn-primary">Register</a>
                        </li>
                     END;
                  } else {
                     echo <<< END
                        <li class="nav-item">
                           <a href="../Backend/Logout.backend.php" class="btn btn-primary">Logout</a>
                        </li>
                     END;
                  }
               ?>
            </ul>
         </div>
      </nav>
   </header>