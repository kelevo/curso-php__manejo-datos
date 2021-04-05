<?php

$data = 'Estudio PHP';
echo "$data[0] </br>"; // Imprime "E"

/**
 * Substring, se usa para sustraer un poco de contenido
 * de un string, parametros => 1 (variable de donde
 * se va a extraer el string) 2 (inicio de substraccion)
 * 3 (numero de caracteres a substraer despues del inicio)
 */
$post = "Lorem ipsum dolor sit amet
        consectetur adipisicing elit. Fugit
        porro minima vitae";

$extract = substr($post, 0, 20);
echo "$extract... [Ver mas] </br>";

// ---------------------------------------------------------

// Pasar un string a un array
$data = 'javascript, php, laravel'; // Campo tags
// Pasar de texto a un array, que separe cada vez que se encuentre
//una , respecto a $data
$tags = explode(', ', $data); // Array
echo "<pre>"; // Organiza mejor la vista de un array
var_dump($tags);

// --------------------------------------------------------

// Pasar un array a un string
$courses = ['javascript', 'php', 'laravel'];
// implode(), creame un string a partir de un array donde
// los elementos son separados por , y un espacio
echo implode(', ', $courses);

// -------------------------------------------------------

// Eliminar espacios de string
$course = "       Curso de PHP      ";
$course = trim($course);

// Quitar solo espeacio de la izquierda
// $course = ltrim($course);

// Quitar solo el espacio de la derecha
// $course = rtrim($course);

echo "<pre>";
echo "Quiero aprender $course, y ser un buen programador";