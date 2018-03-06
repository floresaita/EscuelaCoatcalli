<?php
function conectar();
$user="root";
$pass="12345678";
$serv="localhost";
$db="escuela_coatcalli";
$con=mysql_connect($serv,$user,$pass) or die("error al conectar".mysql_error()));
mysql_select_db($db,$con);


return $con;
}
?>