            <?php   include "../inicia_conexion.php";
                $sql = "insert into pagos(montopa,fechapa,citapagos,tipopago) 
                values('".$_POST["monto"]."','".$_POST["fecha"]."','".$_POST["citapagos"]."','".$_POST["tipopago"]."')";
                $status = mysqli_query($conexion,$sql);
                if($status){
                    $numerocita =$_POST["citapagos"];
                    $montopag = $_POST["monto"];
                    $sql ="select * from citas c where (c.idcitas = $numerocita)";
                    $resultado1 = mysqli_query($conexion,$sql);
                    while($fila1 = mysqli_fetch_array($resultado1)){
                        $montoguar = $fila1["montopagar"];
                        $montoresta = $montoguar - $montopag;
                        $sql = "update citas set
                        montopagar = $montoresta
                        where idcitas =$numerocita";
                        $status = mysqli_query($conexion,$sql);
                        if($status){ 
                            $alerta = 'PAGO realizado con exito.';
                            echo '<script language="javascript">alert("'.$alerta.'");
                            window.location="http://localhost/ClinicaDental/interior/barra.php?pa=registro_pagos"
                            </script>';   
                        }
                        else{
                            $alerta = 'Sucedio un error con su solicitud';
                            echo '<script language="javascript">alert("'.$alerta.'");
                            </script>'; 
                                }
                        } 
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