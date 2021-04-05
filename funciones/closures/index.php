<?php

// Funcion anonima
// Se usa en una variable que requiere logica
/*
$greet = function ($name)
{
    return "Hola, $name";
};

echo $great('Patrick');
*/

function greet(Closure $lang, $name)
{
    return $lang($name);
}

$es = function($name)
{
    return "Hola, $name";
};

$en = function($name)
{
    return "Hello, $name";
};

echo greet($es, 'Linda');