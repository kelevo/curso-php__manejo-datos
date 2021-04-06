<?php

$courses = [
    'frontend' => 'javascript',
    'framework' => 'laravel',
    'backend' => 'php'
];

echo "<pre>";
var_dump($courses);

// Iteracion de elementos
foreach ($courses as $key => $value) {
    echo "$key: $value </br>";
}

echo "</br>";

// Funcion propia de PHP para caminar a travez del array
function upper($course, $key)
{
    echo strtoupper($course), ": $key </br>";
}

array_walk($courses, 'upper');

/**
 * array_key_exists('frontend', $courses); comprueba si existe el $key
 * in_array('javascript', $courses); existe 'javascript' en este array
 * array_keys($courses); imprime todos los keys del array
 * array_values($courses); imprime todos los valores
 */