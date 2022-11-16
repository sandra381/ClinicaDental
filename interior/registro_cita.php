<meta charset="UTF-8">
<html>
	<?php
        include "../inicia_conexion.php";
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
            form div, form label, form input, form textarea, form select{
            width: 100%;
            }

            .field:nth-of-type(2) {
            margin: 16px 0;
            }

            label, input, textarea, select {
            padding: 8px;
            margin: 7px;
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

            input, textarea, select{
            background: rgba(255, 255, 255, 0.5);
            border: ;
            border-radius: 4px;
            box-shadow: 0 8px 6px -6px #555;
            }
            input:focus, textarea:focus , select:focus{
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
            margin: 16px 0 50px 0;
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
                height: 80%;
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
        <h1>Registro de Citas</h1>
        <br>
        <div class = "example-form">
            <form name="datos" method="post" action="cita_insert.php" accept-charset="UTF-8">
                <div class="field" tabindex="1">
                    <label for="idcitas">ID de la Cita</label>
                    <?php 
                        $numeroid = rand(000000,999999);
                        echo " <input type='number' name='idcitas'  minlength='6' value='$numeroid' readonly> ";
                    ?>

                </div>
                <div class="field" tabindex="2">
                    <label for="fecha">Fecha </label>
                    <input name="fecha" type="text" required>
                </div>
                <div class="field" tabindex="3">
                    <label for="hora">Hora</label>
                    <input name="hora" type="text" required>
                </div>
                <div class="field" tabindex="4">
                    <label for="monto">Monto</label>
                    <input name="monto" type="text" required>
                </div>
                <div class="field" tabindex="5">
                    <label for="tratamiento">Tratamiento</label>
                    <input name="tratamiento" type="text" required>
                </div>
                <div class="field" tabindex="6">
                    <label for="cliente">Cliente</label>
                    <input name="cliente" type="text" required>
                </div>
                <div class="field" tabindex="7">
                    <label for="dentista">Dentista</label>
                    <select name="dentista">
                        <option value="" selected></option>
                            <?php
                                $sql ="select dpiden,nombresden from dentistas order by nombresden";
                                $doctores = mysqli_query($conexion,$sql);
                                while($doctor = mysqli_fetch_array($doctores)){
                                    echo '<option value = "' . $doctor["dpiden"] . '">' . $doctor["nombresden"] . '</option>';
                                } 
                            ?>
                    </select>
                </div>
                <button type="submit">Guardar Cita</button>
            </form> 
            </div>
        </div>
        </div>
    </body>
</html>