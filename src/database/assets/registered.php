<?php

include ("../connection/connection.php");

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    // $hash_password = md5($password); 

    $query = $connection->prepare("SELECT * FROM users WHERE email = ? AND password = ?");
    $query->bind_param("ss", $email, $password);
    $query->execute();
    $result = $query->get_result();

    if(mysqli_num_rows($result) > 0) {
        echo "<script>alert('Login successful!'); window.location.href = '../../../index.php';</script>";
    } else {
        echo "<script>alert('Invalid email or password. Please try again.'); window.location.href = '../../../auth/auth.php';</script>";
    }
}
$connection->close();

?>