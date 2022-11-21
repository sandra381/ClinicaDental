<html>
    <head><link rel="shortcut icon" href="../logo.ico" type="image/x-icon"></head>
</html>
<?php 
   include "../inicia_conexion.php";
   session_start();
   $paginas2 = isset($_GET['pa']) ? strtolower($_GET['pa']) : 'pacientes';
    require_once 'menu3.php';
    require_once ''.$paginas2.'.php';
 ?>  
