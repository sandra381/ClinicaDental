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
        .group:after {
  content: "";
  display: table;
  clear: both;
}
img {
  max-width: 100%;
  height: auto;
  vertical-align: baseline;
}
.a {
  text-decoration: none;
}
.calendar-wrapper {
  width: 428px;
  margin: 0em;
  padding: 1em;
  border: 1px solid #ffffffb0;
  border-radius: 5px;
  background: #083a7f;
}
table {
  clear: both;
  width: 100%;
  border: 1px solid #dcdcff;
  border-radius: 3px;
  border-collapse: collapse;
  color: white;
}
td {
  height: 48px;
  text-align: center;
  vertical-align: middle;
  border-right: 1px solid #dcdcff;
  border-top: 1px solid #dcdcff;
  width: 14.28571429%;
}
td.not-current {
  color: #c0c0c0;
}
td.today {
  font-weight: 700;
  color: rgb(0, 255, 179);
  font-size: 1.5em;
}
thead td {
  border: none;
  color: white;
  text-transform: uppercase;
  font-size: 1.5em;
}
#btnPrev {
  float: left;
  margin-bottom: 20px;
}
#btnPrev:before {
  content: '◄';
  font-family: FontAwesome;
  padding-right: 4px;
}
#btnNext {
  float: right;
  margin-bottom: 20px;
}
#btnNext:after {
  content: '►';
  font-family: FontAwesome;
  padding-left: 4px;
}
#btnPrev,
#btnNext {
  background: transparent;
  border: none;
  outline: none;
  font-size: 1em;
  color: #c0c0c0;
  cursor: pointer;
  font-family: "Roboto Condensed", sans-serif;
  text-transform: uppercase;
  -webkit-transition: all 0.3s ease;
  transition: all 0.3s ease;
}
#btnPrev:hover,
#btnNext:hover {
  color: #28283b;
  font-weight: bold;
}
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
.masonry {
	column-count: 2;
	column-gap: 34px;
}

.masonry .mItem {
  display: inline-block;
  margin-bottom: 16px;
  width: 72%;
}

@media (max-width: 1199px) {
  .masonry {
    column-count: 3;
  }
}

@media (max-width: 9991px) {
  .masonry {
    column-count: 2;
  }
}

@media (max-width: 767px) {
  .masonry {
    column-count: 1;
  }
}
@import url('https://fonts.googleapis.com/css?family=PT+Serif:400,400i,700,700i');
@import url('https://fonts.googleapis.com/css?family=Josefin+Slab:100,100i,300,300i,400,400i,600,600i,700,700i');


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

section,
aside,
article,
div,
img{
  box-sizing: border-box;
}
section img{
  width: 61%;
}
section{
  width: 41em;
  background: #fff;
  padding: 10px;
  height: 25em;
}
section h3{
  font-size: calc(var(--width)/10);
}
section p{
  font-family: var(--text-font);
  color: var(--para-text);
  font-size: calc(var(--width)/19);
}
.date{
  font-size: calc(var(--width)/25);
}

section a{
  text-decoration: none;
  color: var(--bg);
  font-family: var(--title-font);
  font-weight: 700;
  font-size: calc(var(--width)/23);
}
* {
  box-sizing: border-box;
}
a {
  text-decoration: none;
  display: block;
  color: #1c1f33;
}
a:hover, a:focus, a:active, a:visited {
  color: #222;
}

.main__wrapper {
  max-width: 1135px;
  margin: auto;
}
p {
  line-height: 3.3;
}
p a {
  display: inline;
}

em {
  font-style: italic;
}

.title--large {
  font-family: var(--font-title);
  font-size: 32px;
  font-style: italic;
  text-align: left;
  margin-bottom: 0.8rem;
}
@media (min-width: 700px) {
  .title--large {
    font-size: 42px;
    margin: 0;
  }
}

