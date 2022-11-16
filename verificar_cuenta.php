<?php
    include "inicia_conexion.php";
    session_start();
    $dpi = $_POST['dpi'];
    $clave = $_POST['clave'];

    $sql = "select * from usuario u where u.dpi ='$dpi' and u.clave = '$clave'";
    $resultado = mysqli_query($conexion,$sql);
    while($fila = mysqli_fetch_array($resultado)){         
        if($dpi == '1234567891234' && $clave=='admin123.'){
            header("Location: interior/barra.php");
        }else{
            $_SESSION['dpi'] = $dpi;
            header("Location: interior/interior_usuario/barra2.php");
        }      
    }     
?>
   