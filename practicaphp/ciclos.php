<!DOCTYPE html>
<html>
<head>
	<title>Ciclos/Bucles</title>
</head>
<body>

	<?php 
	/*Ciclo o Bucle:
	Es una secuencia que ejecuta repetidas veces un trozo de codigo, hasta que la condicion asignada a dicho bucle deje de cumplirse*/

	//****************************************************************************************************************************//
	echo "Ciclo While <br/>"; //solo hasta diez y debe ser verdadera la condicion
	$x=1;
	while ( $x <= 10) {
		echo "El numero es: ".$x."<br/>"; //imprime uno a uno hasta llegar a 10
		$x++;
	}

	//**************************************************************************************************************************//

	echo "Ciclo do While <br/>"; //solo hasta diez y debe ser verdadera la condicion
	$x=1;
	do{
		echo "El numero es: ".$x."<br/>"; //imprime uno a uno hasta llegar a 10
		$x++;
	} while ( $x <= 10);


	//****************************************************************************************************************************//

	echo "<h2>CICLO FOR</h2>";

	for ($i=0; $i < 10; $i++) {
		echo "El numero es: ".$i."<br/>";
	}
	//****************************************************************************************************************************//
	//FOREACH
	echo "<h2>FOREACH</h2>";
	$personas = array ('Juan', 'Luis', 'Maria', 'Jose', 'Bernardo', 'Julio');

	foreach ($personas as $fila) {
		echo "El nombre de la persona es: ".$fila."<br/>";
	
	}

	?>

</body>
</html>