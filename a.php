<?php

// CORS vulnerability
header("Access-Control-Allow-Origin: " . $_SERVER['HTTP_ORIGIN']);

header("Content-Type: application/json");

$user = [
    "name" => "Hamdy",
    "email" => "hamdy@gmail.com"
];

echo json_encode($user);
