<?php

include("db.php");

if(isset($_GET['cedula'])) {
  $cedula = $_GET['cedula'];
  $query = "DELETE FROM empleados WHERE cedula = $cedula";
  $result = mysqli_query($conn, $query);
  if(!$result) {
    die("La query falló.");
  }

  $_SESSION['message'] = 'el empleado se eliminó correctamente';
  header('Location: index.php');
}

?>