<?php
$to="josue@loscriptozoos.com";  //donde se enviaran los datos

//recoger los datos del formulario
$nombre = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$mensaje = htmlentities($_POST['mensaje']);

echo $nombre. '<br>'.$email. '<br>'.$mensaje


?>