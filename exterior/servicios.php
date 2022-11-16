<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <meta charset="UTF-8">
        <title>
            KOOL SMILES
        </title>
        <style type="text/css">
@-webkit-keyframes slidein {
  0% {
    top: -400px;
    opacity: 0;
  }
  100% {
    opacity: 1;
    top: 0px;
  }
}
@keyframes slidein {
  0% {
    top: -400px;
    opacity: 0;
  }
  100% {
    opacity: 1;
    top: 0px;
  }
}
@-webkit-keyframes slideout {
  0% {
    top: 0;
    opacity: 1;
  }
  100% {
    top: -400px;
    opacity: 0;
  }
}
@keyframes slideout {
  0% {
    top: 0;
    opacity: 1;
  }
  100% {
    top: -400px;
    opacity: 0;
  }
}
body {
  background: #eee;
  font-family: "Tahoma";
  -moz-user-select: none;
  -webkit-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
body #scene {
  display: flex;
  align-items: center;
  justify-content: left;
  width: 80vw;
  height: 80vh;
  position: absolute;
  top: 0;
  bottom: 10vh;
  left: 0;
  right: 0;
  margin: auto;
  background-color: #fff;
  box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
  overflow: hidden;
}
body #scene #left-zone {
  background: #fff;
  height: 75%;
  flex-grow: 0;
  display: flex;
  width: 350px;
  align-items: center;
  justify-content: left;
}
body #scene #left-zone .list {
  display: flex;
  list-style: none;
  align-content: stretch;
  flex-direction: column;
  flex-grow: 1;
  margin: 0;
  padding: 0;
}
body #scene #left-zone .list li.item input[type=radio] {
  display: none;
}
body #scene #left-zone .list li.item input[type=radio] ~ label {
  display: block;
  opacity: 0.5;
  height: 50px;
  text-align: center;
  line-height: 50px;
}
body #scene #left-zone .list li.item input[type=radio] ~ label:first-letter {
  text-transform: uppercase;
}
body #scene #left-zone .list li.item input[type=radio] ~ label:hover {
  opacity: 0.75;
  cursor: pointer;
}
body #scene #left-zone .list li.item input[type=radio] ~ label.label_strawberry:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://cdn.discordapp.com/attachments/874029098090000474/1041787271222923345/Diseno_sin_titulo_5.png");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ label.label_banana:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://cdn.discordapp.com/attachments/874029098090000474/1041788133341155358/Diseno_sin_titulo_1.png");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ label.label_apple:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://cdn.discordapp.com/attachments/874029098090000474/1041787723792519260/Diseno_sin_titulo.png");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ label.label_orange:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://cdn.discordapp.com/attachments/874029098090000474/1041786183132381184/Diseno_sin_titulo_3.png");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ label.label_maria:before {
  content: " ";
  display: block;
  position: absolute;
  width: 50px;
  height: 50px;
  margin-left: 15px;
  background-image: url("https://cdn.discordapp.com/attachments/874029098090000474/1041786798705217626/Diseno_sin_titulo_4.png");
  background-position: center;
  background-size: 75% 75%;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content {
  position: absolute;
  left: 350px;
  top: -600px;
  width: 1050px;
  height: 700px;
  -webkit-animation-duration: 0.75s;
          animation-duration: 0.75s;
  -webkit-animation-name: slideout;
          animation-name: slideout;
  -webkit-animation-timing-function: ease-out;
          animation-timing-function: ease-out;
  display: flex;
  align-items: center;
  justify-content: center;
  flex-direction: column;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_strawberry .picto {
  height: 200px;
  width: 200px;
  background-image: url("https://images.squarespace-cdn.com/content/v1/5c9ff0f5e5f7d17da4f0a5dc/1555433672058-I32J7EGJ0QA1B54XTXR7/implantes_dentales.jpg?format=750w");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_strawberry h1 {
  color: #083A7D;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_banana .picto {
  height: 200px;
  width: 200px;
  background-image: url("https://images.squarespace-cdn.com/content/v1/5c9ff0f5e5f7d17da4f0a5dc/1555435108192-145YW1JQAM891K43JC8W/tratamiento_de_canales.jpeg?format=750w");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_banana h1 {
  color: #083A7D;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_apple .picto {
  height: 200px;
  width: 200px;
  background-image: url("https://images.squarespace-cdn.com/content/v1/5c9ff0f5e5f7d17da4f0a5dc/1555470746988-KFLVFSXK64T9CJSEDK3R/puentes_protesis_fija.jpeg?format=750w");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_apple h1 {
  color: #083A7D;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_orange .picto {
  height: 200px;
  width: 200px;
  background-image: url("https://images.squarespace-cdn.com/content/v1/5c9ff0f5e5f7d17da4f0a5dc/1555471549681-IGVU0PNV5DJN02L1TO5L/cirugia_cordales.jpg?format=750w");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_orange h1 {
  color: #083A7D;
}

body #scene #left-zone .list li.item input[type=radio] ~ .content.content_maria .picto {
  height: 200px;
  width: 200px;
  background-image: url("https://images.squarespace-cdn.com/content/v1/5c9ff0f5e5f7d17da4f0a5dc/1555471730150-MQOO07EN7OZ8FX0LYL8F/coronas_de_porcelana.jpeg?format=750w");
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_maria h1 {
  color: #083A7D;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content h1:first-letter {
  text-transform: uppercase;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content p {
  max-width: 50%;
  text-align: center;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label {
  opacity: 1;
  -webkit-animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
          animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_strawberry {
  color: #083A7D;
  border-right: solid 4px #083A7D;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_banana {
  color: #083A7D;
  border-right: solid 4px #083A7D;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_apple {
  color: #083A7D;
  border-right: solid 4px #083A7D;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_orange {
  color: #083A7D;
  border-right: solid 4px #083A7D;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_maria {
  color: #083A7D;
  border-right: solid 4px #083A7D;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ .content {
  -webkit-animation-duration: 0.75s;
          animation-duration: 0.75s;
  -webkit-animation-name: slidein;
          animation-name: slidein;
  -webkit-animation-fill-mode: forwards;
          animation-fill-mode: forwards;
  -webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
          animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
body #scene #middle-border {
  background-color: #eee;
  height: 75%;
  flex-grow: 1;
  max-width: 2px;
  z-index: 0;
}
body #scene #right-zone {
  background: #fff;
  height: 100%;
  flex-grow: 3;
}
.example-card{
  animation: scroll 500s linear infinite;
  background: url("https://images.unsplash.com/photo-1515405295579-ba7b45403062?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80%22"), #111111;
  height: 100vh;
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
    <div class="example-card">
      <div id="scene">
      <div id="left-zone">
        <ul class="list">
          <li class="item">
            <input type="radio" id="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" name="basic_carousel" value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" checked="checked"/>
            <label class="label_strawberry" for="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">Implantes Dentales</label>
            <div class="content content_strawberry"><span class="picto"></span>
              <h1>Implantes Dentales</h1>
              <p>Reponemos tus dientes perdidos sin dañar los dientes remanentes (sanos). Tornillos de titanio (implantes) colocados en sus maxilares para reponer las raíces de sus dientes perdidos.</p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." name="basic_carousel" value="A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa."/>
            <label class="label_banana" for="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.">Tratamiento de Canales</label>
            <div class="content content_banana"><span class="picto"></span>
              <h1>Tratamiento de Canales</h1>
              <p>Quítate ese dolor insoportable, salva tus piezas en mal estado, elimina esos abscesos molestos. En tan solo una cita con tu tratamiento te olvidaras del dolor.</p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." name="basic_carousel" value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus."/>
            <label class="label_apple" for="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">Puentes (protesis fija)</label>
            <div class="content content_apple"><span class="picto"></span>
              <h1>Puentes (protesis fija)</h1>
              <p>Repone tus dientes perdidos de una forma fija con la estabilidad, dureza y estética necesarias para que tu reposición dental sea la ideal.</p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
            <label class="label_orange" for="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Cirugía de cordales</label>
            <div class="content content_orange"><span class="picto"></span>
              <h1>Cirugía de cordales</h1>
              <p>Removemos sus cordales que estan parcialmente erupcionadas, totalmente erupcionadas o sin erupcionar.  Siempre es recomendable la remoción de estas molares  debido alas grandes complicaciones que el mantenerlas puede provocar. No espere a tener sus dientes torcidos o con dolor, realizamos cualquier tipo de cirugía odontológica y de cirugía de cordales para su comodidad.</p>
            </div>
          </li>
          <li class="item">
            <input type="radio" id="maria tenia un espacio" name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
            <label class="label_maria" for="maria tenia un espacio">Coronas de Porcelana</label>
            <div class="content content_maria"><span class="picto"></span>
              <h1>Coronas de Porcelana</h1>
              <p>Obtén resultados estéticos en los dientes anteriores muy dañados por caries o por golpes y salva esas piezas destruidas en tan solo 2 citas.</p>
            </div>
          </li>
        </ul>
      </div>
        <div id="middle-border"></div>
        <div id="right-zone"></div>
      </div>
    </div>
    </body>
</html>