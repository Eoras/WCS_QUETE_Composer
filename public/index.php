<?php

require_once __DIR__ . '/../vendor/autoload.php';

$maClassHello = new \App\Wcs\Hello();
echo $maClassHello->talk();

echo "<br>";

$depClass = new \HelloWorld\SayHello();
echo $depClass::world();
