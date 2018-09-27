<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Wcs\Hello;

$Cookie = new Hello();
$Hello = new \HelloWorld\SayHello();

echo $Cookie->talk();
echo $Hello->world();