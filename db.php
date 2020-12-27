<?php
session_start();

$conn = mysqli_connect(
  'localhost',
  'root',
  'password123',
  'php_mysql_crud'
) or die(mysqli_erro($mysqli));


/*                      VERIFICAR LA CONECCION DE LA BASE DE DATOS CON EL CÓDIGO
if(isset($conn)){
  echo 'la base de datos esta connectada correctamente';
}
*/
?>
