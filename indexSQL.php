<?php

use App\BuilderRequestSQL;

require_once 'vendor/autoload.php';

$builderRequest = new BuilderRequestSQL();
$requestSQL = $builderRequest->select(["id","name"])
    ->from("users")
    ->where("name")
    ->orderBy("id")
    ->groupBy("name")
    ->toSql();

print_r($requestSQL);
