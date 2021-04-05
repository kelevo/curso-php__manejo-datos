<?php

require __DIR__ . '/vendor/autoload.php';

var_dump(App\Validate::email('patrickjhonatanh@gmail.com'));
echo '</br>';

var_dump(App\Validate::url('platzi.com'));
echo '</br>';

var_dump(App\Validate::password('1234567891011'));
echo '</br>';