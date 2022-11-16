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
        background-image:url("https://images.unsplash.com/photo-1605615923013-f26c14fe7155?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=700&q=80");
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
            <font size="5"><h1>Historial de Consumos</h1></font>
            <br><br>
            <div class="arreglar">
              <div class="tabla">
                <table class='unfixed-table'>
                  <thead>
                            <tr>
                                <th>ID CITA</th>
                                <th>Fecha</th>
                                <th>Tratamiento Hecho</th>
                                <th>Monto Pagado</th>
                                <th>Tipo de Pago</th>
                            </tr>
                  </thead>
                        <tbody>
                          <?php
                               $dpiuser = $_SESSION['dpi'];
                               $sql ="SELECT * FROM citas c,pagos p,tipo_pago t where c.cliente = $dpiuser and c.idcitas = p.citapagos and p.tipopago=t.idtipo";
                               $resultado = mysqli_query($conexion,$sql);
                               while($fila = mysqli_fetch_array($resultado)){
                                  echo "<tr>";
                                  echo "<td>". $fila["citapagos"]."</td>";
                                  echo "<td>". $fila["fechapa"]."</td>";
                                  echo "<td>". $fila["tratamientocita"]."</td>";
                                  echo "<td>Q". $fila["montopa"].".00</td>";
                                  echo "<td>". $fila["nombretipo"]."</td>";
                                  echo "</tr>";
                               } 
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="imagen"></div>
                </div>     
            </div>
        </div>
    </body>
</html>