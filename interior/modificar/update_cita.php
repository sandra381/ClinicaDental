<?php
    include "../../inicia_conexion.php";
    $sql = "update citas set
    fechacita='".$_POST["fecha"]."',
    horacita='".$_POST["hora"]."',
    montocita='".$_POST["monto"]."',
    montopagar='".$_POST["monto"]."',
    tratamientocita='".$_POST["tratamiento"]."',
    cliente='".$_POST["cliente"]."',
    dentista='".$_POST["dentista"]."'
    where idcitas=".$_POST["idcitas"];
    $status = mysqli_query($conexion,$sql);
    if($status){
                    $alerta = 'Proceso realizado con exito.';
                    echo '<script language="javascript">alert("'.$alerta.'");
                    window.location="http://localhost/ClinicaDental/interior/barra.php?pa=buscar_pacientes"
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