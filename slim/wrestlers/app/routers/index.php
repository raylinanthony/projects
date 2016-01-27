<?php 
if(!defined("SLIM_ACTIVE")) die("Access Denied.");

$app->get("/", function() use ($app){
	
	$app->render("home.php", array("data" => $data), 404);
});

$app->run();
?>