@media (min-width: 700px) {
  main {
    display: grid;
    grid-template-columns: repeat(5, 1fr) 23%;
    grid-template-rows: repeat(5, auto);
    grid-gap: 0.9rem;
  }
}
main h1,
main aside {
  grid-column: 1/-1;
}
@media (min-width: 700px) {
  main .main-title {
    grid-column: 1/-1;
  }
}
@media (min-width: 1024px) {
  main .main-title {
    grid-column: 1/-2;
  }
}
@media (min-width: 1024px) {
  main .terrarium {
    grid-column: -3/span 2;
  }
}
@media (min-width: 700px) {
  main .main-text {
    grid-column: span 4;
  }
}
@media (min-width: 700px) {
  main .sidebar {
    grid-column: 1/-1;
  }
}
@media (min-width: 1024px) {
  main .sidebar {
    grid-row: 3/9;
    grid-column: 5/6;
  }
}
main .social {
  grid-column: 1/-2;
  grid-row: 8/9;
}
main .article-bar-1 {
  grid-row: span 4;
}
@media (min-width: 700px) {
  main .hogwarts {
    grid-row: span 3;
  }
}
@media (min-width: 1024px) {
  main .hogwarts {
    grid-column: 3;
    grid-row: span 2;
  }
}
@media (min-width: 700px) {
  main .menu {
    grid-column: 1/-1;
    grid-row: 13;
  }
}
@media (min-width: 1024px) {
  main .menu {
    grid-row: 7/8;
    grid-column: 2/4;
  }
}
@media (min-width: 700px) and (max-width: 1024px) {
  main .toggles {
    grid-column: 3/6;
    grid-row: 10/13;
  }
}
@media (min-width: 700px) and (max-width: 1024px) {
  main .plan {
    grid-column: span 4;
  }
}
@media (min-width: 700px) and (max-width: 1024px) {
  main .style,
main .magazine,
main .pasta {
    grid-column: 1/3;
  }
}
main .cssgrid-collection {
  grid-column: 1/-1;
  grid-row: 9;
}

.span--2 {
  grid-column: span 2;
}

.long--2 {
  grid-row: span 2;
}

.long--4 {
  grid-row: span 4;
}

.with-border {
  border-top: 1px solid;
  padding-top: 0.6rem;
}
figcaption {
  font-style: italic;
  font-size: 90%;
}

aside {
  text-align: center;
  padding: 3px 0;
  border: solid var(--black);
  border-width: 2px 0;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin: 1.5rem 0;
}
@media (min-width: 700px) {
  aside {
    margin: 0;
  }
}
aside > div {
  display: flex;
  align-items: center;
  border: solid var(--black);
  border-width: 1px 0;
}
aside > div > div {
  flex: 1;
  padding: 8px;
}

@media (min-width: 700px) {
  .multi-column {
    column-count: 2;
    column-gap: 1.3rem;
    margin-top: 0.75rem;
  }
  .multi-column-3 {
    column-count: 3;
  }
}
.sidebar {
  margin-top: 3rem;
}
@media (min-width: 700px) and (max-width: 1024px) {
  .sidebar {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    align-items: flex-start;
    margin: 0;
  }
  .sidebar h3 {
    width: 100%;
    text-align: center;
  }
  .sidebar > a {
    flex: 0 1 48%;
    margin: 1.5rem 0;
    padding: 0;
  }
  .sidebar .slack-ui {
    border-top: 0;
  }
  .sidebar .pie {
    order: 3;
  }
}
@media (min-width: 1024px) {
  .sidebar {
    display: block;
    border-left: 1px solid;
    padding-left: 1.2rem;
    margin: 0;
  }
}

.main-text.multi-column {
  margin: 0;
}
.main-text.multi-column p {
  margin-bottom: 0.8rem;
}

