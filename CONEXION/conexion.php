
<?php
/*Datos de conexion a la base de datos*/
$db_host = "127.0.0.1";
$db_user = "root";
$db_pass = "";
$db_name = "fichas";

$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

if(mysqli_connect_errno()){
	echo 'No se pudo conectar a la base de datos : '.mysqli_connect_error();
}
?>