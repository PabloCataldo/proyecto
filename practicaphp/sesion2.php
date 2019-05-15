<?php
session_start();
echo "El nombre del usuario creado en sesiones.php es: ".$_SESSION["nombre"];

//Eliminamos una variablede sesion concreta y especifica
	//unset($_SESSION["nombre"])
//Eliminamos todas las variables de sesion
	//session_destroy();
?>