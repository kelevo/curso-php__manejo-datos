<?php

// Que tengo registrado
$courses = ['javascript', 'php'];
// Que quieren los alumnos
$wishes = ['php', 'laravel', 'javascript', 'vuejs'];

echo "<pre>";
var_dump(array_diff($wishes, $courses));

// Otro ejemplo
$arrayA = [1, 2, 3, 4, 5];
$arrayB = [3, 4, 5, 6, 7];

echo "<pre>";
var_dump(array_diff($arrayA, $arrayB));

// array_diff_assoc: respecto a valores y a keys
