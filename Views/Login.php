<?php
   include_once "../RootClasses/Config.php";
   Config::$title = "Login";
   include_once "Shared/BefBody.php"; 
?>

<div class="w-25 m-auto">
   <form action="../Backend/Login.backend.php" method="post">
      <div class="mb-3 form-floating">
         <input type="email" name="email" id="email" class="form-control" placeholder="email">
         <label for="email">Email</label>
      </div>
      <div class="form-floating mb-3">
         <input type="password" name="password" id="password" class="form-control" placeholder="password">
         <label for="password">Password</label>
      </div>
      <button type="submit" class="btn btn-primary">Login</button>
   </form>
</div>

<?php include_once "Shared/AftBody.php"; ?>

