
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
         @import url('https://fonts.googleapis.com/css2?family=Patrick+Hand&display=swap');
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
        details div {
            border-left: 2px solid #000;
            border-right: 2px solid #000;
            border-bottom: 2px solid #000;
            padding: 1.5em;
            display:flex;
            flex-direction:column;
            flex-wrap:wrap;
        }

        details div > * + * {
            margin-top: 1.5em;
        }

        details + details {
            margin-top: .5rem;
        }

        summary {
            list-style: none;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        summary {
            border: 2px solid #000;
            padding: .75em 4em;
            cursor: pointer;
            position: relative;
            padding-left: calc(1.75rem + .75rem + .75rem);
        }

        summary:before {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: .75rem;
            content: "↓";
            width: 1.75rem;
            height: 1.75rem;
            background-color: #000;
            color: #FFF;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }
        a:before{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: .75rem;
            content: "✎";
            width: 1.75rem;
            height: 1.75rem;
            background-color: #000;
            color: #FFF;
            display: inline-flex;
            justify-content: center;
            align-items: center;
            flex-shrink: 0;
        }
        details[open] summary {
            background-color: #eee;
        }

        details[open] summary:before {
            content: "↑";
        }

        summary:hover {
            background-color: #eee;
        }
        .texto{
            text-align:left;
            font-family: 'Nunito', sans-serif;
            font-size:19px;
        }
       
                    
    </style>   
</head>  
    <body>
    <div class="example-card" >
        <div align="center" class="formulario">
            <br>
        <h1>Pacientes</h1>
        <br>
        <div class = "example-form">
                <?php            
                        $sql ="SELECT * FROM usuario u where not exists(select 1 from usuario where u.dpi = '1234567891234')";
                        $resultado = mysqli_query($conexion,$sql);
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "<div class='listado'>";
                            echo "<details open>";
                            echo "<summary>DPI del Paciente: ".$fila["dpi"]."<a href='modificar/view_paciente.php?dpi=".$fila["dpi"]. "'></a></summary>";
                            echo "<div class='texto'>";
                            echo "Nombre del Paciente: ".$fila["nombres"]." ".$fila["apellidos"]."<br>";
                            echo "Fecha de Nacimineto: ".$fila["fecha_nac"]."<br>";
                            echo "Correo Electronico: ".$fila["correo"]."<br>";
                            echo "Numero Telefono: ".$fila["telefono"]."<br>";
                            echo "Clave: ".$fila["clave"]."<br>";
                            echo "Direccion: ".$fila["dir"]."<br>";
                            echo "Alergias: ".$fila["alergias"]."<br>";
                            echo "</div></details></div>";    
                        }   
                    ?> 
            </div>
        </div>
        </div>
    </body>
</html>