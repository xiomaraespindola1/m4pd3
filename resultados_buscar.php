<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estiloindex.css">

<title> </title>
</head>

<body> 
	<main> <div id="fondocontacto">
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
					</ul></li>
				<li><a href="galeria.html"> Galería</a></li>
				<li><a href="contacto.html"> Contacto</a></li>
				

			</ul>  </header>
<section>
	<form id="cajabuscador" action="resultados_buscar.php" method="post">
    <label>
    <input type="search" name="buscar" placeholder="Buscar..." />
    <input type="submit" value="Enviar">
    </label>
    </form> <br> 
<article style="width:70%;margin:0 auto;border:solid;padding:20px">
	<style>  #cajabuscador { margin-top: 4%; 
	                         margin-left: 8%;} 
	         #textodali { margin-top: -59%;
	                      margin-left: 50%; }
	         #imgdali { margin-top: -55%; }
	         #textomiro { margin-top: -54%; 
	                      margin-left: 55%;}
	         #textomagri{ margin-top: -79%;
	                     margin-left: 60%; }
	         #textoernst { margin-top: -80%; 
	                     margin-left: 58%;}</style>
<?php
	include('conexion.php');

	$buscar = $_POST['buscar'];
	echo "Su consulta: <em>".$buscar."</em><br>";

	$consulta = mysqli_query($conexion, "SELECT * FROM artistas WHERE nombre LIKE '%$buscar%' OR apellido LIKE '%$buscar%' ");
?>

	<p>Cantidad de Resultados: 
	<?php
		$nros=mysqli_num_rows($consulta);
		echo $nros;
	?>
	</p>
    
	<?php
		while($resultados=mysqli_fetch_array($consulta)) {
	?>
    <p>
    <?php	
			echo $resultados['nombre'] . " ";
			echo $resultados['apellido'] . " ";
			
			
	?>
    </p>  <?php echo $resultados['foto'] . " ";echo $resultados['bio'] . " "; ?>


    
    <?php
		};

		mysqli_free_result($consulta);
		mysqli_close($conexion);

	?>


</article>
</section>

<footer >  <div id="footercontacto"> 
			<div id="nombre"> <a href="#"> XIOMARA ESPINDOLA </a> 
			<div id="redes">
				<ul><li> <a href="#" target="_blanck"><img src="2.png"></a></li>
				
					<li> <a href="#" target="_blanck"><img src="1.png"></a></li>
					
				</ul>
			</div> </div></footer>
</main>

</body>
</html>