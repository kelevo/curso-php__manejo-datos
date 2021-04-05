<?php

// Alterar
$text = "PHP es UN LENGUAJE"; // slug
echo $text, '</br>';
// Convertir a minusculas
echo strtolower($text), '</br>';
// Convertir a mayusculas
echo strtoupper($text), '</br>';
// Colocar el primer elemento en mayuscula
echo ucfirst($text), '</br>';
// Colocar el primer elemento en minuscula
echo lcfirst($text), '</br>';

// Reemplazar
// Reemplazar los espacios por guiones
$slug = str_replace(' ', '-', $text);
// Imprimirlo y convertirlo a minuscula
echo strtolower($slug), '</br>';

// Modificacion
$code = 39;
// Expande a 8 caracteres y rellena con #
// STR_PAD_BOTH (hace que rellene a ambos lados
// dejando el codigo en medio)
echo str_pad($code, 8, '#', STR_PAD_BOTH), '</br>';
// echo str_pad($code, 8, '#', STR_PAD_LEFT);

// Alterando usando etiquetas HTML o codigo en general

// Proteger nuestros datos evitando que se modifiquen
// con etiquetas
$hello = "<h1>Hola mundo</h1>";
echo strip_tags($hello), '</br>';

// Elementos monobyte y multibyte
// Util cuando en nuestros string usamos caracteres especiales
// como acentos o letra enie
$read = "PHP es UN LENGUAJE, año 2020, programación";
echo strtoupper($read), '</br>'; // monobyte
echo mb_strtoupper($read), '</br>'; // multibyte