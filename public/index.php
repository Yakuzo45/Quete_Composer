<?php

require_once __DIR__ . '/../vendor/autoload.php';
require "../src/Wcs/Hello.php";

use App\Wcs\Hello;

$Cookie = new Hello();

echo $Cookie->talk();