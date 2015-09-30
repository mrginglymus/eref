<?php
define('ROOT_PATH', dirname(__DIR__) . '/eref/');
require_once ROOT_PATH.'Twig/Autoloader.php';

Twig_Autoloader::register();

$loader = new Twig_Loader_Filesystem(ROOT_PATH.'templates');
$twig = new Twig_Environment($loader);
?>

