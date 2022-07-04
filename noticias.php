<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="estiloindex.css">
	<title>Noticias</title>
</head>
<body>
<main>  <div id="fondogaleria">
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
			<section> 
			 <div id="usuario"> <a href="form_registro.php"> <img src="usuario1.png"></a>  </div>  <form style="margin-left: 10%; padding:5px; width: 10%;">
			 <?php 

if(isset($_SESSION['nombre']) and isset($_SESSION['apellido']) ) {
	
echo " ¡Hola! ";
echo $_SESSION['nombre']." " ; 
echo $_SESSION['apellido'];
 
 echo " <br> <a href='form_registro.php'> <b>Cerrar sesión </b> </a>";

	


?></form><div id="titulonoticias"> NOTICIAS SOLO PARA USUARIOS</div> 
				<form> 
				<h2>La casa surrealista de Pedro Friedeberg, rincón a rincón</h2> <br>  <img src="noticiauno.jpg"> <br> <br> 
				<p>El hogar en Ciudad de México del artista es como un museo lleno de anécdotas tan extraordinarias como su inquilino. Sus dibujos, pinturas y muebles están repletos de arquitecturas utópicas mezcladas con patrones psicodélicos y una iconografía inventada con referentes de la cultura pop, la tradición mexicana y la zoología</p>  <a href="https://elpais.com/icon-design/living/2021-06-07/maniquies-de-otro-siglo-muebles-con-piernas-efigies-egipcias-y-ratones-mickey-la-casa-surrealista-de-pedro-friedeberg-rincon-a-rincon.html"> <div id="boton2"> Click acá para más información </div> </a> </form>   <form>
				<h2>Dalí hecho con inteligencia artificial dará la bienvenida a los visitantes de su museo en Florida</h2> <br>  <br> <img src="noticiasdos.webp"> <br>  <br> <p>
Esta imagen podrá saludar y comunicarse con los visitantes del recinto</p> <a href="https://www.infobae.com/america/eeuu/2019/01/30/dali-hecho-con-inteligencia-artificial-dara-la-bienvenida-a-los-visitantes-de-su-museo-en-florida/"> <div id="boton2"> Click acá para más información </div> </a></form>  <form> <h2>Un ‘miró’ propiedad de André Breton sale a subasta en Christie’s</h2> <br> <br> <img src="noticiatres.jpg"> <br> <br>  <p> La obra es un excepcional óleo de 1924, año decisivo de la eclosión surrealista del pintor</p> <a href="https://elpais.com/cultura/2021-02-15/un-miro-propiedad-de-andre-breton-sale-a-subasta-en-christies.html"> <div id="boton3"> Click acá para más información </div> </a>  </form>  
<form> <h2> Palacio de Bellas Artes estrena: "Surrealismo en Diálogo" con obras de Salvador Dalí, Remedios Varo y Leonora Carrington </h2>  <br>  <br> <img src="noticiascuatro.jpeg"> <br> <br>  <p> Obras de artistas como Remedios Varo, Leonora Carrington, Frida Khalo, Diego Rivera, Max Ernst y Salvador Dalí se exhiben en Bellas Artes dentro de la exposición: Surrealismo en dialogo</p><a href="https://www.informador.mx/cultura/Palacio-de-Bellas-Artes-estrena-Surrealismo-en-Dialogo-con-obras-de-Salvador-Dali-Remedios-Varo-y-Leonora-Carrington--20220604-0063.html"> <div id="boton3"> Click acá para más información </div> </a> </form>
				</section> 
<?php 
}
else{
	 
	header("Location:form_registro.php");
	die(); 
	
	
} ?>
<footer id="footergaleria">  
			<div id="nombre"> <a href="#"> XIOMARA ESPINDOLA </a> 
			<div id="redes">
				<ul><li> <a href="#" target="_blanck"><img src="2.png"></a></li>
				
					<li> <a href="#" target="_blanck"><img src="1.png"></a></li>
					
				</ul>
			</div> </footer> </div>
</main>

</body>
</html>