<?php


include '../src/database/connection/connection.php';



if (isset($_REQUEST['id'])) {
    session_start();
    $query = $connection->prepare("INSERT INTO add_to_cart (product_id) VALUES (?)");
    $query->bind_param("s", $_REQUEST['id']);
    $query->execute();
    
    $query = $connection->prepare("SELECT * FROM add_to_cart");
    $query->execute();
    $result = $query->get_result();

    header("Refresh:.05; url=../index.php?page=cart");
}




?>