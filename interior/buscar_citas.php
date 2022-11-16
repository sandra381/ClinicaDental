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
            width: 949px;
            display: flex;
            flex-flow: column wrap;
            align-items: center;
            justify-content: center;
            
            }
            form div, form label {
            width: 100%;
            }
            input{
                width: 400px;
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
            .imagen{
                background-image:url("https://images.unsplash.com/photo-1588776814610-a14d0dfc6f9e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80");
                background-position: right 50% bottom 45%;;
                width: 374px;
                height: 484px;
                -webkit-filter: grayscale(1); /* Webkit */
                filter: gray; /* IE6-9 */
                filter: grayscale(1); /* W3C */
            }
            .arreglar{
                background-color: white;
                display: flex;
                flex-direction: row;
            }
            
    </style>   
</head>  
    <body>
    <div class="example-card" >
        <div align="center" class="formulario">
            <br>
        <h1>Buscar Pagos por Cita</h1>
        <br>
        <div class = "example-form">
            <form name="datos" method="post" accept-charset="UTF-8">
                <div class="field" tabindex="1">
                    <input id="search" type="text" name="cita" placeholder="Ingrese el ID de la Cita..." autofocus required>
                </div>
                <button type="submit"  name ="submit" >Buscar Cita</button>
                <div class="arreglar">
                <div class="imagen"></div>
                    <div class="tabla">
                        <table class='unfixed-table'>
                        <thead>
                                    <tr>
                                        <th>ID CITA</th>
                                        <th>Fecha</th>
                                        <th>Monto Pagado</th>
                                        <th>Tipo de Pago</th>
                                    </tr>
                        </thead>
                        <tbody>
                        <?php
                            $noerrors=true;
                            if(isset($_POST['submit']) && $noerrors){
                                $busqueda = $_POST['cita'];
                                $sql ="Select * from pagos p , tipo_pago t where p.citapagos =$busqueda and p.tipopago = t.idtipo";
                                $resultado = mysqli_query($conexion,$sql);
                                while($fila = mysqli_fetch_array($resultado)){
                                    echo "<tr>";
                                    echo "<td>". $fila["citapagos"]."</td>";
                                    echo "<td>". $fila["fechapa"]."</td>";
                                    echo "<td>Q". $fila["montopa"].".00</td>";
                                    echo "<td>". $fila["nombretipo"]."</td>";
                                    echo "</tr>";
                                }                    
                            }    
                            ?>
                                </tbody>
                                </table>
                            </div>
                        </div>
                        </div>
                    </form> 
                </div>
            </div>
        </div>
    </body>
</html>