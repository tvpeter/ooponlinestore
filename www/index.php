<?php 

require 'core/bootstrapp.php';


require Router::load('routes.php')
    ->direct(Request::uri(), Request::method());
