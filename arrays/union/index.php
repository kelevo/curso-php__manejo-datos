<?php

// Cursos de frontend
$frontend = ['javascript'];
// Cursos de backend
$backend = ['php', 'laravel'];

// Podemos unirlos con + pero se eliminaran los keys repetidos
echo "<pre>";
var_dump($frontend + $backend);
// Lo podemos evitar agregando diferentes keys a los elementos

// Pero nos podemos ahorrar todo esto usando una funcion propia de php
// El problema con esta funcion esque solo funciona con keys numericos
// si la aplicamoc a keys array, nos reemplaza tambien
echo "<pre>";
var_dump(array_merge($frontend, $backend));

// Para solucionar ese error
echo "<pre>";
var_dump(array_merge_recursive($frontend, $backend));
// Lo anterior crea arrays para los keys parecidos

// ----------------------------------------------------------------------

$courses = ['javascript', 'php', 'laravel'];
$categorias = ['front', 'back', 'framework'];

echo "<pre>";
var_dump(array_combine($categorias, $courses));