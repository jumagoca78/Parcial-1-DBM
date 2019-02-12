<?php
session_start();
require_once('PHP/Conexion.php');
//$conexion = 
$_SESSION["ventana"] = "1";
?>
<!DOCTYPE html>

<html land="es">
<head>
 <meta charset="utf-8" />
 <title>Drag & drop</title>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="scss/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="scss/DragAndDrop.css">
  <script type="text/javascript" src="JavaScript/Mov_DragAndDrop.js"></script>
  <script type="text/javascript" src="JavaScript/EventoCaract.js"></script>
    <script type="text/javascript" src="JavaScript/claseMarcaYCelular.js"></script>

 
</head>
<body>
 <section>
   <div class="carrusel" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return drop(event)">
      <div class="col-sm-12" style="background-color:yellow;">
      <br>
      <br>
      <div class="col-sm-12" style="background-color:transparent;">
      <div class="carousel right">
      <div class="indicator"></div>
      <div class="wrap">
      <ul>
      <li><img id="cel1" alt="pieza1" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-lanix.jpg"/></li>
      <li><img id="cel2" alt="pieza2" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-moto.jpg"/></li>
      <li><img id="cel3" alt="pieza3" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-sony.jpg"/></li>
      <li><img id="cel4" alt="pieza4" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-sam.jpg"/></li>
      <li><img id="cel5" alt="pieza5" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-xiaomi.jpg"/></li>
      <li><img id="cel6" alt="pieza6" draggable="true" ondragstart="start(event)" ondragend="end(event)" src="Imagenes/Marcas/logo-huawei.jpg"/></li>
>>>>>>> 5933f1368a80b3e79549102888270f7aa424f25b
      
      </ul>
      </div>
      </div>
  
      <br>
      <br>
      
      </div>

      <br>
      <br>
      <br>
      <br>
      

</div>
   </div>
 </section>

 <section>
  <div id="cuadro3" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return clonar(event)">
    <h1>Arrastre aqui</h1>
  
   <div class="colorCel1" id="arrastrable2" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    Espacio colores
   </div>
  </div>
  <div id="cuadro2-1" style="background-color: #FBB678">
  </div>
  <div id="opciones">
    <ul>
    <center>
      <li><button onclick="cargarinfo1()" ondblclick="oc()">Red</button></li>
      <li><button onclick="cargarinfo2()" ondblclick="oc()">Memoria</button></li>
      <li><button onclick="cargarinfo3()" ondblclick="oc()">Almacenamiento</button></li>
      <li><button onclick="cargarinfo4()" ondblclick="oc()">Cámara</button></li>
      <li><button onclick="cargarinfo5()" ondblclick="oc()">Peso</button></li>
     </center>	 
    </ul>
  </div>
  <div id="cuadro2-2" style="background-color: #FBB678">
  </div>
  <div id="cuadro3" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return clonar(event)">
   <h1>
     Arrastre Aqui
   </h1>
   <div class="colorCel2" id="arrastrable2" draggable="true" ondragstart="start(event)" ondragend="end(event)">
    Espacio colores

    
   </div>
  </div>
  <!--<div id="papelera" ondragenter="return enter(event)" ondragover="return over(event)" ondragleave="return leave(event)" ondrop="return eliminar(event)">Papelera</div>-->
 </section>
</body>
 </section>
</body>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script  src="JavaScript/index.js"></script>
</html>