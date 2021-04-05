<?php

// Valores
function greet($name)
{
    return "Hola, $name";
}

echo greet('Patrick'), '</br>';

// Referencias
$course = 'PHP';
function path($course)
{
    $course = 'Laravel';
    echo $course; // Laravel
}

path($course);
echo $course; // Laravel

// Predeterminado
function greet2($name2 = 'Patrick')
{
    return "Hola, $name2";
}

echo greet2();
echo greet2('Elizabeth');