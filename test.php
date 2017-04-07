<?php
require_once "vendor/autoload.php";

$hello = new FreeWil\Demo\Hello();
echo $hello->hello();

echo "\n";
$hiGirl = new FreeWil\Demo\Hello('My Goddess');
echo $hiGirl->hello();
echo "\n";
