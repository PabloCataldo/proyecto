<!--Es una forma sencilla de almacenar datos para usuarios de manera individual usando un ID de sesion unico. Las variables de sesiones no se pierden al actualizar las paginas, eso es la diferencia en las variables normales y las variables de sesion-->
<?php
//INICIALIZAR VARIABLES DE SESION
session_start();
//CREAR VARIABLES DE SESION
$_SESSION["nombre"] = "Juan"; //con mayusculas SESSION siempre
$_SESSION["email"] = "juangmail.com";

//imprimir variable de sesion
echo $_SESSION["nombre"];

?>