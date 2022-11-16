<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta charset="UTF-8">
        <title>
        KOOL SMILES
        </title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Nunito:wght@500&display=swap');
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Nunito', sans-serif;
            } 
            img{
            height: 100px;
            width: 100px;
            }
            nav{
            display: flex;
            height: 110px;
            width: 100%;
            background: #e6e6e6;
            align-items: center;
            justify-content: space-between;
            padding: 0 50px 0 100px;
            flex-wrap: wrap;
            }
            nav .logo{
            margin-left: 20px;
            height: 100px;
            width: 100px;
            display: flex;
            flex-direction: row;
            justify-content:center;
            align-items: center;
            color: #083a7d ;
            }
            nav ul{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            }
            nav ul li{
            margin: 0 5px;
            }
            a{
                font-family: 'Nunito', sans-serif;
            }
            nav ul li a {
            color: black;
            padding: 8px 15px;
            border-radius: 5px;
            letter-spacing: 1px;
            text-decoration: none;
            font-size: 17px;
            font-weight: 500;
            transition: all 0.3s ease;
            }
            nav ul li a.active,
            nav ul li a:hover{
            color: white;
            background: #083a7d;
            }
    </style>    
    </head>
    <body>
        <header>
        <nav>
            <div class="logo">
                <img src="../logo.png">
                <h1>&nbsp;KOOL</h1>
                <h1>&nbsp;SMILES</h1>
            </div>  
            <ul class="active">
                <li class="<?php echo $paginas2 == 'pacientes' ? 'active':'';?>"><a href="?pa=pacientes">Pacientes</a></li>
                <li class="<?php echo $paginas2 == 'buscar_pacientes' ? 'active':'';?>"><a href="?pa=buscar_pacientes">Buscar Paciente</a></li>
                <li class="<?php echo $paginas2 == 'registro_usuario' ? 'active':'';?>"><a href="?pa=registro_usuario">Registrar Paciente</a></li>
                <li class="<?php echo $paginas2 == 'registro_cita' ? 'active':'';?>"><a href="?pa=registro_cita">Registrar Cita</a></li>
                <li class="<?php echo $paginas2 == 'registro_pagos' ? 'active':'';?>"><a href="?pa=registro_pagos">Registrar Pagos</a></li>
                <li class="<?php echo $paginas2 == 'buscar_pacientes' ? 'active':'';?>"><a href="?pa=buscar_citas">Buscar Pagos por Cita</a></li>
                <li ><a href="../map.php">Cerrar Sesion </a></li>
            </ul>      
        </nav>    
        </header>
    </body>
</html>