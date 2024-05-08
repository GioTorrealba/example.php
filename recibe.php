<?php
// $_POST['variable']


if (!$_POST) {
	header('Location: http://localhost/curso/Formularios%20php/');
} 

$nombre = $_POST['nombre']; 
$sexo = $_POST['sexo'];
$year = $_POST['year'];
$terminos = $_POST['terminos']; 

echo 'Hola, ' . $nombre . ' eres ' . $sexo;


?>