<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Formulario de Registro</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estiloindex.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
</head>

<body> <main>  <div id="fondohistoria">
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
                <li><a href="galeria.html"> Galeria</a></li>
                <li><a href="contacto.html"> Contacto</a></li>
                

            </ul>  
                    </header>  
            <section>  <br> <br>   <div id="usuario"> <a href="form_registro.php"> <img src="usuario1.png"></a>  </div>  <?php if (isset($_GET['error'])) {
            echo"<h2>No es un usuario registrado</h2>";
        } ?> 
          <form action="registro.php" method="post" >
    	<h2>Registrate en el sitio</h2> <br>  <br>  
        <label>Nombre
        	<input type="text" name="nombre" required />
        </label> <br> <br>   
		<label>Apellido
        	<input type="text" name="apellido" required />
        </label> <br> <br>   
        <label>Email
        	<input type="email" name="email" required />
        </label> <br> <br>   
        <label>Nombre de usuario
        	<input name="usuario" type="text" maxlength="12" />
        </label> <br> <br>   
        <label>Contraseña
        	<input type="password" name="password" maxlength="12" />
        </label> <br> <br>   
        <label>
            <input name="newsletter" type="checkbox" value="si" checked="checked" /> Sí, deseo recibir informacion por mail.
        </label> <br> <br>   
        <input type="submit" value="Registrarse"/>	
    </form> 
       
    <form action="login.php" method="post">
        <h2>Logueate</h2> <br>   <br>    
        <label>Nombre de usuario
            <input name="usuario" type="text" maxlength="12" />
        </label><br> <br>    
        <label>Contraseña
            <input type="password" name="password" maxlength="12" />
        </label><br> <br>   
            <input type="submit" value="Login"/>  <br>  <br>      

    <a href="form_registro.php">Registrate si no sos usuario.</a></form>
    
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
