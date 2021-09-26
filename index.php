<?php include('db.php'); ?>

<?php include('includes/header.php'); ?>

<?php include('styles.php'); ?>

<?php 

  if(!isset($_SESSION['user_id'])){
    header('Location: login.php');
  }

?>

<div class="main">
    
    <form class="form" action="guardar_empleado.php" method="POST">
        <h3 class="form-title">Crear empleado</h3>

        <input class="input-classic" type="number" name="cedula" placeholder="Cédula">
        <input class="input-classic" type="text" name="nombre" placeholder="Nombre">
        <input class="input-classic" type="text" name="apellido" placeholder="Apellido">
        <input class="input-classic" type="text" name="direccion" placeholder="Dirección">
        <input class="input-classic" type="text" name="telefono" placeholder="Teléfono">
        <input class="input-classic" type="number" name="dias" placeholder="Dias trabajados">
        <select class="input-classic" name="turno"> 
          <option value="D8">D8: 8 horas diarias ordinarias</option>
          <option value="D84">D84: 8 Horas diarias ordinarias, 4 horas extras diurnas ordinarias</option>
          <option value="N8">N8: 8 horas diarias nocturnas</option>
          <option value="F8">F8: 8 horas diarias ordinarias dominicales/festivas</option>
          <option value="F84">F84: 8 horas diarias dominicales/festivas, 4 horas extras diurnas dominicales/festivas</option>
          <option value="R84">R84: horas diarias ordinarias, 4 horas recargo nocturno ordinario</option>
        </select>
        
        <button class="form-btn" typer="submit" name="guardar_empleado">Guardar</button> 
    </form>

    <?php if (isset($_SESSION['message'])) { ?>
      <div class="message">
        <?= $_SESSION['message']?>
      </div>
    <?php } ?>

    <form class="gen-nom" action="generar_nomina.php" method="POST">
      <h3 class="gen-nom-title">Generar nomina</h3>
      <select class="gen-nom-select" name="tipo_nomina">
        <option value="semanal">Semanal</option>
        <option value="quincenal">Quincenal</option>
        <option value="mensual">Mensual</option>
      </select>
      <button class="gen-nom-btn" type="submit" name="generar_nomina">Generar nomina</button>
    </form>


    <?php if (isset($_SESSION['tipo_nomina'])) { ?>
      <h2 class="nom-title"> Nomina <?= $_SESSION['tipo_nomina']?> </h2>  
    <?php } ?>  

    <?php if (isset($_SESSION['tipo_nomina'])) { ?>
      <table class="nom-tab">
        <thead class="nom-tab-header">
          <tr>
            <th>Cédula</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Cargo</th>
            <th>Salario</th>
            <th>Opciones</th>
          </tr>
        </thead>

        <tbody>

          <?php
          $query = "SELECT * FROM empleados";
          $resultado_empleados = mysqli_query($conn, $query);    

          while($row = mysqli_fetch_assoc($resultado_empleados)) { ?>

          <tr>
            <td><?php echo $row['cedula']; ?></td>
            <td><?php echo $row['nombre']; ?></td>
            <td><?php echo $row['apellido']; ?></td>
            <td><?php echo $row['direccion']; ?></td>
            <td><?php echo $row['telefono']; ?></td>
            <td><?php echo $row['turno']; ?></td>
            <td>
              <?php 
                if($_SESSION['tipo_nomina']=='semanal'){
                  echo $row['salario'] / 4;
                }
                else if($_SESSION['tipo_nomina']=='quincenal'){
                  echo $row['salario'] / 2;
                }
                else{
                  echo $row['salario'];
                }
              ?>
            </td>

            <td>
              <a class="updt-btn" href="editar_empleado.php?cedula=<?php echo $row['cedula']?>" class="">
                Editar
              </a>
              <a class="del-btn" href="eliminar_empleado.php?cedula=<?php echo $row['cedula']?>" class="">
                Eliminar
              </a>
            </td>
          </tr>

          <?php } ?>

        </tbody>
      </table>
    <?php } ?>
  </div>
   
  
          
<?php include('includes/footer.php'); ?>