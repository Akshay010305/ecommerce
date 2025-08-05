<?php
include '../src/database/connection/connection.php';


if (isset($_REQUEST['id'])) {

    $qry = $connection->prepare("DELETE FROM add_to_cart WHERE product_id = ?");
    $qry->bind_param("s", $_REQUEST['id']);
    $qry->execute();    



    header("Location: ../index.php?page=cart");
}


?>