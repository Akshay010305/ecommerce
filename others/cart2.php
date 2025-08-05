<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart - LuxeShop</title>
    <link rel="stylesheet" href="src/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="bg-gray-50 font-sans">
    <!-- Navigation (copy from index.html for consistency) -->
    <?php include 'includes/navbar.php'; ?>


    <!-- Cart Section -->
    <div class="max-w-4xl mx-auto px-4 py-12">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Your Cart</h2>
        <div class="bg-white rounded-lg shadow overflow-hidden">
            <div class="divide-y divide-gray-200">
                <!-- Cart Item 1 -->
                <div class="flex items-center px-6 py-4">
                    <img src="https://images.unsplash.com/photo-1529374255404-311a2a4f1fd9?auto=format&fit=crop&w=1259&q=80" alt="Premium T-Shirt" class="w-20 h-20 rounded object-cover">
                    <div class="ml-4 flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Premium T-Shirt</h3>
                        <p class="text-gray-500">Black</p>
                        <div class="flex items-center mt-2">
                            <button class="px-2 py-1 bg-gray-200 rounded-l hover:bg-gray-300">-</button>
                            <span class="px-4">1</span>
                            <button class="px-2 py-1 bg-gray-200 rounded-r hover:bg-gray-300">+</button>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="text-lg font-medium text-gray-900">$29</span>
                        <button class="text-red-500 hover:underline mt-2 text-sm">Remove</button>
                    </div>
                </div>
                <!-- Cart Item 2 -->
                <div class="flex items-center px-6 py-4">
                    <img src="https://images.unsplash.com/photo-1543076447-215ad9ba6923?auto=format&fit=crop&w=1074&q=80" alt="Summer Dress" class="w-20 h-20 rounded object-cover">
                    <div class="ml-4 flex-1">
                        <h3 class="text-lg font-semibold text-gray-900">Summer Dress</h3>
                        <p class="text-gray-500">White</p>
                        <div class="flex items-center mt-2">
                            <button class="px-2 py-1 bg-gray-200 rounded-l hover:bg-gray-300">-</button>
                            <span class="px-4">1</span>
                            <button class="px-2 py-1 bg-gray-200 rounded-r hover:bg-gray-300">+</button>
                        </div>
                    </div>
                    <div class="flex flex-col items-end">
                        <span class="text-lg font-medium text-gray-900">$49</span>
                        <button class="text-red-500 hover:underline mt-2 text-sm">Remove</button>
                    </div>
                </div>
            </div>
            <!-- Cart Summary -->
            <div class="px-6 py-4 bg-gray-50 flex justify-between items-center">
                <div>
                    <span class="text-gray-700">Subtotal:</span>
                    <span class="text-xl font-bold text-gray-900">$78</span>
                </div>
                <a href="#" class="bg-indigo-600 text-white px-6 py-2 rounded-md font-semibold hover:bg-indigo-700 transition">Checkout</a>
            </div>
        </div>
        <a href="./index.php" class="mt-6 inline-block text-indigo-600 hover:underline">&larr; Continue Shopping</a>
    </div>
</body>
</html>