.hogwarts {
  text-align: center;
  height: 100%;
  border: 2px solid transparent;
  outline: 3px solid var(--black);
  box-shadow: inset 0 0 0 1px var(--black);
  width: calc(100% - 4px);
  margin: 1.5rem auto;
  overflow: hidden;
}
@media (min-width: 700px) {
  .hogwarts {
    margin: 0;
  }
}
.hogwarts__title {
  font: 800 24px/1 var(--font-sans-serif);
  text-transform: uppercase;
  background: var(--black);
  color: var(--gray);
  padding: 0.8rem 0.8rem 0.9rem;
  transition: 0.2s ease;
}
@media (min-width: 700px) and (max-width: 1024px) {
  .hogwarts__title {
    font: 800 21px/1.2 var(--font-sans-serif);
    padding: 1.5rem 0.5rem;
  }
}
.hogwarts__image {
  height: 100%;
  position: relative;
}
.hogwarts__image img {
  transform: rotate(60deg);
  height: 150%;
  position: absolute;
  border: 0;
  width: 250%;
  left: -70%;
  bottom: -35%;
}
@media (min-width: 700px) and (max-width: 1024px) {
  .hogwarts__image img {
    bottom: -20%;
  }
}
.hogwarts__image span {
  font-style: italic;
  max-width: 110px;
  position: absolute;
  top: 7%;
  left: 18%;
  font-size: 22px;
  line-height: 0.9;
  transform: rotate(-5deg);
}

.terrarium {
  margin: 1.5rem 0;
}
@media (min-width: 700px) {
  .terrarium {
    margin: -3px -68px -24.5rem;
  }
}
.terrarium img {
  height: 43%;
  object-fit: cover;
  object-position: left;
}

.pie {
  line-height: 0;
  color: var(--gray);
  text-align: left;
}
.pie__image {
  margin: 0;
  border: 0;
  max-height: 15rem;
  object-fit: cover;
}
.pie__subtitle {
  background: #999;
  text-transform: uppercase;
  line-height: 1;
  padding: 0.4rem 1rem;
  font: 14px var(--font-sans-serif);
  color: var(--gray);
}
.pie__content {
  background: #666;
  padding: 1rem 1rem 1.2rem;
  color: var(--gray);
}
.pie__content p {
  margin-top: 0.5rem;
}

.sidebar-item {
  margin: 2rem 0;
  padding: 2rem 0 0;
}
.sidebar-item h5 {
  text-align: center;
  width: 100%;
  padding: 0.5rem;
  margin: auto;
}
.sidebar-item p {
  margin-top: 1rem;
}
.sidebar-item:hover h5 {
  transition: 0.3s ease;
  background: var(--black);
  color: #fff;
}

.item-with-image {
  margin-top: 1.5rem;
}
.item-with-image h4 {
  font-size: 24px;
  text-align: left;
  margin-bottom: 0.5rem;
  transition: 0.2s ease;
}
@media (min-width: 700px) {
  .item-with-image {
    margin: 0;
  }
}
.item-with-image:not(.cssgrid-collection):hover h4 {
  color: white !important;
  background: var(--black);
}
.magazine {
  border: 1px solid;
  border-width: 1px 0;
  padding-bottom: 1rem;
}

.menu {
  margin: 1.5rem 0;
}
@media (min-width: 1024px) {
  .menu {
    margin: 0;
  }
}
.menu figure {
  height: 100%;
}
.menu img {
  height: 90%;
  object-fit: cover;
  object-position: left;
}

.cssgrid-collection {
  display: flex;
  align-content: stretch;
  border-top: 1px solid;
  padding-top: 1rem;
}
.cssgrid-collection h4 {
  margin: 0 0 0.8rem;
}
.cssgrid-collection__image {
  flex: 0 0 32%;
  margin-right: 1.5rem;
}
.cssgrid-collection img {
  height: 100%;
  object-fit: cover;
  object-position: left;
}
.cssgrid-collection p a {
  border-bottom: 1px dashed;
}
.cssgrid-collection p a:hover {
  border-bottom: 1px solid;
}

@media (min-width: 1024px) {
  .captcha {
    margin-top: 0;
  }
}

.workout {
  border: 2px solid transparent;
  outline: 3px solid var(--black);
  box-shadow: inset 0 0 0 1px var(--black);
  width: calc(100% - 4px);
  margin: 3rem auto 0.2rem;
}
.workout__image {
  padding: 2px;
}
.workout__image img {
  height: 16rem;
  object-fit: cover;
  object-position: left;
  border: none;
}
@media (min-width: 1024px) {
  .workout__image img {
    height: 25rem;
  }
}
.workout__blurb {
  font: 22px/1.1 var(--font-sans-serif);
  text-align: center;
  padding: 0.5rem;
  color: var(--black);
  margin: -1rem 0.5rem 0.3rem;
}
.workout__title {
  font: 18px/1.1 var(--font-sans-serif);
  text-transform: uppercase;
  text-align: center;
  padding: 1rem;
  background: var(--black);
  color: var(--gray);
  transition: 0.2s ease;
}

