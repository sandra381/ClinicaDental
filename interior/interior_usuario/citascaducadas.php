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
      .formulario{
        width: 80%;
        margin: 2%;
        height: 80%;
        padding: 0px 0px;
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
      background: url("https://images.unsplash.com/photo-1528804431125-842f17de657b?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80"), #111111;
      height: 120vh;
      min-width: 360px;
      width: 100%;
      display: flex;
      justify-content: center;
      perspective: 1000px;
      perspective-origin: 20% 50%;  
      }
      :root{
        --bg: #001D66;
        --title: #00257F;
        --para-text: rgba(0,0,0,0.67);
        --title-font: 'Josefin Slab', serif;
        --text-font: 'PT Serif', Serif;
        --width: 25em;
        --font: "EB Garamond", serif;
        --font-title: "Playfair Display", serif;
        --font-sans-serif: "Manrope", sans-serif;
        --black: #1c1f33;
        --black--acc: #222;
        --gray: #eee;
        --gray-1: #ededed;
      }
      h1, h2, h3, h4, h5, h6{
        color: var(--title);
        text-transform: capitalize;
        font-family: var(--title-font);
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
      .arreglar{
        background-color: white;
        display: flex;
        flex-direction: row;
      }
      .imagen{
        background-image:url("https://images.unsplash.com/photo-1530995377270-ac41692cd439?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1237&q=80");
        background-position: right 35% bottom 45%;;
        width: 374px;
        height: 484px;
        -webkit-filter: grayscale(1); /* Webkit */
        filter: gray; /* IE6-9 */
        filter: grayscale(1); /* W3C */
      }
      .tabla{
        padding: 40px 30px 40px 30px;
      }
   
    </style>
    </head>
    <body>
        <div align="center" class="example-card" >
        <br>
        <div align="center" class="formulario"><br>
            <font size="5"><h1>Citas Caducadas</h1></font>
            <br><br>
            <div class="arreglar">
              <div class="imagen">
              </div>
              <div class="tabla">
                <table class='unfixed-table'>
                  <thead>
                            <tr>
                                <th>ID CITA</th>
                                <th>Fecha</th>
                                <th>Hora</th>
                                <th>Trataminiento</th>
                                <th>Costo</th>
                                <th>Dentista</th>
                            </tr>
                  </thead>
                        <tbody>
                          <?php
                               $dpiuser = $_SESSION['dpi'];
                               $sql ="SELECT * FROM citas c , dentistas d where c.cliente = $dpiuser and d.dpiden = c.dentista";
                               $resultado = mysqli_query($conexion,$sql);
                               while($fila = mysqli_fetch_array($resultado)){
                                $fecha = $fila["fechacita"];
                                $separaraño = str_split($fecha,4);
                                $fecha_año = $separaraño[0];
                                $fecha_mes = $separaraño[1];
                                $fecha_dia = $separaraño[2];
                                $trim = trim($fecha_mes,"-");
                                $date   = new DateTime(); 
                                $result = $date->format('Y-m-d-H-i-s');
                                $krr    = explode('-', $result);
                                $result = implode("", $krr);
                                
                                $resultano[0] = substr($result, 0, 4);
                                $resultmes[0] = substr($result, 4, 2);
                                $resultdia[0] = substr($result, 6, 2);
                                $resultadoano = $resultano[0];
                                $resultadomes = $resultmes[0];
                                $resultadodia = $resultdia[0];
                                if(($fecha_año <= $resultadoano)&&($trim <= $resultadomes)&&($fecha_dia<=$resultadodia)){
                                  echo "<tr>";
                                  echo "<td>". $fila["idcitas"]."</td>";
                                  echo "<td>". $fila["fechacita"]."</td>";
                                  echo "<td>". $fila["horacita"]."</td>";
                                  echo "<td>". $fila["tratamientocita"]."</td>";
                                  echo "<td>Q". $fila["montocita"].".00</td>";
                                  echo "<td>". $fila["nombresden"]."</td>";
                                  echo "</tr>";
                                }
                               } 
                            ?>
                            </tbody>
                            </table>
                            </div>
                </div>     
            </div>
        </div>
    </body>
</html>