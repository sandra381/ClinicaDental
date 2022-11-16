<meta charset="UTF-8">
<html>
	<?php
        include "inicia_conexion.php";    
 	?>
     <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
    <title>
       DINERS CLUB
    </title>
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Oswald:500');
        *,
*:before,
*:after {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
body {
  background-color: #080710;
}
.background {
  width: 430px;
  height: 520px;
  position: absolute;
  transform: translate(-50%, -50%);
  left: 50%;
  top: 50%;
}
.background .shape {
  height: 200px;
  width: 200px;
  position: absolute;
  border-radius: 50%;
}
.shape:first-child {
  background: linear-gradient(#1845ad, #23a2f6);
  left: -80px;
  top: -80px;
}
.shape:last-child {
  background: linear-gradient(to right, #ff512f, #f09819);
  right: -30px;
  bottom: -80px;
}
form {
  height: 650px;
  width: 400px;
  background-color: rgba(255, 255, 255, 0.13);
  position: absolute;
  transform: translate(-50%, -50%);
  top: 50%;
  left: 50%;
  border-radius: 10px;
  backdrop-filter: blur(10px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
  padding: 50px 35px;
}
form * {
  font-family: "Poppins", sans-serif;
  color: #ffffff;
  letter-spacing: 0.5px;
  outline: none;
  border: none;
}
form h3 {
  font-size: 32px;
  font-weight: 500;
  line-height: 42px;
  text-align: center;
}

label {
  display: block;
  margin-top: 30px;
  font-size: 16px;
  font-weight: 500;
}
input {
  display: block;
  height: 50px;
  width: 100%;
  background-color: rgba(255, 255, 255, 0.07);
  border-radius: 3px;
  padding: 0 10px;
  margin-top: 8px;
  font-size: 14px;
  font-weight: 300;
}
::placeholder {
  color: #e5e5e5;
}
button {
  margin-top: 30px;
  width: 100%;
  background-color: #ffffff;
  color: black;
  padding: 1px 0;
  font-size: 18px;
  font-weight: 600;
  border-radius: 5px;
  cursor: pointer;
}
.social {
  margin-top: 30px;
  display: flex;
}
.social div {
  background: red;
  width: 150px;
  border-radius: 3px;
  padding: 5px 10px 10px 5px;
  background-color: rgba(255, 255, 255, 0.27);
  color: #eaf0fb;
  text-align: center;
}
.social div:hover {
  background-color: rgba(255, 255, 255, 0.47);
}
.social .fb {
  margin-left: 25px;
}
.social i {
  margin-right: 4px;
}

#boton1,
#boton2 {
  color: gray;
  height: 50px;
  cursor: pointer;
}
    </style>
    <body>
                <div align="center">
                <div class="background">
                <div class="shape"></div>
                <div class="shape"></div>
                </div>
                    <form class="login"  name="datos" method="post" action="registrar_insert.php"> 
                    <font size="5"><b>REGISTRAR</b></font><br>
                    <table border="0" class="flex-row">
                        <tr>
                            <td>
                                <input type="text" name="dpi"  minlength="13"  placeholder="DPI" required>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="nombres"  placeholder="NOMBRES" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="apellidos"  placeholder="APELLIDOS" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="email" name="correo" placeholder="CORREO" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" name="direccion"  placeholder="DIRECCION" required >
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="number" name="telefono" size="8" minlength="8" placeholder="TELEFONO" required >
                            </td>
                        </tr>
                        
                        <tr>
                            <td>
                                <input type="text" name="clave" size="15" placeholder="CONTRASEŃA" required >
                            </td>
                        </tr>
                    </table>
                    <br><input type="submit" value="Guardar Datos" id="boton1">
                    <br><a href = "../map.php" id="boton2">Regresar</a>
                    </form>
                </div>
    </body>
</html>