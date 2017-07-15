<?php
require_once (ROOT.'/components/Route.php');
ini_set('display_errors',1);
define("ROOT", dirname(__FILE__));
$uri = new Route();
$uri->run();

echo "1";

echo "2";