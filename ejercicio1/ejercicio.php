<?php
$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];
$email = $_GET['email'];
$telefono = $_GET['numero'];
$estudios = $_GET['estudios'];
$conocimientos = $_GET['conocimientos'];
$ingles = $_GET['ingles'];
echo "<h1>GRACIAS POR SU REGISTRO </h1>";
echo "<h2>Los datos ingresados fueron: </h2>";
echo "<p>EL nombre del usuario es : $nombre </p>";
echo "<p>EL apellido del usuario es : $apellido </p>";
echo "<p>EL correo del usuario es : $email </p>";
echo "<p>EL número del usuario es : $telefono </p>";
echo "<p>EL nivel del usuario es : $estudios</p>";
echo "<p>EL nivel de ingles del usuario es : $ingles </p>";
echo "<p>EL conocimiento del usuario es :</p>";

echo "<ul>";
    foreach($conocimientos as $conocimiento){
        echo"<li>$conocimiento</li>";
    }      
echo "</ul>";   
?>