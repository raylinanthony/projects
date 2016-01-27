<?php 
include("app/vendor/Slim/Slim.php");

\Slim\Slim::registerAutoloader();

define("SLIM_ACTIVE", true);

$app = new Slim\Slim();

include("app/views/header.php");
include("app/routers.php");
include("app/views/footer.php");
?>