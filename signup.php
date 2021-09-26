<?php

 include("db.php");

  if (isset($_POST['registrarse'])) {
    $email = $_POST['email'];
   //$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $password =$_POST['password'];

    $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
    $result = mysqli_query($conn, $query);
    if(!$result){
        die ("error al crear");
    }

    header('Location: login.php');
  }
?>

<?php include('styles.php'); ?>
<?php include('includes/header.php'); ?>
    <div class="main">
    <form class="form" action="signup.php" method="POST">
      <h3 class="form-title">Registrarse</h3>
      <input class="input-classic" name="email" type="text" placeholder="Ingrese su email">
      <input class="input-classic" name="password" type="password" placeholder="Ingrese su contraseña">
      <button typer="submit" class="form-btn" name="registrarse">Registrarse</button> 
      <span>o <a href="login.php">Iniciar sesión</a></span>
    </form>
    </div>
<?php include('includes/footer.php'); ?>