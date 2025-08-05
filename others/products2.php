<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Premium Leather Jacket - LuxeShop</title>
    <link rel="stylesheet" href="src/style/style.css">

    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#4f46e5',
                        secondary: '#1e293b',
                        accent: '#f59e0b'
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50 font-sans">
    <!-- Navigation -->
    <?php include 'includes/navbar.php'; ?>


    <!-- Product Section -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
            <!-- Product Images -->
            <div class="mb-8 lg:mb-0">
                <!-- Main Image -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden mb-4">
                    <img id="mainImage"
                        src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80"
                        alt="Premium Leather Jacket" class="w-full h-96 object-cover">
                </div>
                <!-- Thumbnail Gallery -->
                <div class="grid grid-cols-4 gap-2">
                    <div
                        class="cursor-pointer border-2 border-transparent hover:border-primary rounded-md overflow-hidden transition duration-300">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80"
                            alt="Leather Jacket Front" class="w-full h-24 object-cover" onclick="changeMainImage(this)">
                    </div>
                    <div
                        class="cursor-pointer border-2 border-transparent hover:border-primary rounded-md overflow-hidden transition duration-300">
                        <img src="https://images.unsplash.com/photo-1551232864-3f0890e580d9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Leather Jacket Side" class="w-full h-24 object-cover" onclick="changeMainImage(this)">
                    </div>
                    <div
                        class="cursor-pointer border-2 border-transparent hover:border-primary rounded-md overflow-hidden transition duration-300">
                        <img src="https://images.unsplash.com/photo-1604644401890-0bd678c83788?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Leather Jacket Back" class="w-full h-24 object-cover" onclick="changeMainImage(this)">
                    </div>
                    <div
                        class="cursor-pointer border-2 border-transparent hover:border-primary rounded-md overflow-hidden transition duration-300">
                        <img src="https://images.unsplash.com/photo-1601924994987-69e26d50dc26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Leather Jacket Detail" class="w-full h-24 object-cover"
                            onclick="changeMainImage(this)">
                    </div>
                </div>
            </div>

            <!-- Product Details -->
            <div>
                <h1 class="text-3xl font-bold text-gray-900 mb-2">Premium Leather Jacket</h1>
                <div class="flex items-center mb-4">
                    <div class="flex text-yellow-400 mr-2">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span class="text-gray-600">4.7 (128 reviews)</span>
                    <span class="mx-2 text-gray-300">|</span>
                    <span class="text-green-600 font-medium">In Stock</span>
                </div>

                <div class="mb-6">
                    <span class="text-3xl font-bold text-gray-900">$249.99</span>
                    <span class="ml-2 text-lg text-gray-500 line-through">$299.99</span>
                    <span class="ml-2 bg-red-100 text-red-800 text-sm font-semibold px-2 py-1 rounded">17% OFF</span>
                </div>

                <div class="mb-6">
                    <p class="text-gray-700">
                        Crafted from premium full-grain leather, this jacket offers exceptional durability and a rich
                        patina that improves with age. Featuring a classic biker design with asymmetrical zipper and
                        multiple pockets.
                    </p>
                </div>

                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Color</h3>
                    <div class="flex space-x-2">
                        <button
                            class="w-10 h-10 rounded-full bg-gray-900 border-2 border-primary focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"></button>
                        <button
                            class="w-10 h-10 rounded-full bg-brown-800 border-2 border-transparent hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"
                            style="background-color: #5c4033;"></button>
                        <button
                            class="w-10 h-10 rounded-full bg-gray-400 border-2 border-transparent hover:border-gray-300 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2"></button>
                    </div>
                </div>

                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Size</h3>
                    <div class="grid grid-cols-5 gap-2">
                        <button
                            class="px-4 py-2 border rounded-md text-center font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">XS</button>
                        <button
                            class="px-4 py-2 border rounded-md text-center font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">S</button>
                        <button
                            class="px-4 py-2 border rounded-md text-center font-medium bg-primary text-white border-primary">M</button>
                        <button
                            class="px-4 py-2 border rounded-md text-center font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">L</button>
                        <button
                            class="px-4 py-2 border rounded-md text-center font-medium hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2">XL</button>
                    </div>
                    <a href="#" class="mt-2 text-sm text-primary hover:underline">Size Guide</a>
                </div>

                <div class="mb-6">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Quantity</h3>
                    <div class="flex items-center">
                        <button
                            class="w-10 h-10 rounded-l-md border border-gray-300 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-primary">
                            <i class="fas fa-minus"></i>
                        </button>
                        <input type="text" value="1"
                            class="w-16 h-10 border-t border-b border-gray-300 text-center font-medium focus:outline-none focus:ring-1 focus:ring-primary">
                        <button
                            class="w-10 h-10 rounded-r-md border border-gray-300 bg-gray-100 text-gray-600 hover:bg-gray-200 focus:outline-none focus:ring-1 focus:ring-primary">
                            <i class="fas fa-plus"></i>
                        </button>
                    </div>
                </div>

                <div class="flex space-x-4 mb-8">
                    <button
                        class="flex-1 bg-primary text-white py-3 px-6 rounded-md font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition duration-300">
                        Add to Cart
                    </button>
                    <button
                        class="flex-1 bg-white text-primary py-3 px-6 rounded-md font-medium border border-primary hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition duration-300">
                        Buy Now
                    </button>
                </div>

                <div class="border-t border-gray-200 pt-4">
                    <h3 class="text-sm font-medium text-gray-900 mb-2">Delivery Options</h3>
                    <div class="flex items-center justify-between mb-2">
                        <div class="flex items-center">
                            <i class="fas fa-truck text-gray-500 mr-2"></i>
                            <span class="text-gray-700">Free Shipping</span>
                        </div>
                        <span class="text-gray-700">3-5 business days</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <i class="fas fa-bolt text-gray-500 mr-2"></i>
                            <span class="text-gray-700">Express Shipping</span>
                        </div>
                        <span class="text-gray-700">$9.99 - 1-2 business days</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Tabs -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        <div class="border-b border-gray-200">
            <nav class="-mb-px flex space-x-8">
                <button class="border-b-2 border-primary text-primary whitespace-nowrap py-4 px-1 text-sm font-medium">
                    Description
                </button>
                <button
                    class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">
                    Specifications
                </button>
                <button
                    class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">
                    Reviews (128)
                </button>
                <button
                    class="border-b-2 border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 text-sm font-medium">
                    Shipping & Returns
                </button>
            </nav>
        </div>

        <div class="py-8">
            <h3 class="text-lg font-medium text-gray-900 mb-4">Product Description</h3>
            <div class="prose prose-sm text-gray-500 max-w-none">
                <p>
                    Our Premium Leather Jacket is handcrafted from the finest full-grain leather, offering exceptional
                    durability and a rich, natural appearance that develops a beautiful patina over time. The jacket
                    features:
                </p>
                <ul class="list-disc pl-5 mt-4 space-y-2">
                    <li>Asymmetrical front zipper closure</li>
                    <li>Multiple functional pockets (2 external, 1 internal)</li>
                    <li>Adjustable waist belt for a customized fit</li>
                    <li>Soft viscose lining for comfort</li>
                    <li>Zippered cuffs for adjustable sleeve tightness</li>
                    <li>Classic biker-style stand collar</li>
                </ul>
                <p class="mt-4">
                    The jacket is designed for both style and functionality, making it perfect for motorcycle riding or
                    everyday wear. The leather is treated to be water-resistant while remaining breathable.
                </p>
            </div>

            <div class="mt-8 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-full mr-3">
                            <i class="fas fa-ruler text-primary"></i>
                        </div>
                        <h4 class="font-medium text-gray-900">Fit & Sizing</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        True to size. We recommend ordering your usual size for a standard fit. For a tighter fit,
                        consider sizing down.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-full mr-3">
                            <i class="fas fa-leaf text-primary"></i>
                        </div>
                        <h4 class="font-medium text-gray-900">Materials</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        100% premium full-grain cowhide leather. Lining: 100% viscose. All hardware is rust-resistant
                        metal.
                    </p>
                </div>
                <div class="bg-white p-4 rounded-lg shadow-sm border border-gray-200">
                    <div class="flex items-center mb-2">
                        <div class="bg-primary bg-opacity-10 p-2 rounded-full mr-3">
                            <i class="fas fa-medal text-primary"></i>
                        </div>
                        <h4 class="font-medium text-gray-900">Quality Guarantee</h4>
                    </div>
                    <p class="text-sm text-gray-600">
                        Handcrafted with attention to detail. Backed by our 2-year craftsmanship warranty against
                        defects.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Related Products -->
    <div class="bg-gray-50 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-2xl font-bold text-gray-900 mb-8">You May Also Like</h2>
            <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Product 1 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://images.unsplash.com/photo-1591047139829-d91aecb6caea?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=736&q=80"
                            alt="Leather Jacket" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Premium Leather Jacket
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$249.99</p>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1259&q=80"
                            alt="Men's T-Shirt" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Premium T-Shirt
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$29.99</p>
                    </div>
                </div>

                <!-- Product 3 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://images.unsplash.com/photo-1601924994987-69e26d50dc26?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
                            alt="Leather Gloves" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Leather Driving Gloves
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Brown</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$49.99</p>
                    </div>
                </div>

                <!-- Product 4 -->
                <div class="group relative bg-white p-4 rounded-lg shadow-sm hover:shadow-md transition duration-300">
                    <div
                        class="w-full min-h-80 bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                        <img src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=687&q=80"
                            alt="Leather Belt" class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                    </div>
                    <div class="mt-4 flex justify-between">
                        <div>
                            <h3 class="text-sm text-gray-700">
                                <a href="#">
                                    <span aria-hidden="true" class="absolute inset-0"></span>
                                    Genuine Leather Belt
                                </a>
                            </h3>
                            <p class="mt-1 text-sm text-gray-500">Black</p>
                        </div>
                        <p class="text-sm font-medium text-gray-900">$39.99</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>