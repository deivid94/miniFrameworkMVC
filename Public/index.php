<?php 
echo 'Isso esta funcionando!';

require_once "../vendor/autoload.php";

$route = new \App\Route;

echo '<hr>';
 print_r ($route->getUrl());
 
?>
