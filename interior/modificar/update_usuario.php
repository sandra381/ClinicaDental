<?php
    include "../../inicia_conexion.php";
    $sql = "update usuario set
    dpi='".$_POST["dpi"]."',
    nombres='".$_POST["nombres"]."',
    apellidos='".$_POST["apellidos"]."',
    fecha_nac='".$_POST["fecha_nac"]."',
    correo='".$_POST["correo"]."',
    telefono='".$_POST["telefono"]."',
    clave='".$_POST["clave"]."',
    dir='".$_POST["dir"]."',
    alergias='".$_POST["alergias"]."'
    where dpi=".$_POST["dpi"];
    $status = mysqli_query($conexion,$sql);
    if($status){
                    $alerta = 'Proceso realizado con exito.';
                    echo '<script language="javascript">alert("'.$alerta.'");
                    window.location="http://localhost/ClinicaDental/interior/barra.php?pa=pacientes"
                    </script>';    
    }
    else{
        if(mysqli_errno($conexion)==1062){
            $alert = 'ERROR- el usuario ya existe';
            echo '<font color ="red"><script language="javascript">alert("'.$alert.'");</script> </font>';
        }else{
            $errormes = 'Sucedio un error con su solicitud';
            echo '<font color ="red"><script language="javascript">alert("'.$errormes.'");</script></font>';
        }
    }
?>