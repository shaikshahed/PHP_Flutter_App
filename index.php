<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header("Content-Type: application/json");

$items = [
    ["id" => 1, "name" => "Flutter", "type" => "Framework"],
    ["id" => 2, "name" => "PHP", "type" => "Backend"],
    ["id" => 3, "name" => "REST API", "type" => "Architecture"]
];

echo json_encode([
    "status" => "success",
    "items" => $items
]);
