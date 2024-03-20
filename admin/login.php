<!-- if($username == "admin" && $password == "secreto") {
  $_SESSION['admin'] = true;
  header("Location: admin.php");
} else {
  // mostrar error de inicio de sesión
} -->

<?php
session_start(); 

if(isset($_SESSION['admin'])) {
  header("Location: admin.php"); 
  exit();
}

if($_SERVER['REQUEST_METHOD'] == 'POST') {

  $username = $_POST['username'];
  $password = $_POST['password'];

  if($username == "admin" && $password == "secreto") {
    $_SESSION['admin'] = true;
    header("Location: admin.php");
    exit();
  } else {
    echo "<p>Datos de acceso incorrectos</p>"; 
  }

}
?>