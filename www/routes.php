<?php


$router->get('', 'controllers/public/index.php');
$router->get('index', 'controllers/public/index.php');
$router->get('about', 'controllers/public/about.php');
$router->get('admin', 'controllers/admin/admin.php');
$router->get('category', 'controllers/public/category.php');
$router->get('product', 'controllers/public/product.php');
$router->get('login', 'controllers/admin/login.php');
$router->get('error', 'controllers/public/error.php');
$router->get('register', 'controllers/admin/register.php');
