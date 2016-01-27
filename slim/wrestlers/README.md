[Go to Projects] (../../README.md)

# Slim Practices

Hello!, thank you for to visit this project.

This project consists in a **CRUD** practice on using RESTful API with **"Slim Framework"** .

Feel free to view the source code and I'm open to advice, improvements, and other things that can make me.

Thanks for your time :)

## A preview of code...

```sh
<?php 
/*
* @author Raylin Aquino <raylinaquino@gmail.com>
* @version 1.0
*/

include("app/vendor/Slim/Slim.php");

\Slim\Slim::registerAutoloader();

define("SLIM_ACTIVE", true);

$app = new Slim\Slim();

include("app/views/header.php");
include("app/routers.php");
include("app/views/footer.php");
?>
...sh
