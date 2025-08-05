<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'home';
$allowed_pages = ['home', 'about', 'contact','products',  'categories', 'cart', 'auth/auth' , 'auth/signup','auth/adminOnly'];

if (in_array( $page, $allowed_pages)) {
    include("pages/$page.php");
} else {
    include("pages/404.php");
}
?>