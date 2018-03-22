<?php 


$app = [];

$app['config'] = require 'config.php';

require 'core/Router.php';
require 'core/Request.php';
require 'core/database/Connection.php';
require 'core/database/QueryMaster.php';


$app['database'] = new QueryMaster(
	Connection::connect($app['config']['database'])
);

// function redirect($loc)
// {
	
// 	header("location:".$loc.$msg);
// }
