<?php 


if ($_SERVER["HTTP_HOST"] != "localhost") {
	header("Location:https://hidden-sea-61555.herokuapp.com/views/home.php"); // produccion
}else{
	$url= "Proyectos/LionCore/views/home.php";
	header("Location:http://localhost/Proyectos/LionCore/views/home.php");  //desarrollo
}

?>
