
<?php

if (isset($_SESSION['user_id'])) {
    $id=$_SESSION['user_id'];
  $query = "SELECT * FROM users WHERE id = '$id'";
  $instance = mysqli_query($conn, $query);
  $results = mysqli_num_rows($instance);
  $user = null;

  if ($results > 0) {
    $user = $instance;
  }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Empleados</title>
    <link rel="stylesheet" href="../styles/index.css" type="text/css">
</head>
<body>

<div class="nav">
        <?php if(!empty($user)): ?>
        <a class="nav-item" href="index.php">Empleados</a>
        <a class="nav-item" href="logout.php">Cerrar Sesion</a>
        <?php else: ?>
            <a class="nav-item" href="login.php">Iniciar Sesion</a>
            <a class="nav-item" href="signup.php">Registrarse</a>
        <?php endif; ?>
</div>
    
