<?php

use task2\BuilderRequestSQL;

require_once 'vendor/autoload.php';

$builderRequest = new BuilderRequestSQL();
$requestSQL = $builderRequest->select(["id","name"])
    ->from("users")
    ->orderBy("id")
    ->orderBy("name", )
    ->PrintConsole();

print_r($requestSQL);
