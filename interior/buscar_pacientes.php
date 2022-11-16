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
         @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800,900');
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
            .container {
                display: flex;
                flex-wrap: wrap;
                justify-content: center;
                max-width: 1200px;
                margin-block: 2rem;
                gap: 2rem;
            }

            img{
                max-width: 1000%;
                display: block;
                object-fit: cover;
                width:500px;
            }
            .card_header{
                background-image: url('https://source.unsplash.com/600x500/?dentista');
                background:black;
            }

            .card {
                display: flex;
                flex-direction: column;
                width: clamp(20rem, calc(20rem + 2vw), 22rem);
                overflow: hidden;
                box-shadow: 0 .1rem 1rem rgba(0, 0, 0, 0.1);
                border-radius: 1em;
                background: #ECE9E6;
                background: linear-gradient(to right, #FFFFFF, #ECE9E6);
            }
            .card__body {
                padding: 1rem;
                display: flex;
                flex-direction: column;
                gap: .5rem;
            }
            .tag {
                align-self: flex-start;
                padding: .25em .75em;
                border-radius: 1em;
                font-size: .75rem;
            }
            .tag + .tag {
                margin-left: .5em;
            }
            .tag-blue {
                background: #56CCF2;
                background: linear-gradient(to bottom, #2F80ED, #56CCF2);
                color: #fafafa;
            }
            .tag-brown {
                background: #D1913C;
                background: linear-gradient(to bottom, #FFD194, #D1913C);
                color: #fafafa;
            }
            .tag-red {
                background: #cb2d3e;
                background: linear-gradient(to bottom, #ef473a, #cb2d3e);
                color: #fafafa;
            }
            .card__body h4 {
                font-size: 1.5rem;
                text-transform: capitalize;
            }
            .p{
                font-family: 'Poppins', sans-serif;
                font-weight: 400;
                font-size: 16px;
                line-height: 1.7;
                color: #1f2029;
                height: auto;
                width:100%;
            }
            .section{
            position: relative;
            width: 100%;
            display: block;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: center;
            justify-content: center;
            }
            .full-height{
            min-height: 5vh;
            }
            [type="checkbox"]:checked,
            [type="checkbox"]:not(:checked){
            position: absolute;
            left: -9999px;
            }
            .modal-btn:checked + label,
            .modal-btn:not(:checked) + label{
            position: relative;
            font-family: 'Poppins', sans-serif;
            font-weight: 500;
            font-size: 15px;
            line-height: 2;
            height: 50px;
            transition: all 200ms linear;
            border-radius: 4px;
            width: 240px;
            letter-spacing: 1px;
            display: -webkit-inline-flex;
            display: -ms-inline-flexbox;
            display: inline-flex;
            -webkit-align-items: center;
            -moz-align-items: center;
            -ms-align-items: center;
            align-items: center;
            -webkit-justify-content: center;
            -moz-justify-content: center;
            -ms-justify-content: center;
            justify-content: center;
            -ms-flex-pack: center;
            text-align: center;
                -ms-flex-item-align: center;
                align-self: center;
            border: none;
            cursor: pointer;
            background-color: #102770;
            color: #ffeba7;
            box-shadow: 0 12px 35px 0 rgba(16,39,112,.25);
            }
            .modal-btn:not(:checked) + label:hover{
            background-color: #ffeba7;
            color: #102770;
            }
            .modal-btn:checked + label .uil,
            .modal-btn:not(:checked) + label .uil{
                margin-left: 10px;
                font-size: 18px;
            }
            .modal-btn:checked + label:after,
            .modal-btn:not(:checked) + label:after{
            position: fixed;
            top: 30px;
            right: 30px;
            z-index: 110;
            width: 40px;
            border-radius: 3px;
            height: 30px;
            text-align: center;
            line-height: 30px;
            font-size: 18px;
            background-color: #ffeba7;
            color: #102770;
            font-family: 'Poppins';
            content: 'X'; 
            box-shadow: 0 12px 25px 0 rgba(16,39,112,.25);
            transition: all 200ms linear;
            opacity: 0;
            pointer-events: none;
            transform: translateY(20px);
            }
            .modal-btn:checked + label:hover:after,
            .modal-btn:not(:checked) + label:hover:after{
            background-color: red;
            color: white;
            }
            .modal-btn:checked + label:after{
            transition: opacity 300ms 300ms ease, transform 300ms 300ms ease, background-color 250ms linear, color 250ms linear;
            opacity: 1;
            pointer-events: auto;
            transform: translateY(0);
            }
            .modal{
            position: fixed;
            display: block;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-wrap: wrap;
            flex-wrap: wrap;
            -ms-flex-pack: center;
            justify-content: center;
            margin: 0 auto;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 100;
            overflow-x: hidden;
            background-color: rgba(31,32,41,.75);
            pointer-events: none;
            opacity: 0;
            transition: opacity 250ms 700ms ease;
            }
            .modal-btn:checked ~ .modal{
            pointer-events: auto;
            opacity: 1;
            transition: all 300ms ease-in-out;
            }
            .modal-wrap {
            position: relative;
            display: block;
            width: 100%;
            height:100%;
            max-width: 1300px;
            max-height:900px;
            margin: 0 auto;
            margin-top: 20px;
            margin-bottom: 20px;
            border-radius: 4px;
            overflow: hidden;
            padding-bottom: 20px;
            background-color: #fff;
                -ms-flex-item-align: center;
                align-self: center;
                box-shadow: 0 12px 25px 0 rgba(199,175,189,.25);
            opacity: 0;
            transform: scale(0.6);
            transition: opacity 250ms 250ms ease, transform 300ms 250ms ease;
            }
            .modal-wrap img {
            display: block;
            width: 63%;
            height: auto;
            }
            .modal-wrap p {
            padding: 20px 30px 0 30px;
            }
            .modal-btn:checked ~ .modal .modal-wrap{
            opacity: 1;
            transform: scale(1);
            transition: opacity 250ms 500ms ease, transform 350ms 500ms ease;
            }
            .modal-btn:checked ~ .logo img {
                filter: brightness(100%);
                transition: all 250ms linear;
            }
            @media screen and (max-width: 500px) {
                .modal-wrap {
                    width: calc(100% - 40px);
                    padding-bottom: 15px;
                }
                .modal-wrap p {
                padding: 15px 20px 0 20px;
                }
            }
            .material-symbols-outlined {
            font-variation-settings:
            'FILL' 0,
            'wght' 400,
            'GRAD' 0,
            'opsz' 48
            }
            table {
                width: 100%;
                text-align: left;
                border-collapse: collapse;
                margin: 0 0 1em 0;
                caption-side: top;
                border:none;
                border-color: #404040;
                text-align: center;
                border-spacing: 0 15px;
            }
            caption, td, th {
                padding: 0.3em;
                padding: 8px;
            }
            thead {
                border-top: 2px solid #000;
                border-bottom: 2px solid #000;
                border-right: 0;
                border-left: 0; 
                text-transform: uppercase;
                letter-spacing: 2px;
            }
            tbody{
                border-right: none;
                border-left: none;
                border-bottom:none;
            }
            th.name {
                width: 25%;
            }
            th.location {
                width: 20%;
            }
            th.lasteruption {
                width: 30%;
            }
            th.eruptiontype {
                width: 25%;
            }
            .tabla{
                padding: 40px 30px 40px 30px;
            }
            .imagen{
                width: 100px;
                height: 100px;
            }
    </style>   
</head>  
    <body>
    <div class="example-card" >
        <div align="center" class="formulario">
            <br>
        <h1>Buscar Paciente</h1>
        <br>
        <div class = "example-form">
            
            <form name="datos" method="post" accept-charset="UTF-8">
                <div class="field" tabindex="1">
                    <input id="search" type="text" name="cliente" placeholder="Ingrese el DPI del Paciente..." autofocus required>
                </div>
                <button type="submit"  name ="submit" >Buscar Paciente</button>
                <div class='card'>
                <div class='card__header'>
                <?php
                    $noerrors=true;
                    if(isset($_POST['submit']) && $noerrors){
                        $busqueda = $_POST['cliente'];               
                        $sql ="SELECT *FROM usuario u
                        where  u.dpi =$busqueda";
                        $resultado = mysqli_query($conexion,$sql);
                        while($fila = mysqli_fetch_array($resultado)){
                            echo "<img src='https://source.unsplash.com/600x500/?dentista'></div>";
                            echo "<div class='card__body'>";
                            echo "<span class='tag tag-blue'>Paciente</span>";
                            echo "<h4>". $fila["nombres"]." ". $fila["apellidos"]."</h4>";
                            echo "<p><b>Correo: </b>". $fila["correo"]."<br>";
                            echo "<b>No. de Telefono: </b>". $fila["telefono"]."<br></p>";  	 
                        }
                        echo "<div class='section full-height'>
                        <input class='modal-btn' type='checkbox' id='modal-btn' name='modal-btn' />
                        <label for='modal-btn'>Ver Historial</label>"; 	    
                    
                    ?>
                <div class='modal'>
                <div class='modal-wrap'>
                <div class="tabla">
                <table class='unfixed-table' border=1>
                    <thead>
                            <tr>
                                <th>ID CITA</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Trataminiento</th>
                                <th>Costo</th>
                                <th>Dentista</th>
                                <th>Monto a Pagar</th>
                                <th>Modificar</th>
                            </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql2 = "SELECT * from citas c, dentistas d WHERE c.cliente = $busqueda and c.dentista = d.dpiden"; 
                        $resultado2 = mysqli_query($conexion,$sql2);
                        while($fila2= mysqli_fetch_array($resultado2)){
                            echo "<tr>";
                            echo "<td>". $fila2["idcitas"]."</td>";
                            echo "<td>". $fila2["fechacita"]."</td>";
                            echo "<td>". $fila2["horacita"]."</td>";
                            echo "<td>". $fila2["tratamientocita"]."</td>";
                            echo "<td>Q". $fila2["montocita"].".00</td>";
                            echo "<td>". $fila2["nombresden"]."</td>";
                            echo "<td>Q". $fila2["montopagar"].".00</td>";
                            echo "<td align='center'><a href='modificar/view_cita.php?citas=".$fila2["idcitas"]. "'><div class='imagen'><img src='https://cdn.discordapp.com/attachments/874029098090000474/1042275276794642482/Diseno_sin_titulo-removebg-preview.png'></div></a></td>";
                            echo "</tr>";
                        }
                    }
                    ?>
                    </tbody>
                   </table></div>
                   </div></div>
                   </div></div></div> 
            </form> 
            </div>
        </div>
        </div>
    </body>
</html>