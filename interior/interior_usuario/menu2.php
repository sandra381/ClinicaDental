<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta charset="UTF-8">
        <title>
        KOOL SMILES
        </title>
        <style type="text/css">
            @import url('https://fonts.googleapis.com/css2?family=Bungee&family=Pontano+Sans&display=swap');
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
            ul{
            display: flex;
            flex-wrap: wrap;
            list-style: none;
            }
            .menu-bar {
            border-radius: 67px;
            height: 100px;
            height: -moz-fit-content;
            height: fit-content;
            display: inline-flex;
            background-color: rgba(230, 230, 230, 10.4);
            -webkit-backdrop-filter: blur(10px);
            backdrop-filter: blur(10px);
            align-items: center;
            padding: 0px 396px;
            margin: 10px 0 0 0;
            }
            .menu-bar li a{
            list-style: none;
            color: #083a7b;
            font-family: sans-serif;
            font-weight: bold;
            padding: 12px 16px;
            margin: 0 8px;
            position: relative;
            cursor: pointer;
            white-space: nowrap;
            text-decoration: none;
            }
            .menu-bar li a::before {
            content: " ";
            position: absolute;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            z-index: -1;
            transition: 0.2s;
            border-radius: 25px;
            text-decoration: none;
            }
            .menu-bar li a:hover {
            color: white;
            }
            .menu-bar li a:hover::before {
            background: linear-gradient(to bottom, #083a7b, #083a7b);
            box-shadow: 0px 3px 20px 0px black;
            transform: scale(1.2);
            }
            header{
                height: 120px;
                display: flex;
                justify-content: center;
                background-color: #083a7b;
            }
        </style>    
    </head>
    <body>
        <header>
            <ul class="menu-bar">
            <img src="../../logo.png">
                <li class="<?php echo $paginas2 == 'proximacita' ? 'active':'';?>"><a  href="?pa=proximacita">Proximas Citas</a></li>
                <li class="<?php echo $paginas2 == 'citascaducadas' ? 'active':'';?>"><a href="?pa=citascaducadas">Citas Caducadas</a></li>
                <li class="<?php echo $paginas2 == 'pagosrealizados' ? 'active':'';?>"><a href="?pa=pagosrealizados">Consumos</a></li>
                <li ><a href="../../map.php">Cerrar Sesion </a></li>
            </ul>         
        </header>
    </body>
</html>