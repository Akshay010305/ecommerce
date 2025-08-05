<?php

include("../connection/connection.php");

session_start();
$_SESSION['isLoggedIn'] = false;

if (isset($_POST["submit"])) {

    $_SESSION['isLoggedIn'] = true;


    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = $connection->prepare("SELECT * FROM users WHERE email = ?");
    $query->bind_param("s", $email);
    $query->execute();
    $result = $query->get_result();

    if (mysqli_num_rows($result) > 0) {
        echo "<script>alert('Email already exists. Please use a different email.');</script>";
    } else {
        $insert_query = $connection->prepare("INSERT INTO users (name, email, password) VALUES (?, ?, ?)");
        $insert_query->bind_param("sss", $name, $email, $password);

        if ($insert_query->execute()) {
            echo "<script>alert('Registration successful! You can now log in.')</script>";
            header("Refresh:.5; url=../../../index.php?page=auth/auth");
        } else {
            echo "<script>alert('Error during registration. Please try again later.');</script>";
            header("Refresh:.5; url=../../../index.php?page=auth/signup");
        }
    }


}





$connection->close();



?>