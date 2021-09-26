<?php
include("db.php");
$cedula = $_GET['cedula'];
$nombre = '';
$apellido = '';
$direccion = '';
$telefono = '';


if  (isset($_GET['cedula'])) {
  $query = "SELECT * FROM empleados WHERE cedula=$cedula";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_array($result);
    $nombre = $row['nombre'];
    $apellido= $row['apellido'];
    $direccion = $row['direccion'];
    $telefono = $row['telefono'];
  }
}

if (isset($_POST['actualizar'])) {
  $cedula = $_GET['cedula'];
  $nombre = $_POST['nombre'];
  $apellido = $_POST['apellido'];
  $direccion = $_POST['direccion'];
  $telefono = $_POST['telefono'];

  $query = "UPDATE empleados set nombre = '$nombre', apellido = '$apellido',direccion='$direccion',telefono='$telefono' WHERE cedula=$cedula";
  mysqli_query($conn, $query);
  $_SESSION['message'] = 'Empledo actualizado exitosamente';
  header('Location: index.php');
}

?>

<?php include('styles.php'); ?>
<?php include('includes/header.php'); ?>

      <div class="main">

      <form class="form" action="editar_empleado.php?cedula=<?php echo $_GET['cedula']; ?>" method="POST">

        <h3 class="form-title">Editar empleado</h3>
        
        <input name="cedula" type="num" class="input-classic" value="<?php echo $cedula; ?>" placeholder="Cédula" disabled >
        <input name="nombre" type="text" class="input-classic" value="<?php echo $nombre; ?>" placeholder="Nombre" >
        <input name="apellido" type="text" class="input-classic" value="<?php echo $apellido; ?>" placeholder="Apellido" >
        <input name="direccion" type="text" class="input-classic" value="<?php echo $direccion; ?>" placeholder="Dirección" >
        <input name="telefono" type="text" class="input-classic" value="<?php echo $telefono; ?>" placeholder="Telefono" >
        
        <button class="form-btn" type="submit" name="actualizar">
          Actualizar
        </button>

      </form>

      </div>
      
<?php include('includes/footer.php'); ?>