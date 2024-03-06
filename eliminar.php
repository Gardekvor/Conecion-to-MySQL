<?php
$id = $_POST['txtid'];

include('conexion.php');
$con = conectaDB();
$sql ="delete from productos where idpr='".$id."'";

mysql_query($sql, $con);  

if(mysql_affected_rows()>0){
	echo "1";
}
else{
	echo "2";
}
 
?>