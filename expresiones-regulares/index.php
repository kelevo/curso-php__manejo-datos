<?php

/**
 * /: contenedor
 * ^: inicio
 * $: final
 * Estructura general: /^ $/
 * -: rango
 * []: patron
 * {}: condicion
 */

$password = '123456';
//ER: (del 0 al 9) (minimo 6 elementos, maximo 9 elementos)
var_dump((bool) preg_match('/^[0-9]{6,9}$/', $password));