<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checkout | Billing</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3B82F6',
                        secondary: '#1E40AF',
                        accent: '#10B981',
                        dark: '#1F2937',
                        light: '#F9FAFB',
                    }
                }
            }
        }
    </script>
</head>

<body class="bg-gray-50">
    <div class="container mx-auto px-4 py-8 max-w-4xl">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-dark">Checkout</h1> 
        </div>

        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Header -->
            <div class="bg-primary px-6 py-4 border-b border-gray-200">
                <h2 class="text-xl font-bold text-white">Billing Information</h2>
                <p class="text-primary-100">Enter your payment details to complete your order</p>
            </div>

            <!-- Main Content -->
            <div class="p-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <!-- Left Column - Billing Form -->
                    <div>
                        <h3 class="text-lg font-semibold text-dark mb-4">Payment Details</h3>
                        
                        <!-- Card Information -->
                        <div class="space-y-4">
                            <div>
                                <label for="card-number" class="block text-sm font-medium text-gray-700 mb-1">Card Number</label>
                                <input type="text" id="card-number" placeholder="1234 5678 9012 3456"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="expiry-date" class="block text-sm font-medium text-gray-700 mb-1">Expiry Date</label>
                                    <input type="text" id="expiry-date" placeholder="MM/YY"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                </div>
                                <div>
                                    <label for="cvv" class="block text-sm font-medium text-gray-700 mb-1">CVV</label>
                                    <input type="text" id="cvv" placeholder="123"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                </div>
                            </div>
                            
                            <div>
                                <label for="card-name" class="block text-sm font-medium text-gray-700 mb-1">Name on Card</label>
                                <input type="text" id="card-name" placeholder="John Doe"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                            </div>
                        </div>

                        <h3 class="text-lg font-semibold text-dark mt-8 mb-4">Billing Address</h3>
                        
                        <!-- Billing Address -->
                        <div class="space-y-4">
                            <div>
                                <label for="address" class="block text-sm font-medium text-gray-700 mb-1">Street Address</label>
                                <input type="text" id="address" placeholder="123 Main St"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                            </div>
                            
                            <div>
                                <label for="address2" class="block text-sm font-medium text-gray-700 mb-1">Apt, Suite, etc. (Optional)</label>
                                <input type="text" id="address2" placeholder="Apt 4B"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                            </div>
                            
                            <div class="grid grid-cols-2 gap-4">
                                <div>
                                    <label for="city" class="block text-sm font-medium text-gray-700 mb-1">City</label>
                                    <input type="text" id="city" placeholder="New York"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                </div>
                                <div>
                                    <label for="zip" class="block text-sm font-medium text-gray-700 mb-1">ZIP Code</label>
                                    <input type="text" id="zip" placeholder="10001"
                                        class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                </div>
                            </div>
                            
                            <div>
                                <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Country</label>
                                <select id="country"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                    <option>United States</option>
                                    <option>Canada</option>
                                    <option>United Kingdom</option>
                                    <option>Australia</option>
                                    <option>Other</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <!-- Right Column - Order Summary -->
                    <div class="border-l border-gray-200 pl-6">
                        <h3 class="text-lg font-semibold text-dark mb-4">Order Summary</h3>
                        
                        <!-- Products List -->
                        <div class="space-y-4 mb-6">
                            <div class="flex justify-between items-center border-b pb-4">
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                                        <img src="https://via.placeholder.com/64" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-dark">Premium Headphones</h4>
                                        <p class="text-sm text-gray-500">Color: Black</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">$199.99</p>
                                    <p class="text-sm text-gray-500">Qty: 1</p>
                                </div>
                            </div>
                            
                            <div class="flex justify-between items-center border-b pb-4">
                                <div class="flex items-center space-x-4">
                                    <div class="w-16 h-16 bg-gray-200 rounded-md overflow-hidden">
                                        <img src="https://via.placeholder.com/64" alt="Product" class="w-full h-full object-cover">
                                    </div>
                                    <div>
                                        <h4 class="font-medium text-dark">Wireless Charger</h4>
                                        <p class="text-sm text-gray-500">Color: White</p>
                                    </div>
                                </div>
                                <div class="text-right">
                                    <p class="font-medium">$29.99</p>
                                    <p class="text-sm text-gray-500">Qty: 2</p>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Order Totals -->
                        <div class="space-y-3 mb-6">
                            <div class="flex justify-between">
                                <span class="text-gray-600">Subtotal</span>
                                <span>$259.97</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Shipping</span>
                                <span>$9.99</span>
                            </div>
                            <div class="flex justify-between">
                                <span class="text-gray-600">Tax</span>
                                <span>$20.80</span>
                            </div>
                            <div class="flex justify-between font-bold text-lg pt-2 border-t border-gray-200">
                                <span>Total</span>
                                <span>$290.76</span>
                            </div>
                        </div>
                        
                        <!-- Promo Code -->
                        <div class="mb-6">
                            <label for="promo-code" class="block text-sm font-medium text-gray-700 mb-1">Promo Code</label>
                            <div class="flex">
                                <input type="text" id="promo-code" placeholder="Enter code"
                                    class="flex-1 px-3 py-2 border border-gray-300 rounded-l-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <button type="button"
                                    class="px-4 py-2 bg-gray-200 text-gray-700 rounded-r-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-primary">
                                    Apply
                                </button>
                            </div>
                        </div>
                        
                        <!-- Payment Methods -->
                        <div class="mb-6">
                            <h4 class="text-sm font-medium text-gray-700 mb-2">Payment Methods</h4>
                            <div class="flex space-x-4">
                                <div class="w-12 h-8 bg-gray-200 rounded-md flex items-center justify-center">
                                    <span class="text-xs font-bold">VISA</span>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded-md flex items-center justify-center">
                                    <span class="text-xs font-bold">MC</span>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded-md flex items-center justify-center">
                                    <span class="text-xs font-bold">AMEX</span>
                                </div>
                                <div class="w-12 h-8 bg-gray-200 rounded-md flex items-center justify-center">
                                    <span class="text-xs">PP</span>
                                </div>
                            </div>
                        </div>
                        
                        <!-- Secure Checkout -->
                        <div class="flex items-center text-sm text-gray-500 mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                            </svg>
                            Secure SSL Encryption
                        </div>
                        
                        <!-- Complete Order Button -->
                        <button type="button"
                            class="w-full px-4 py-3 border border-transparent rounded-md shadow-sm text-lg font-medium text-white bg-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                            Complete Order
                        </button>
                        
                        <!-- Return Policy -->
                        <p class="text-xs text-gray-500 mt-4">
                            By placing your order, you agree to our <a href="#" class="text-primary hover:underline">Terms of Service</a> and <a href="#" class="text-primary hover:underline">Privacy Policy</a>. All sales are final - see our <a href="#" class="text-primary hover:underline">return policy</a> for details.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>