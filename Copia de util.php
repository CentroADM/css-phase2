<?php
date_default_timezone_set('America/Mexico_City');
require_once ('cnc.php');

function tablaUsuarios($query){

  $data = "";
  $data.='<thead>';
  $data.='<tr align="center">';
  $data.='<th>Nombre</th>';
  $data.='<th>Comentarios</th>';
  $data.='</tr>';
  $data.='</thead>';
  $data.='<tbody> ';

  if (!empty($query)){
                
    $result = executeQuery($query);

    while ($row = mysqli_fetch_array($result)){ 
      $nombre = $row[nombre];            
      $comentarios = $row[comentarios]; 

      $data.='<tr>';
      $data.='<td>'.$nombre.'</td>';
      $data.='<td>'.$comentarios.'</td>';
      $data.='</tr>';
    }
  }
  $data.='</tbody>';
  return $data;
}


function metodoDePrueba (){
  echo "¡Hola desde el metodo!";
}
//CONCATENAR//
//METODO 1//

function metodo1 (){

$menor='<div class="responsive">';
$menor.='<div class="gallery">';
$menor.='<a target="_blank" href="1.jpg">';
$menor.='<img src="1.jpg" alt="remar2" width="270" height="400"> </a>';
$menor.='<div class="desc">Add a description of the image here</div> </div> </div>';
$menor.='<div class="responsive">';
$menor.='<div class="gallery">';
$menor.='<a target="_blank" href="2.jpg">';
$menor.='<img src="2.jpg" alt="correr" width="270" height="400"></a>';
$menor.='<div class="desc">Add a description of the image here</div> </div> </div>';
$menor.='<div class="responsive">';
$menor.='<div class="gallery">';
$menor.='<a target="_blank" href="5.jpg">';
$menor.='<img src="5.jpg" width="270" height="400"> </a>';
$menor.='<div class="desc">Add a description of the image here</div> </div> </div>';
$menor.='<div class="responsive">';
$menor.='<div class="gallery">';
$menor.='<a target="_blank" href="6.jpg">';
$menor.='<img src="6.jpg" alt="xxx" width="270" height="400"> </a>';
$menor.='<div class="desc">Add a description of the image here</div> </div> </div>';
$menor.='<div class="clearfix"></div>';

return $menor;
 }

//METODO2//
function metodo2 (){
  $mayor='<div class="responsive">';
 $mayor.='<div class="gallery">
 <a target="_blank" href="3.jpg">
             <img src="3.jpg" alt="3" width="270" height="400">
           </a>
           <div class="desc">Add a description of the image here</div>
         </div> </div>
         <div class="responsive">
         <div class="gallery">
           <a target="_blank" href="4.jpg">
             <img src="4.jpg" alt="4" width="270" height="400">
           </a>
           <div class="desc">Add a description of the image here</div>
         </div> </div>
         <div class="responsive">
         <div class="gallery">
           <a target="_blank" href="7.jpg">
             <img src="7.jpg" alt="7" width="270" height="400">
           </a>
           <div class="desc">Add a description of the image here</div>
         </div> </div>
         <div class="responsive">
         <div class="gallery">
           <a target="_blank" href="8.jpg">
             <img src="8.jpg" alt="8" width="270" height="400">
           </a>
           <div class="desc">Add a description of the image here</div>
         </div> </div>
         <div class="clearfix"></div>';

         return $mayor;

         }
?>
