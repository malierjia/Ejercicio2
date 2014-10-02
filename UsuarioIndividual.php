<!DOCTYPE html>
<html>
<head>

<meta name ="viewport" content= "width=device-width">
	<title>Usuario</title>

	<link rel="stylesheet" href="estilos.css">

<meta charset = "utf-8">
</head>
<header>
	Perfil

</header>
<body>


<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


<?php

//se conecta
include_once("includes/database.php");

$query = "SELECT usuario.IdUsuario, usuario.Nombre, comentario.idComentario, 
comentario.comentario,  comentario.likes, usuario.Imagen, usuario.fondo
FROM articulos 
RIGHT JOIN usuario ON articulos.IdUsuario = usuario.IdUsuario  
 JOIN comentario ON articulos.idComentario = comentario.idComentario
 ";

$result = mysqli_query($con,$query);

//toma el codgio de la url
$codigoUrl=  $_GET['idUsuario'];

while($row = mysqli_fetch_array($result) ) {

if($row["IdUsuario"]==$codigoUrl){
//llena los datos de la tarea

echo "<article class=".$row['fondo'].">";
echo "<div class='uno'>";
echo "<figure id='perfil'><img src=".$row['Imagen']."></figure>";
echo "</div>";
echo "<div class='unoTexto'>";
echo "<h1 id='nombre'>".$row['Nombre']."</h1>";
echo "<article id='comentario'> ".$row['comentario']."</article>";
echo "<figure id='meGusta'>";
echo "<p id='like'>".$row['likes']."</p>";
echo "<img src='imagenesWEB/meGusta.png' >";
echo "</figure>";
echo "</div>";
echo "</article>";


}}



?>




<form action="ejemploMovil2.php">
<br>
<input type="submit" value="Volver">
</form>


</body>

<footer>
	2014 @MorenoAlejandra
</footer>

</html>



