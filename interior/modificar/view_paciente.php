
<meta charset="UTF-8">
<html>
	<?php
        include "../../inicia_conexion.php";
 	?>
    <head>
    <title>
    KOOL SMILES
    </title>
    <style type="text/css">
         @import url('https://fonts.googleapis.com/css?family=Lobster&display=swap');
         @import url('https://fonts.googleapis.com/css2?family=Advent+Pro&family=DM+Serif+Display&family=Nunito:wght@500&display=swap');
         
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
            transition: all 0.5s ease;
            }
            h1{
                font-family: 'DM Serif Display', serif;
            }
            form {
            width: 400px;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            
            }
            form div, form label, form input, form textarea {
            width: 100%;
            }

            .field:nth-of-type(2) {
            margin: 16px 0;
            }

            label, input, textarea {
            padding: 8px;
            }

            label, [placeholder] {
            color: #555;
            }

            label i {
            margin: 0 10px 0 0;
            }

            .field:focus-within label {
            color: #000;
            letter-spacing: 2px;
            }

            input, textarea {
            background: rgba(255, 255, 255, 0.5);
            border: ;
            border-radius: 4px;
            box-shadow: 0 8px 6px -6px #555;
            }
            input:focus, textarea:focus {
            background: white;
            box-shadow: none;
            }

            textarea {
            resize: none;
            }
            textarea::-webkit-scrollbar {
            width: 0;
            }

            button {
            background: #083a7d;
            margin: 16px 0 10px 0;
            padding: 8px 16px;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 8px 6px -6px #555;
            }
            button:hover {
            letter-spacing: 2px;
            box-shadow: none;
            }
                    
            .formulario{
                width: 80%;
                margin: 2%;
                height: 85%;
                padding: 0px 10px;
                text-align: center;
                display: flex;
                flex-direction: column;
                flex-flow: column nowrap;
                align-items: center;   
                background-color: rgba(230,230,230,0.9);
                border:3px solid black;
                border-radius: 10px;
            }
            .example-card{
            animation: scroll 500s linear infinite;
            background: url("https://images.unsplash.com/photo-1515405295579-ba7b45403062?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"), #111111;
            height: 120vh;
            min-width: 360px;
            width: 100%;
            display: flex;
            justify-content: center;
            perspective: 1000px;
            perspective-origin: 20% 50%;  
            }

            @keyframes scroll {
            100%{
                background-position:0px -3000px;
            }
            }

            @media (prefers-reduced-motion) {
            .example-card {
                animation: scroll 200s linear infinite;
            }
            }
    </style>   
</head>  
    <body>
    <div class="example-card" >
        <div align="center" class="formulario">
            <br>
        <h1>Modificar Usuario</h1>
        <br>
        <?php
        $sql ="select * from usuario u where u.dpi =". $_GET["dpi"];
        $resultado = mysqli_query($conexion,$sql);
        while($fila = mysqli_fetch_array($resultado)){
            $dpi = $fila["dpi"];
            $nombres = $fila["nombres"];
            $apellidos = $fila["apellidos"];
            $fecha_nac= $fila["fecha_nac"];
            $correo = $fila["correo"];
            $telefono= $fila["telefono"];
            $clave = $fila["clave"];
            $dir = $fila["dir"];
            $alergias = $fila["alergias"];
        }
 	    ?>
        <div class = "example-form">
            <form name="datos" method="post" action="update_usuario.php" accept-charset="UTF-8">
                <div class="field" tabindex="1">
                    <label for="dpi">DPI</label>
                    <input name="dpi" type="text"  value='<?=$dpi ?>' required readonly>
                </div>
                <div class="field" tabindex="2">
                    <label for="nombres">Nombres</label>
                    <input name="nombres" type="text"  value='<?=$nombres?>' required>
                </div>
                <div class="field" tabindex="3">
                    <label for="apellidos">Apellidos</label>
                    <input name="apellidos" type="text"  value='<?=$apellidos ?>'  required>
                </div>
                <div class="field" tabindex="4">
                    <label for="fecha_nac">Fecha de Nacimiento</label>
                    <input name="fecha_nac" type="text"   value='<?=$fecha_nac ?>'  required>
                </div>
                <div class="field" tabindex="5">
                    <label for="correo">Correo Electronico</label>
                    <input name="correo" type="text"  value='<?=$correo ?>' required>
                </div>
                <div class="field" tabindex="6">
                    <label for="telefono"> Numero de Telefono</label>
                    <input name="telefono" type="text"   value='<?=$telefono ?>' required>
                </div>
                <div class="field" tabindex="7">
                    <label for="clave">Clave</label>
                    <?php
                        echo " <input type='text' name='clave'  minlength='10' value='$clave'> ";
                    ?>
                </div>
                <div class="field" tabindex="8">
                    <label for="dir">Direccion</label>
                    <textarea name="dir"  required><?=$dir?></textarea>
                </div>
                <div class="field" tabindex="9">
                    <label for="alergias">Alergias</label>
                    <input name="alergias" type="text"   value='<?=$alergias ?>' required>
                </div>
                <button type="submit">Guardar Cambios</button>
                <a href = "http://localhost/ClinicaDental/interior/barra.php?pa=pacientes"><button type="button">Regresar</button></a>
            </form> 
            </div>
        </div>
        </div>
    </body>
</html>