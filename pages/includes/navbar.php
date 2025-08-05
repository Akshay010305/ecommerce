<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>

<body style="padding-top: 65px !important;">

    <!-- Navigation -->

    <nav class="bg-white shadow-lg fixed w-full top-0 z-50">
        <div class="mx-auto max-w-[1330px]">
            <div class="flex justify-between">
                <div class="flex space-x-7">
                    <!-- Logo -->
                    <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/index") ? "?page=home" : "../../../index.php?page=home" ?>">
                        <div class="flex items-center py-4 px-2">
                        <span class="font-semibold text-gray-900 text-2xl">Luxe<span
                                class="text-indigo-600">Shop</span></span>
                    </div>
                    </a>
                    <!-- Primary Nav -->
                    <div class="text-lg hidden md:flex items-center space-x-1">
                        <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=home" : "?page=home"?>"
                            class="navItems py-4 px-2 font-semibold hover:text-indigo-600 transition duration-300 text-gray-500 border-b-4 border-indigo-600">Home</a>
                        <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=products" : "?page=products"?>"
                            class="navItems py-4 px-2 text-gray-500 font-semibold hover:text-indigo-600 transition duration-300">Products</a>
                        <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=categories" : "?page=categories"?>"
                            class="navItems py-4 px-2 text-gray-500 font-semibold hover:text-indigo-600 transition duration-300">Categories</a>
                        <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=about" : "?page=about"?>"
                            class="navItems py-4 px-2 text-gray-500 font-semibold hover:text-indigo-600 transition duration-300">About</a>
                        <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=contact" : "?page=contact"?>"
                            class="navItems py-4 px-2 text-gray-500 font-semibold hover:text-indigo-600 transition duration-300">Contact</a>
                    </div>
                </div>
                <!-- Secondary Nav -->
                <div class="hidden md:flex items-center  w-full justify-end space-x-3">
                    <label for="search" class="w-full justify-end flex items-center py-2 px-2 text-gray-500 transition duration-300">
                        <input id="search" type="text" class="mx-5 px-2 text-sm rounded-2xl border-2 h-[30px] w-[100px] transition-all duration-500 focus:w-full focus:border-indigo-600"><i class="fas fa-search text-lg"></i>
                    </label>
                    <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=cart" : "?page=cart"?>"
                        class="navItems py-2 px-2 text-gray-500 hover:text-indigo-600 transition duration-300 relative">
                        <i class="fas fa-shopping-cart text-lg"></i>
                        <span
                            class="absolute -top-1 -right-1 bg-indigo-600 text-white text-xs px-1 rounded-full">
                        
                        </span>
                    </a>
                    <a href="<?php echo str_contains($_SERVER['PHP_SELF'], "/ecommerce 2/pages/product-pages/") ? "../../../index.php?page=auth/auth" : "?page=auth/auth"?>"
                        class="navItems py-2 px-2 text-gray-500 hover:text-indigo-600 transition duration-300">
                        <i class="fas fa-user text-lg"></i>
                    </a>
                </div>
                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button class="outline-none mobile-menu-button">
                        <svg class="w-6 h-6 text-gray-500 hover:text-indigo-600" fill="none" stroke-linecap="round"
                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                            <path d="M4 6h16M4 12h16M4 18h16"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <!-- Mobile Menu -->
        <div class="text-lg hidden mobile-menu">
            <ul class="">
                <li class="active"><a href="?page=home"
                        class="block text-sm px-2 py-4 hover:text-white hover:bg-indigo-600 font-semibold">Home</a></li>
                <li><a href="?page=products"
                        class="block text-sm px-2 py-4 bg-indigo-600 text-white transition duration-300">Products</a>
                </li>
                <li><a href="?page=categories"
                        class="block text-sm px-2 py-4 hover:bg-indigo-600 hover:text-white transition duration-300">Categories</a>
                </li>
                <li><a href="?page=about"
                        class="block text-sm px-2 py-4 hover:bg-indigo-600 hover:text-white transition duration-300">About</a>
                </li>
                <li><a href="?page=contact"
                        class="block text-sm px-2 py-4 hover:bg-indigo-600 hover:text-white transition duration-300">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- <?php echo $_SERVER['PHP_SELF']?> -->

    <script src=<?php echo file_exists("../../../src/js/main.js") ? "../../../src/js/main.js" : "src/js/main.js"?>></script>
    <script>


        // Highlight active nav item
        // navItems.forEach(item => {
        //     item.addEventListener('click', function () {
        //         navItems.forEach(nav => nav.classList.remove('text-indigo-600', 'border-b-4', 'border-indigo-600'));
        //         this.classList.add('text-indigo-600', 'border-b-4', 'border-indigo-600');
        //     });
        // });

        

        // Mobile menu toggle
        // const mobileMenuButton = document.querySelector('.mobile-menu-button');
        // // const mobileMenu = document.querySelector('.mobile-menu');
        // mobileMenuButton.addEventListener('click', () => {
        //     mobileMenu.classList.toggle('hidden');
        // });
        // // Close mobile menu when clicking outside
        // document.addEventListener('click', (event) => {
        //     if (!mobileMenu.contains(event.target) && !mobileMenuButton.contains(event.target)) {
        //         mobileMenu.classList.add('hidden');
        //     }
        // });


    </script>


</body>

</html>