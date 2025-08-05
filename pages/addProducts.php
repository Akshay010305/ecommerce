<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product | Admin Panel</title>
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
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <!-- Header -->
            <div class="bg-primary px-6 py-4 border-b border-gray-200">
                <h1 class="text-2xl font-bold text-white">Add New Product</h1>
                <p class="text-primary-100">Fill in the details below to add a new product</p>
            </div>

            <!-- Form -->
            <form action="addingNewProduct.php" method="POST" enctype="multipart/form-data"
                class="max-h-1/2 p-6 space-y-6">
                <!-- Basic Information Section -->
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-dark border-b pb-2">Basic Information</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Name -->
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Product Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <!-- Brand -->
                        <div>
                            <label for="brand" class="block text-sm font-medium text-gray-700 mb-1">Brand</label>
                            <input type="text" id="brand" name="brand"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <!-- Description -->
                    <div>
                        <label for="description"
                            class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                            
                        <textarea id="description" name="description" rows="3"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                    </div>

                    <!-- About section for product taking input -->
                    <div class="space-y-4 mt-6">
                        <h2 class="text-lg font-semibold text-dark border-b pb-2">About the Product (Min. 500 Words)</h2>
                        <p class="text-gray-600">Provide detailed information about the product, including its features,
                            benefits, and any other relevant details that will help customers make an informed decision.
                        </p>
                        <textarea name="about_product" rows="4"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                        <p class="text-red-600" id="note"><strong>Note: </strong>Ensure the content is at least 500 words for better SEO and customer understanding.</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Category -->
                        <div>
                            <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                            <select id="category" name="category"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <option value="">Select category</option>
                                <option value="Electronics">Electronics</option>
                                <option value="Wearables">Wearables</option>
                                <option value="Home & Kitchen">Home & Kitchen</option>
                                <option value="Footwear">Footwear</option>
                                <option value="Furniture">Furniture</option>
                                <option value="Toys">Toys</option>
                                <option value="Clothing">Clothing</option>
                                <option value="Accessories">Accessories</option>
                                <option value="Bags">Bags</option>
                                <option value="Personal Care">Personal Care</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <!-- SKU -->
                        <div>
                            <label for="sku" class="block text-sm font-medium text-gray-700 mb-1">SKU</label>
                            <input type="text" id="sku" name="sku"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <!-- Color -->
                        <div>
                            <label for="color" class="block text-sm font-medium text-gray-700 mb-1">Color</label>
                            <input type="text" id="color" name="color"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Pricing & Inventory Section -->
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-dark border-b pb-2">Pricing & Inventory</h2>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <!-- Price -->
                        <div>
                            <label for="price" class="block text-sm font-medium text-gray-700 mb-1">Price ($)</label>
                            <input type="number" id="price" name="price" step="0.01"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <!-- Discount -->
                        <div>
                            <label for="discount" class="block text-sm font-medium text-gray-700 mb-1">Discount
                                (%)</label>
                            <input type="number" id="discount" name="discount" min="0" max="100"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <!-- Stock -->
                        <div>
                            <label for="stock" class="block text-sm font-medium text-gray-700 mb-1">Stock
                                Quantity</label>
                            <input type="number" id="stock" name="stock" min="0"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Product Details Section -->
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-dark border-b pb-2">Product Details</h2>

                    <!-- Features -->
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Features (comma separated)</label>
                        <textarea name="features" rows="3" placeholder="Double Wall Insulation, Leak Proof, BPA Free"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary"></textarea>
                    </div>

                    <!-- Dimensions -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                        <div>
                            <label for="width" class="block text-sm font-medium text-gray-700 mb-1">Width</label>
                            <div class="flex">
                                <input type="text" id="width" name="width"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <span
                                    class="flex items-center px-3 bg-gray-100 border border-l-0 rounded-r-md">cm</span>
                            </div>
                        </div>
                        <div>
                            <label for="height" class="block text-sm font-medium text-gray-700 mb-1">Height</label>
                            <div class="flex">
                                <input type="text" id="height" name="height"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <span
                                    class="flex items-center px-3 bg-gray-100 border border-l-0 rounded-r-md">cm</span>
                            </div>
                        </div>
                        <div>
                            <label for="depth" class="block text-sm font-medium text-gray-700 mb-1">Depth</label>
                            <div class="flex">
                                <input type="text" id="depth" name="depth"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <span
                                    class="flex items-center px-3 bg-gray-100 border border-l-0 rounded-r-md">cm</span>
                            </div>
                        </div>
                    </div>

                    <!-- Weight -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="weight" class="block text-sm font-medium text-gray-700 mb-1">Weight</label>
                            <div class="flex">
                                <input type="text" id="weight" name="weight"
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                                <span class="flex items-center px-3 bg-gray-100 border border-l-0 rounded-r-md">g</span>
                            </div>
                        </div>

                        <!-- Warranty -->
                        <div>
                            <label for="warranty" class="block text-sm font-medium text-gray-700 mb-1">Warranty</label>
                            <input type="text" id="warranty" name="warranty"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>
                </div>

                <!-- Media Section -->
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-dark border-b pb-2">Media</h2>
                    <p class="text-red-600 "><strong>Note : </strong>All of your images must be in square shape</p>
                    <!-- Image Uploads -->
                    <div class="space-y-4">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image 1 (Thumbnail)</label>
                            <input type="file" name="thumbnail" accept="image/*"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image 2</label>
                            <input type="file" name="slider_1" accept="image/*"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image 3</label>
                            <input type="file" name="slider_2" accept="image/*"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-1">Image 4</label>
                            <input type="file" name="slider_3" accept="image/*"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm">
                        </div>
                    </div>
                </div>

                <!-- Additional Information -->
                <div class="space-y-4">
                    <h2 class="text-lg font-semibold text-dark border-b pb-2">Additional Information</h2>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <!-- Release Date -->
                        <div>
                            <label for="release_date" class="block text-sm font-medium text-gray-700 mb-1">Release
                                Date</label>
                            <input type="date" id="release_date" name="release_date"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>

                        <!-- Initial Rating -->
                        <div>
                            <label for="rating" class="block text-sm font-medium text-gray-700 mb-1">Initial
                                Rating</label>
                            <input type="number" id="rating" name="rating" min="0" max="5" step="0.1"
                                class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                        </div>
                    </div>

                    <!-- Initial Reviews -->
                    <div>
                        <label for="reviews" class="block text-sm font-medium text-gray-700 mb-1">Initial Reviews
                            Count</label>
                        <input type="number" id="reviews" name="reviews" min="0"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-primary focus:border-primary">
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex justify-end space-x-4 pt-6 border-t border-gray-200">
                    <button type="button" name="cancel"
                        class="px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Cancel
                    </button>
                    <button type="submit" name="add_product"
                        class="px-4 py-2 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-primary hover:bg-secondary focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary">
                        Add Product
                    </button>
                </div>





            </form>
        </div>
    </div>
</body>

</html>