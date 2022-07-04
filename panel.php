<?php session_start();?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estiloindex.css">
<title>Panel</title>
</head><body>
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

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ) {
	
echo " ¡Hola! ";
echo $_SESSION['nombre']." " ; 
echo $_SESSION['apellido'];
echo "<a href='noticias.php'> <br>  <b>Ir al inicio <b/> </a>"; 

//"<p><img src='imagenes/cuadro.jpg' /></p>"; 

echo " <br> <a href='form_registro.php'> Cerrar sesión </a>";

	
} 
else{
	
	 
	header("Location:form_registro.php"); 
	die(); 
	
	
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