<?php
function conectaDB() 
{ 
  	$host = 'localhost'; //'148.222.7.8'
	$user = 'root';
	$pass = 'matematicas';
	$db = 'empresa';

   $link = @mysqli_connect($host, $user, $pass, $db);
   if (!$link) {
      echo "Error al realizar la conexión a la base de datos.";
      exit();
   }

   return $link; 
} 
?>