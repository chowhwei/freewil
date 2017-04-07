<?php
require_once "vendor/autoload.php";

$hello = new Chowhwei\FreeWil\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new Chowhwei\FreeWil\Demo\Hello('My Goddess');
echo $hiGirl->hello();
echo "\n";
