<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="estiloindex.css">
<title>Enviar</title>
</head>

<body> <main>  <div id="fondocontacto">
<header> 
 <ul class="navbar">
 	            <li><a href="index.html"> Inicio</a></li>
				<li><a href="historia.html"> Historia </a></li> 
				<li><a href="exposiciones.html"> Exposiciones</a></li> 
				<li><a href="#"> Artistas</a>
					<ul>
						<li><a href="dali.html">Dalí</a></li>
						<li><a href="ernst.html">Ernst</a></li>
						<li><a href="miro.html">Miró</a></li>
						<li><a href="magri.html">Magritte</a></li>
					</ul>
				</li>
				<li><a href="galeria.html"> Galería</a></li>
				<li><a href="contacto.html"> Contacto</a></li>
				

			</ul>  </header>
			<section>  <div id="usuario"> <a href="form_registro.php"> <img src="usuario1.png"></a>  </div>
 
<form>
<?php

//se arma el array POST
$nombre=$_POST['nombre'];
$email=$_POST['email'];
$localidad=$_POST['localidad'];
$comentario=$_POST["comentario"];

$destino="mail@mail.com,mail2@mail.com";
$asunto="Contacto desde el sitio";
$mensaje="Nombre: ".$nombre." Email: ".$email." Localidad: ".$localidad." Mensaje: ".$comentario;

$header="From: ".$nombre."<".$email.">";

$enviado = mail($destino,$asunto,$mensaje,$header);

if($enviado == true){
	echo "Su correo ha sido enviado.";
}else{
	echo "Hubo un error en el envio del mail.";
}

$conexion = mysqli_connect("localhost","root","", "pd3") or die('No se pudo conectar al servidor');


// $consulta=mysqli_query($conexion, "INSERT INTO contactos VALUES ('','$nombre','$email','$localidad','$comentario')");

$consulta = mysqli_query($conexion, "INSERT INTO contactos (nombre,email,localidad,comentario)VALUES ( '$nombre','$email','$localidad','$comentario')") or die(mysqli_error($conexion));



?>
</form>

<a href="contacto.html"> <div id="boton4"> Click acá para volver a mandar un mensaje  </div> </a> 
</section> 

<footer >  
			<div id="nombre"> <a href="#"> XIOMARA ESPINDOLA </a> 
			<div id="redes">
				<ul><li> <a href="#" target="_blanck"><img src="2.png"></a></li>
				
					<li> <a href="#" target="_blanck"><img src="1.png"></a></li>
					
				</ul>
			</div> </footer> </div>
</main>
</body>
</html>