<?php
$id = $_POST['txtid'];

include('conexion.php');
$con = conectaDB();
$sql ="select idpro,nombre, precio, existencia from productos where idpro='".$id."'";

$result=mysql_query($sql, $con);  

$jsondata["success"] = true;
   
$row = mysql_fetch_row($result);

$jsondata = array("nombre"=> $row[1]);
$jsondata = array("precio"=> $row[1]);
$jsondata = array("existencia"=> $row[1]);
  
 echo json_encode($jsondata);
?>