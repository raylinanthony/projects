<?php 
if(!defined("SLIM_ACTIVE")) die("Access Denied.");

$app->get("wrestler/:id", function($id) use ($app){
	echo "Hello World!";
});
?>