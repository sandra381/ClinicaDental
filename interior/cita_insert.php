
<?php   include "../inicia_conexion.php";
                $sql = "insert into  citas(idcitas,fechacita,horacita,montocita,montopagar,tratamientocita,cliente,dentista)
                values('".$_POST["idcitas"]."','".$_POST["fecha"]."','".$_POST["hora"]."','".$_POST["monto"]."','".$_POST["monto"]."',
                '".$_POST["tratamiento"]."','".$_POST["cliente"]."','".$_POST["dentista"]."')";
                $status = mysqli_query($conexion,$sql);
                if($status){
                    $alerta = 'Proceso realizado con exito.';
                    echo '<script language="javascript">alert("'.$alerta.'");
                    window.location="http://localhost/ClinicaDental/interior/barra.php?pa=registro_cita";
                    </script>';   
                }
                else{
                    if(mysqli_errno($conexion)==1062){
                        $alert = 'ERROR- la cita ya existe';
                        echo '<font color ="red"><script language="javascript">alert("'.$alert.'");</script> </font>';
                    }else{
                        $errormes = 'Sucedio un error con su solicitud';
                        echo '<font color ="red"><script language="javascript">alert("'.$errormes.'");</script></font>';
                    }
                }
            ?>