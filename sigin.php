<?php
header("Content-Type: application/json");

$data = json_decode(file_get_contents("php://input"), true);

$username = $data["username"];
$password = $data["password"];
$email    = $data["email"];

$file = "users.json";
$users = json_decode(file_get_contents($file), true);

// cek username
foreach ($users as $user) {
    if ($user["username"] === $username) {
        echo json_encode(["message" => "Username sudah terdaftar"]);
        exit;
    }
}

// simpan user
$users[] = [
    "username" => $username,
    "password" => $password,
    "email"    => $email
];

file_put_contents($file, json_encode($users, JSON_PRETTY_PRINT));

echo json_encode(["message" => "Registrasi berhasil"]);
