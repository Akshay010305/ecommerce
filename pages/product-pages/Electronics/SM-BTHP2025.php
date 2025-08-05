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
    <!-- <?php include("../../includes/navbar.php") ?> -->

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Product Container -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Product Images -->
                <div class="h-screen w-full md:w-1/2">
                    <img id="mainImage"
                        src="../images/Electronics/SM-BTHP2024/Gemini_Generated_Image_pjfkvapjfkvapjfk.png"
                        alt="Wireless Bluetooth Headphones"
                        class="w-full h-fit object-stretch aspect-square border border-gray-200 rounded-lg mb-4">
                    <div class="flex gap-3 w-full overflow-x-auto   ">
                        <img src="../images/Electronics/SM-BTHP2024/Gemini_Generated_Image_pjfkvapjfkvapjfk.png"
                            alt="Headphones thumbnail 1"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/SM-BTHP2024/Gemini_Generated_Image_jcao9fjcao9fjcao.png"
                            alt="Headphones thumbnail 1"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/SM-BTHP2024/Gemini_Generated_Image_q42y6cq42y6cq42y.png"
                            alt="Headphones thumbnail 2"
                            class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/Electronics/SM-BTHP2024/main.jpg" alt="Headphones thumbnail 2"
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
                        <a href="#reviews" class="text-blue-600 ml-3 hover:underline text-sm">59</a>
                    </div>

                    <p class="text-gray-700 mb-6">Experience studio-grade sound with wide frequency response
                        (20Hz–40kHz) and LDAC codec support for lossless audio streaming.</p>


                    <!-- Price Section -->
                    <div class="my-5">
                        <span class="text-2xl font-bold text-red-600">$114</span>
                        <span class="text-gray-500 line-through ml-2">$120</span>
                        <span class="bg-green-100 text-green-800 text-sm font-semibold ml-2 px-2 py-0.5 rounded">20%
                            OFF</span>
                    </div>

                    <div class="text-green-700 font-semibold mb-4">In Stock (46 available)</div>

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
                        <form method="post" action="../../../pages/functions.php" class="flex gap-3">
                            <button
                                class="w-[400px] bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition flex-1 flex items-center justify-center"
                                value="SM-BTHP2024" name="addToCart">
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

                        </form>
                    </div>

                    <!-- Key Features -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold border-b border-gray-200 pb-2 mb-4">Key Features</h3>
                        <ul class='list-disc pl-5 space-y-2'>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>40mm dynamic drivers for rich</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span> balanced sound.
                                    Custom EQ modes via the SoundMax app (Bass Boost</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span> Vocal Enhancer</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span> Gaming Mode).</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Active Noise Cancellation (ANC)</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Blocks 95% of ambient noise for immersive listening.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Transparency Mode lets you hear surroundings without removing headphones.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Memory foam ear cushions and adjustable headband for fatigue-free wear.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Lightweight design (265g) ideal for long sessions.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    30-Hour Battery Life</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Fast charging: 10 mins = 3 hours playback.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    USB-C and Qi wireless charging compatible.</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Built-in AI Microphone</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Noise-reducing mic for clear calls and voice assistant support (Siri/Google).</span>
                            </li>
                            <li class='flex items-start'>
                                <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
                                <span>
                                    Durable & Travel-Friendly.</span>
                            </li>
                        </ul><br />
                    </div>
                    <!-- About Product -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold border-b border-gray-200 pb-2 mb-4">About this item</h3>
                        <p class="text-gray-700 text-justify">The SoundMax Wireless Bluetooth Headphones redefine your
                            audio experience with cutting-edge technology, superior comfort, and immersive sound
                            quality. Designed for music lovers, gamers, and professionals, these headphones deliver
                            crystal-clear audio, seamless connectivity, and long-lasting battery life. Whether you're
                            commuting, working out, or relaxing at home, SoundMax ensures an unparalleled listening
                            experience.</p>
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
                                <td class="p-3 text-gray-900">SM-BTHP2024</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Color</td>
                                <td class="p-3 text-gray-900">Black</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Dimensions</td>
                                <td class="p-3 text-gray-900">5cm(W)×7cm(H)×2cm(D)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Weight</td>
                                <td class="p-3 text-gray-900">70g</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Warranty</td>
                                <td class="p-3 text-gray-900">2 years Manufacturer Warranty</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Release Date</td>
                                <td class="p-3 text-gray-900">2025-07-31</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <?php include '../../includes/footer.php'?>

    <script>
        document.querySelectorAll(".flex img").forEach(img => {
            img.addEventListener("click", function () {
                document.getElementById("mainImage").src = this.src;
            });
        });
    </script>
</body>

</html>