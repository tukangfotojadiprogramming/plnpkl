<?php
session_start();
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"];
$password = $data["password"];

$users = json_decode(file_get_contents("users.json"), true);

foreach ($users as $user) {
    if ($user["username"] === $username && $user["password"] === $password) {
        $_SESSION["user"] = $user["username"];
        echo json_encode(["status" => "success"]);
        exit;
    }
}

echo json_encode(["status" => "failed"]);
