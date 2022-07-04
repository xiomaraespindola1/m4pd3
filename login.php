<?php session_start();?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estiloindex.css">
<title>Login de Usuarios</title>
</head>

<body> 
<main>  <div id="fondohistoria">
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
$usuario=$_POST['usuario'];
$password=md5($_POST['password']);

include("conexion.php");

$consulta=mysqli_query($conexion, "SELECT nombre, apellido, email FROM usuarios WHERE usuario='$usuario' AND password='$password'");

$resultado=mysqli_num_rows($consulta);

if($resultado!=0){
	$respuesta=mysqli_fetch_assoc($consulta);
	
	$_SESSION['nombre']=$respuesta['nombre'];
	$_SESSION['apellido']=$respuesta['apellido'];
		
		echo "Hola ".$_SESSION['nombre']." ".$_SESSION['apellido']."<br />";
		echo "Acceso al panel de usuarios.<br/>";
		echo "<a href='panel.php'> <b>Panel </b> </a>";	

}else{ 
	header("Location:form_registro.php?error=1"); 
}








?>


</form>


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