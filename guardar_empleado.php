<?php

include("db.php");


$D8 = 3785.53*8;
$D84 = $D8 + (4731.91 * 4);
$N8 = 5110.46 * 8;
$F8 = 6624.67 * 8;
$F84 = $F8 + (7571.05 * 4);
$R84= $D8 + 5110.46;

if(isset($_POST['guardar_empleado'])){
    
    $cedula = $_POST['cedula'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $direccion = $_POST['direccion'];
    $telefono = $_POST['telefono'];
    $turno = $_POST['turno'];
    $salario = 0;
    $dias=$_POST['dias'];

    if($turno == 'D8'){
        $salario=$D8*$dias;
    }
    else if($turno == 'D84'){
        $salario=$D84*$dias;
    }
    else if($turno == 'N8'){
        $salario=$N8*$dias;
    }
    else if($turno == 'F8'){
        $salario=$F8*$dias;
    }
    else if($turno == 'F84'){
        $salario=$F84*$dias;
    }
    else if($turno == 'R84'){
        $salario=$R84*$dias;
    }
    else{
        die('Error al calcular el salario del empleado');
    }
    $salud= ($salario*0.04);
    $pension= ($salario*0.04);
    
    $subsidio = 0;

    if($salario>1817052){
        $subsidio = 106454;
    }   

    $salario = $salario - $pension - $salud + $subsidio;


    $query = "INSERT INTO empleados() VALUES ('$cedula', '$nombre', '$apellido', '$direccion', '$telefono','$turno','$salario')";
    $result = mysqli_query($conn, $query);
    
    if(!$result){
        die("Fallo el sistema");
    } else{
        echo 'se guardo esa vaina';
    }
    
    $_SESSION['message'] = 'Empleado guardado exitosamente.';
    header('Location: index.php');

}

?>