<?php
$cc = $_REQUEST['document'];
$nombre = $_REQUEST['name'];
$email = $_REQUEST['email'];
$movil = $_REQUEST['numero'];
$sexo = $_REQUEST['sexo'];
echo "<h1>GRACIAS POR SU REGISTRO </h1>";
echo "<h2>Los datos ingresados fueron: </h2>";
echo "<p>EL documento del usuario es : $cc </p>";
echo "<p>EL nombre del usuario es : $nombre </p>";
echo "<p>EL correo del usuario es : $email </p>";
echo "<p>EL número del usuario es : $movil </p>";
echo "<p>EL sexo del usuario es : $sexo </p>";
?>