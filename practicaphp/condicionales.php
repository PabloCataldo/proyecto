<!DOCTYPE html>
<html>
<head>
	<title>Condicionales</title>
</head>
<body>

	<?php //CONDICIONALES

	echo "<h1>CONDICIONALES EN PHP</h1>
	<br> <h2>Condicional if</h2>";

	$edad= 17;
	if ($edad<18) {
		echo "Es menor de Edad";
	 } 


	 echo "<h2>Condicional if.. else..</h2>";
	 $hora=11;
	 if ($hora<12) {			/*SI ES QUE la hora es menor a 12 sale impreso buen dia*/
	 	echo "Buen dia";
	 }
	 else {						/*SINO se imprime buenas tardes*/
	 	echo "Buenas tardes";
	 }


	 echo "<h2>Condicional if.. else if.. else..</h2>";
	 if ($hora<12) {			
	 	echo "La hora es menor a 12";
	 }
	 else if ($hora>=12 && $hora <=13) {	/*SINO Y SI la hora >=12 y <=13 se imprime medio dia*/
	 	echo "Medio dia";
	 }
	 else {						
	 	echo "La hora es mayor a 13";
	 }


	  echo "<h2>Condicional switch</h2>";
	  
	  $accion="guardar"; /*identificar primero la variable*/
	  switch ($accion) {
	  	case 'guardar':	/*case seria el caso que sucede y el break seria el corte del codigo  si sucede*/
	  	echo "El usuario eligio GUARDAR";
	  		break;
	  		
	  	case 'modificar':
	  	echo "El usuario eligio MODIFICAR";
	  		break;
	 	
	  	case 'eliminar':
	  	echo "El usuario eligio ELIMINAR";
	  		break;
	  	
	  	default:		/*por si no ocurre ninguna accion*/
	  		echo"El usuario no realizo ninguna accion";
	  		break;
	  }
	?>

</body>
</html>