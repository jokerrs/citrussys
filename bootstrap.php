<?php
foreach (file("../.env") as $item) {
    $config = explode("=", $item);
    $_ENV[$config[0]] = trim($config[1]);
}
require_once "vendor/autoload.php";
include "functions.php";
require_once "routes.php";