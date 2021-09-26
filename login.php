<?php
  if (isset($_SESSION['user_id'])) {
    header('Location: index.php');
  }
?>

<?php

  require 'db.php';

  if (isset($_POST['iniciar_sesion'])) {
        $email=$_POST['email'];
        $password=$_POST['password'];
        $query = "SELECT * FROM users WHERE email='$email' AND password = '$password'";
        $instance = mysqli_query($conn, $query);
        $results = mysqli_num_rows($instance);
        
    if ($results > 0 ) {
        $data=mysqli_fetch_array($instance);
        $_SESSION['user_id'] = $data['id'];
        header("Location: index.php");
    
    } else {
      $message = 'Sorry, those credentials do not match';
    }
  }

?>

<?php include('styles.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="main">
    <?php if(!empty($message)): ?>
      <p class="message"> <?= $message ?></p>
    <?php endif; ?>
    <form class="form" action="login.php" method="POST">
      <h3 class="form-title">Inicie sesión</h3>
      <input class="input-classic" name="email" type="text" placeholder="Ingrese su email">
      <input class="input-classic" name="password" type="password" placeholder="Ingrese su contraseña">
      <button typer="submit" class="form-btn" name="iniciar_sesion">Iniciar sesion</button> 
      <span>o <a href="signup.php">Registrese</a></span>
    </form>
    </div>
<?php include('includes/footer.php'); ?>