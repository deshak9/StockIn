<?php
require_once "../../modal/tp-temp/scssphp-master/scss.inc.php";

use Leafo\ScssPhp\Server;

$directory = "stylesheets";

$server = new Server($directory);
$server->serve();