<!DOCTYPE html>
<html>
<body>


<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


<head>
<meta name ="viewport" content= "width=device-width">
	<title>Ejercicio</title>

	<link rel="stylesheet" href="estilos.css">
</head>

<header>
	Home

</header>

<section>

<?php

include_once("includes/database.php");

$query= "SELECT usuario.Nombre, usuario.idUsuario, comentario.comentario, comentario.likes, usuario.Imagen, usuario.fondo FROM articulos 
JOIN comentario ON articulos.idComentario = comentario.idComentario 
JOIN usuario ON articulos.idUsuario = usuario.idUsuario ";

$result= mysqli_query($con,$query);

while($row = mysqli_fetch_array($result)) {

echo "<article class=".$row['fondo'].">";
echo "<div class='uno'>";
echo "<figure id='perfil'><img src=".$row['Imagen']."></figure>";
echo "</div>";
echo "<div class='unoTexto'>";
echo "<h1 id='nombre'> <a href='usuarioIndividual.php?idUsuario=".$row['idUsuario']."'>".$row['Nombre']."</a></h1>";

//echo "<h1 id='nombre'>".$row['Nombre']."</h1>";
echo "<article id='comentario'> ".$row['comentario']."</article>";
echo "<figure id='meGusta'>";
echo "<p id='like'>".$row['likes']."</p>";
echo "<img src='imagenesWEB/meGusta.png' >";

echo "</figure>";
echo "</div>";
echo "</article>";

}

?>

</section>



<footer>
	2014 @MorenoAlejandra
</footer>

</body>






</html>