.social {
  display: grid;
  grid-template-columns: 1fr 3fr;
  grid-template-rows: max-content auto;
  color: var(--gray);
  text-align: left;
}
.social__image {
  margin: 0;
  border: 0;
  grid-row: span 2;
  height: 100%;
  object-fit: cover;
}
.social__subtitle {
  background: #999;
  text-transform: uppercase;
  line-height: 1;
  padding: 0.4rem 1rem;
  color: var(--gray);
  font: 14px var(--font-sans-serif);
}
.social__content {
  background: #666;
  padding: 1rem;
  color: var(--gray);
  grid-column: 2;
}

.plan {
  padding-bottom: 1rem;
}
@media (min-width: 700px) and (max-width: 1024px) {
  .plan {
    grid-column: span 3;
    margin: 0 0 1.5rem;
  }
}
@media (min-width: 1024px) {
  .plan {
    border-bottom: 1px solid;
  }
}

.pie:hover img,
.social:hover img,
.menu:hover img,
.terrarium:hover img,
.plan:hover img,
.toggles:hover img,
.workout:hover img,
.cssgrid-collection__image:hover img {
  filter: grayscale(0);
}

.workout:hover .workout__title {
  background: transparent;
  color: var(--black);
}

.hogwarts:hover .hogwarts__title {
  background: transparent;
  color: var(--black);
}
.smile{
   -webkit-filter: grayscale(1); 
    filter: gray;
    filter: grayscale(1); 
}
    </style>
    </head>
    <body>
        <div align="center" class="example-card" >
        <br>
        <div align="center" class="formulario">
            <div class="arreglar">
                <br>
            <font size="5"><h1>Cita Calendarizada</h1></font>
                <?php 
                     $dpiuser = $_SESSION['dpi'];
                     $sql ="SELECT u.nombres,u.apellidos FROM usuario u where u.dpi = $dpiuser ";
                     $resultado = mysqli_query($conexion,$sql);
                     while($fila = mysqli_fetch_array($resultado)){
                        echo "Bienvenido(a) ".$fila["nombres"]." ".$fila["apellidos"]."";
                     }
                ?>
                <br><br>
                <div class="masonry">
                <div class="mItem"></div>
                    <div class="mItem">
                        <section>
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
                                if(($fecha_año >= $resultadoano)&&($trim >= $resultadomes)&&($fecha_dia>=$resultadodia)){
                                    echo "<div class='main__wrapper'>";
                                    echo "<main>";
                                    echo "<aside>";
                                    echo "<div>";
                                    echo "<div class='issue'>Cita#".$fila["idcitas"]." </div>";
                                    echo "<div class='date'>Dia Programado: ".$fila["fechacita"]."</div>";
                                    echo "<div class='edition'> a las ".$fila["horacita"]."</div>";
                                    echo "</div>";
                                    echo "</aside>";
                                    echo "<div class='main-text' multi-column>";
                                    echo "<p><b>Tratamiento:</b> ".$fila["tratamientocita"]."<br>
                                    <b>Costo del Tratamiento:</b> Q".$fila["montocita"].".00<br>
                                    <b>Monto a Pagar:</b> Q".$fila["montopagar"].".00<br>
                                    <b>Dentista:</b> ".$fila["nombresden"]."<br>
                                    </p></div><a class='terrarium' target='_blank'>
                                    <figure class='smile'><img src='https://images.unsplash.com/photo-1601011850287-43e30b7db748?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=764&q=80'/>
                                    </figure></a>";
                                    echo "</div>";
                                    echo "</main>";
                                    echo "</div>"; 
                                }
                               } 
                            ?>
                        </section>
                        <div class="mItem">
                    <div class="calendar-wrapper">
                        <button id="btnPrev" type="button">Prev</button>
                        <button id="btnNext" type="button">Next</button>
                        <div id="divCal"></div>
                    </div>
                    <script src="js/index.js"></script>
                    </div>
                    </div>
                </div>     
            </div>
        </div>
    </body>
</html>