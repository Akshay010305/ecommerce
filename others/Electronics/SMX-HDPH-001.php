<!-- <?php include "../includes/navbar.php" ?> -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | View page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Product Container -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">

            <div class="flex flex-col md:flex-row gap-8">
                <!-- Product Images -->
                <div class=" h-screen w-64 p-4 md:w-1/2">
                    <img id="mainImage" src="../images/Electronics/12345/main.jpg" alt="Wireless Bluetooth Headphones"
                        class="w-full h-auto object-fill aspect-square border border-gray-200 rounded-lg mb-4">
                    <div class="flex gap-3">
                        <img src="../images/Electronics/12345/main.jpg" alt="Headphones thumbnail 1"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/12345/1.jpg" alt="Headphones thumbnail 1"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/12345/2.jpg" alt="Headphones thumbnail 2"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/12345/3.jpg" alt="Headphones thumbnail 2"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                    </div>
                </div>

                <!-- Product Details -->
                <div class="w-full md:w-1/2">
                    <h1 class="text-3xl font-bold text-gray-900 mb-1">Wireless Bluetooth Headphones</h1>
                    <div class="text-gray-600 text-lg mb-4">by <span class="font-semibold">SoundMax</span></div>

                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">
                            ★★★★☆
                            <span class="text-gray-600 text-sm ml-1">4.5</span>
                        </div>
                        <a href="#reviews" class="text-blue-600 ml-3 hover:underline text-sm">234 reviews</a>
                    </div>

                    <!-- Price Section -->
                    <div class="my-5">
                        <span class="text-2xl font-bold text-red-600">$53.99</span>
                        <span class="text-gray-500 line-through ml-2">$59.99</span>
                        <span class="bg-green-100 text-green-800 text-sm font-semibold ml-2 px-2 py-0.5 rounded">10%
                            OFF</span>
                    </div>

                    <div class="text-green-700 font-semibold mb-4">In Stock (120 available)</div>

                    <!-- Delivery Info -->
                    <div class="bg-gray-100 p-4 rounded-lg mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-shipping-fast text-blue-500 mr-2"></i>
                            <span class="font-medium">FREE delivery</span>
                            <span class="text-gray-600 text-sm ml-2">on orders over $50</span>
                        </div>
                        <div class="flex items-center mt-2">
                            <i class="far fa-calendar-alt text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Expected delivery by <span class="font-medium">Friday, July
                                    12</span></span>
                        </div>
                    </div>

                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 mb-8">
                        <button
                            class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition flex-1 flex items-center justify-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                </path>
                            </svg>
                            Add to Cart
                        </button>
                        <button
                            class="bg-yellow-500 hover:bg-yellow-600 text-white px-8 py-3 rounded-lg font-semibold transition flex-1">
                            Buy Now
                        </button>
                    </div>

                    <!-- Key Features -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold border-b border-gray-200 pb-2 mb-4">Key Features</h3>
                        <ul class="space-y-2">
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Bluetooth 5.0 for stable wireless connection</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Active Noise Cancellation for immersive sound</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Built-in microphone for hands-free calls</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>Foldable design for easy portability</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>20-hour battery life for all-day use</span>
                            </li>
                            <li class="flex items-start">
                                <i class="fas fa-check text-green-500 mt-1 mr-2"></i>
                                <span>High-quality audio with deep bass</span>
                            </li>
                        </ul>
                    </div>
                    <!-- About Product -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold border-b border-gray-200 pb-2 mb-4">About this item</h3>
                        <p class="text-gray-700">Experience the ultimate in wireless audio with the SoundMax
                            SMX-HDPH-001 Bluetooth Headphones. Designed for comfort and performance, these headphones
                            feature advanced noise cancellation technology, ensuring you can enjoy your music without
                            distractions. With a sleek, foldable design, they are perfect for on-the-go listening.</p>
                        <p class="text-gray-700 mt-2">Whether you're commuting, working out, or just relaxing at home,
                            these headphones deliver exceptional sound quality and comfort. The long-lasting battery
                            ensures you can enjoy your favorite tracks for hours on end.</p>
                    </div>
                </div>
            </div>

            <!-- Specifications -->
            <div class="mt-10 border-t border-gray-200 pt-8">
                <h3 class="text-2xl font-semibold mb-6">Product Specifications</h3>
                <div class="overflow-x-auto">
                    <table class="w-full border-collapse">
                        <tbody class="divide-y divide-gray-200">
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Brand</td>
                                <td class="p-3 text-gray-900">SoundMax</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Model</td>
                                <td class="p-3 text-gray-900">SMX-HDPH-001</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Color</td>
                                <td class="p-3 text-gray-900">Black</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Dimensions</td>
                                <td class="p-3 text-gray-900">18cm (W) × 20cm (H) × 8cm (D)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Weight</td>
                                <td class="p-3 text-gray-900">250g</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Battery Life</td>
                                <td class="p-3 text-gray-900">Up to 20 hours</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Bluetooth Version</td>
                                <td class="p-3 text-gray-900">5.0</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Warranty</td>
                                <td class="p-3 text-gray-900">1 Year Manufacturer Warranty</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Release Date</td>
                                <td class="p-3 text-gray-900">February 15, 2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelectorAll('.flex img').forEach(img => {
            img.addEventListener('click', function () {
                document.getElementById('mainImage').src = this.src;
            });
        });
    </script>
</body>

</html>