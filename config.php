<?php

$host = 'localhost:3307';
$user = "root";
$password = "mysql";
$database = "users_db";

$conn = new mysqli($host, $user, $password, $database);

if($conn->connect_error){ 
    die(json_encode(["status"=>"error", "message" => "Connection failed: ". $conn->connect_error]));
}
?>