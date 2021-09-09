<?php
require('functions/bd_conn.php');
include_once('templates/head.php');
include_once('templates/search.php');

/*  if (!empty($_GET['busqueda'])) {
// TRAER DATOS
 $busqueda = $_GET['busqueda'];
// CONSULTA A LA BASE DE DATOS
 $consulta = "SELECT * FROM buscador WHERE name LIKE '%".$busqueda."%'";
 $query = mysqli_query($conex, $consulta);
 echo  '<div class="single"></div>' ;
 while ($item = mysqli_fetch_assoc($query)) {
  echo '   
  <div class="product">
      <div class="img">
          <img src="'.$item['img'].'">
      </div>
      <div class="title">
          <h4>'.$item['name'].'</h4>
      </div>
      <div class="price">
          <span>MNX '.$item['price'].' </span>
      </div>
  </div>
  ';
 }
echo '</div>';
}  */



include_once('templates/footer.php');

?>