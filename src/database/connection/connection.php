<?php

// echo "Database connection established successfully.";
$connection = new mysqli("localhost", "root", "", "ecommerce_db");
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

?>