<?php
$server = 'localhost:3307';
$username = 'root';
$password = '';
$database = 'usuarios';
try {
  $conn = new PDO("mysql:host=$server;dbname=$usuarios;", $usuario, $contraseña);
} catch (PDOException $e) {
  die('Connection Failed: ' . $e->getMessage());
}
?>