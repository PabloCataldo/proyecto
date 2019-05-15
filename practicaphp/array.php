<!DOCTYPE html>
<html>
<head>
	<title>Array</title>
</head>
<body>

	<?php 
	//ARRAYS
	//ARRAY de 7 elementos con el nombre de un dia de la semana en cada uno de ellos:
	echo "<h2>Array Indexado</h2>";
	$aDias = array("Lunes","Martes", "Miercoles", "Jueves", "Viernes", "Sabado", "Domingo" );

	//Mostrar datos de un array indexado
	echo "El primer dia de la semana es el: ".$aDias[0]."<br/>";

	//Array de 4 elementos con un numero contenido en cada posicion:
	$aNumeros = array(33, 12, 83, 55);
	echo "El segundo numero es el: " .$aNumeros[1]."<br/>";
	//********************************************************************************************
	//			ARRAY ASOCIATIVOS
	//********************************************************************************************
	echo "<h2>ARRAYS ASOCIATIVOS</h2>";

	$aColores = array('color1' =>"rojo", 'color2' =>"verde", 'color3' =>"azul" );

	//PARA IMPRIMIR UTILIZAMOS LA CLAVE
	echo "Color 3: ".$aColores["color3"]."<br/>";	//<br/> es la forma resumida de escribir <br> y </br>

	//array con claves numericas y alfanumericas
	$aCosas = array("color1" => "rojo", "importe" => 300, "activo" => true, 3 => 55  );

	echo "Activo: ".$aCosas["activo"]."<br/>";
	echo "3: ".$aCosas[3]."<br/>";
	
	//**********************************************************************************************
	//          ARRAYS MULTIDIMENSIONALES: son varios arrays asociativos, uno dentro de otro
	//**********************************************************************************************
	$acolores = array(
		'frutas' => array('manzana' => 'roja', 'ciruela' => 'purpura'), //la coma (,) al final
		'flores' => array('rosa' => 'rosada', 'violeta' => 'azul')
	);

	echo "Una ciruela es ".$acolores['frutas']['ciruela']." y una ciruela es ".$acolores['flores']['violeta'];

	//**********************************************************************************************
	//      Funciones para enviar/recibir informacion de formularios  VAR_DUMP Y PRINT_R
	//**********************************************************************************************
	echo "<br/>";
	var_dump($aDias);
	echo "<br/>";
	print_r($aDias)







	?>

</body>
	
</html>