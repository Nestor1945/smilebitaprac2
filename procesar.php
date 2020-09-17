<?php

//CONEXIÓN CON EL SERVIDOR
$server ="localhost";
$userr = "root";
$pass = "";
$bd = "BITA";

$conectar = new mysqli($server,$userr,$pass, $bd);
//$conectar=mysqli_connect($server,$userr,$pass)	;

//VERIFICAR LA CONEXIÓN
if(!$conectar)
	{
	echo "No se puedo conectar con el servidor";
	}

//RECUPERAR VARIABLES

$nombre=$_POST['nombre'];
$tipo_cambio=$_POST['menu_cambio'];
$impacto=$_POST['Sliderimpacto'];
$descrip=$_POST['descripcion'];
$fecha=$_POST['fechaHora'];
$recomendado=$_POST['pl'];

//'$fecha',
 //'$recomendado',
$sql= "INSERT INTO problema values(
								   '$nombre',
								   '$tipo_cambio',
								   '$impacto',
								   '$descrip',
								   '$fecha',
								   '$recomendado')";
//EJECUTAMSO LA SENTENCIA DE SQL
$ejecutar = mysqli_query($conectar, $sql);

//VERIFICAMOS LA EJECUCIÓN
	if(!$ejecutar){ 
	echo"Hubo algun error";	
	}else{
	echo"Datos guardados correctamente<br><a href='Problema.html'> Volver </a>";
	}
	

?>



