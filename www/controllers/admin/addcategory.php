<?php


$categories = $app['database']->selectAll('majorCategory');

$subcategory = $app['database']->selectAll('subcategory');

$sub= $app['database']->selectAll('subcategory');

require 'views/admin/addcategory.view.php';
