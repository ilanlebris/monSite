<?php

set_include_path("./src");

require_once("Router.php");

session_start();

$router = new Router();
$router->main();
?>