<?php
/* include_once('functions/bd_conn.php');


if (!empty($_POST['busqueda'])) {
// TRAER DATOS
 $busqueda = explode(" ", $_POST['busqueda']);
// CONSULTA A LA BASE DE DATOS
 $consulta = "SELECT * FROM buscador WHERE name LIKE '%".$busqueda[0]."%'";

 for ($i=1; $i < count($busqueda); $i++) { 
  if (!empty($busqueda[$i])) {
      $consulta .= "AND name LIKE '%".$busqueda[$i]."%'";
  }
 }
 
 $consulta .= "LIMIT 3";
 $query = mysqli_query($conex, $consulta);
 while ($item = mysqli_fetch_assoc($query)) {
  echo '   
  <li class="item">
      <div class="img">
          <img src="'.$item['img'].'">
      </div>
      <div class="title">
          <h4>'.$item['name'].'</h4>
      </div>
      <div class="price">
          <span>MNX '.$item['price'].' </span>
      </div>
  </li>
  ';
 }

} */




?> 