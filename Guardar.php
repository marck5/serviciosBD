<?php
	//echo "Respuesta por parte del servidor...";
	include"registro.php";
	$nom=$_POST['Nom'];
	$dir=$_POST['Dir'];
	$rfc=$_POST['RFC'];
	$tel=$_POST['Tel'];
	$clasif=$_POST['Clas'];
	$foto=$_POST['Foto'];
	$lat=$_POST['Lat'];
	$lon=$_POST['Long'];

	$sql="INSERT INTO servicio Values('0','$nom','$dir','$rfc','$tel','$clasif','$foto','$lat','$lon')";
	$result=mysqli_query($conn, $sql);

	if($result){
		echo "Los datos recibidos son: Nombre:".$nom."Dir:".$dir."RFC:".$rfc."tel:".$tel."Clasificacion:".$clasif."Foto:".$foto."Latitud:".$lat."Longitud:".$lon;
	}else{
		echo "Hubo un error al registrar los datos:".mysqli_error();
	}
?>