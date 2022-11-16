<html>
    <head><link rel="shortcut icon" href="logo.ico" type="image/x-icon"></head>
</html>
<?php 
    $paginas = isset($_GET['p']) ? strtolower($_GET['p']) : 'inicio';
    require_once 'exterior/menu.php';
    require_once 'exterior/'.$paginas.'.php';
 ?>   