
          <?php 
                include "../inicia_conexion.php";
                $sql = "Insert INTO usuario(dpi,nombres,apellidos,fecha_nac,correo,telefono,clave,dir,alergias)
                values('".$_POST["dpi"]."','".$_POST["nombres"]."','".$_POST["apellidos"]."','".$_POST["fecha_nac"]."',
                '".$_POST["correo"]."','".$_POST["telefono"]."',
                '".$_POST["clave"]."','".$_POST["dir"]."','".$_POST["alergias"]."')";
                $status = mysqli_query($conexion,$sql);
                if($status){
                    $alerta = 'Proceso realizado con exito.';
                    echo '<script language="javascript">alert("'.$alerta.'");
                    window.location="http://localhost/ClinicaDental/interior/barra.php?pa=registro_usuario"
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
