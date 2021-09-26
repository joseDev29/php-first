<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'taller_1_adm',
  'adm123',
  'taller_1_db'
) or die(mysqli_erro($mysqli));
/*
$server = 'localhost';
$username = 'taller_1_adm';
$password = 'adm123';
$database = 'taller_1_db';

try {
  $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
*/
?>