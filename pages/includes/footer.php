<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuxeShop - Premium E-commerce</title>
    <link rel="stylesheet" href="src/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body class="bg-gray-50 font-sans">



    <!-- Footer -->
    <footer class="bg-gray-900">
        <div class="mx-auto max-w-[1330px] py-12 px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Shop</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=products" : "?page=products"?>" class="text-base text-gray-300 hover:text-white">All Products</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=products" : "?page=products"?>" class="text-base text-gray-300 hover:text-white">New Arrivals</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=home#featured" : "#featured"?>" class="text-base text-gray-300 hover:text-white">Featured Products</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Customer Service</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=contact#faq" : "?page=contact#faq"?>" class="text-base text-gray-300 hover:text-white">Shipping Policy</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=contact#faq" : "?page=contact#faq"?>" class="text-base text-gray-300 hover:text-white">Returns & Exchanges</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=contact#faq" : "?page=contact#faq"?>" class="text-base text-gray-300 hover:text-white">FAQ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Company</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=about#team" : "?page=about#team"?>" class="text-base text-gray-300 hover:text-white">About Us</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=about#blog" : "?page=about#blog"?>" class="text-base text-gray-300 hover:text-white">Blog</a></li>
                        <li><a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=contact#store" : "?page=contact#store"?>" class="text-base text-gray-300 hover:text-white">Stores</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Connect</h3>
                    <ul class="mt-4 space-y-4">
                        <li><a href="https://www.facebook.com/" target="_blank" class="text-base text-gray-300 hover:text-white">Facebook</a></li>
                        <li><a href="https://www.instagram.com/" target="_blank" class="text-base text-gray-300 hover:text-white">Instagram</a></li>
                        <li><a href="https://www.pinterest.com/" target="_blank" class="text-base text-gray-300 hover:text-white">Pinterest</a></li>
                    </ul>
                </div>
            </div>
            <div class="mt-8 border-t border-gray-800 pt-8 md:flex md:items-center md:justify-between">
                <div class="flex space-x-6 md:order-2">
                    <a href="https://www.facebook.com/" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Facebook</span>
                        <i class="fab fa-facebook-f text-lg"></i>
                    </a>
                    <a href="https://www.instagram.com/" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Instagram</span>
                        <i class="fab fa-instagram text-lg"></i>
                    </a>
                    <a href="https://www.pinterest.com/" target="_blank" class="text-gray-400 hover:text-gray-300">
                        <span class="sr-only">Pinterest</span>
                        <i class="fab fa-pinterest text-lg"></i>
                    </a>
                </div>
                <p class="mt-8 text-base text-gray-400 md:mt-0 md:order-1">
                    &copy; 2023 LuxeShop. All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>

</html>