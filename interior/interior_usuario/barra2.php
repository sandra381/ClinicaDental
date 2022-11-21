
<html>
    <head><link rel="shortcut icon" href="../../logo.ico" type="image/x-icon"></head>
</html>
<?php 
   include "../../inicia_conexion.php";
   session_start();
   $dpiuser = $_SESSION['dpi'];
   $paginas2 = isset($_GET['pa']) ? strtolower($_GET['pa']) : 'proximacita';
    require_once 'menu2.php';
    require_once ''.$paginas2.'.php';
 ?>  
