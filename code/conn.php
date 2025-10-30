<?php

// Database connection
// $servername = "localhost";
// $username = "u851442254_owlishmind";
// $password = "@w9RZ^By]Dsp";
// $dbname = "u851442254_owlishmind_db";

$servaername = "localhost";
$username = "root";
$password = "root";
$database = "owlishmind_db";

$conn = mysqli_connect($servaername, $username, $password, $database);

if ($conn->connect_error) {
    $response = array('status' => 'error', 'message' => "Database connection failed: " . $conn->connect_error);
}
