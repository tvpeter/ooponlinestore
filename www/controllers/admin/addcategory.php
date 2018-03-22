<?php


$categories = $app['database']->selectAll('majorCategory');


require 'views/admin/addcategory.view.php';
