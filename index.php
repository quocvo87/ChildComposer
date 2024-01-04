<?php
require __DIR__.'/vendor/autoload.php';

use ChildComposer\Child;
Child::process();

use TrueMe\MapArr;
$mapArr = new MapArr;
$fee = 1111;
$tax = 2222;

$newProduct1 = 'pro 1';
$newProduct2 = 'pro 2';
$revenueProduct = [$newProduct1, $newProduct2];

var_dump($mapArr->snake()->build([$fee, $tax, $revenueProduct])->get());
