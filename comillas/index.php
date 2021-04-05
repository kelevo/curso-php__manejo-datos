<?php

// COMILLAS SIMPLES

// Si ocupamos comilla simple podemos colocar texto de una linea
echo 'Un texto de una linea </br>';
// y tambien texto multilinea
echo 'Esto es un texto
multilinea </br>';

/**
 * Cuando usamos comilla simple, dentro de ellas no podemos
 * colocar mas comillas simples ya que php no sabria
 * con cual cerrar asi que anteponemos un \
 */
echo 'Un texto de una linea
varias lineas \' </br>';

// Tampoco podemos colocar backslash, tenemos que ponerlo doble
echo 'Un texto de una linea
varias lineas \' \\ continuar con mas texto </br>';

// Si metemos variables dentro de comillas simples se vuelven texto simple
echo 'Esto es una variable $declaracion </br>';

// COMILLAS DOBLES

$name = 'patrick';
echo "Mi nombre es $name <br>";
// Si esto mismo lo hacemos con comillas simples
echo 'Mi nombre es ' . $name . '</br>';

//Con estructuras simples requerimos usar corchetes
$courses = ['backend' => 'PHP'];

// CLASES
// Clase
class User
{
    public $name = 'Patrick';
}
// Objeto
$user = new User;

echo "$user->name quiere aprender {$courses['backend']} </br>";

// Variables variables
$teacher  = 'italo';
$italo = 'Profesor de PHP';
echo "$teacher es ${$teacher} </br>";

// Otra estructura compleja
function getTeacher()
{
    return 'teacher';
}
$teacher = 'Italo';

echo "{${getTeacher()}} ensenia PHP";