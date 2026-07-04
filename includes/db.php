<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "fnv_website";

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Database verbinding mislukt: " . $conn->connect_error);
}