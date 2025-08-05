<div class="max-w-4xl mx-auto px-4 py-12">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-8">Your Cart</h2>
    <div class="bg-white rounded-lg shadow overflow-hidden">
        <div class="divide-y divide-gray-200">
            <!-- Cart Items -->
            <?php
            include 'src/database/connection/connection.php';
            include 'includes/products.php';

            $totalPrice = 0;

            $qry = $connection->prepare("SELECT * FROM add_to_cart");
            $qry->execute();
            $result = $qry->get_result();
            
            // if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    // print_r($row['product_id']);
                    if ($result->num_rows == 0) {
                        echo "<script>alert('No products available')</script>";
                    } else {
                        foreach ($data as $key => $value) {
                            if ($value['sku'] == $row['product_id']) {
                                $price = $value['price'] - ($value['price'] / $value['discount']);
                                ?>
                                <div class="flex items-center px-6 py-4">
                                    <img src="pages\product-pages\images\<?php echo $value['category']; ?>\<?php echo $value['sku'] ?>\<?php echo $value['images'][0] ?>"
                                        alt="'.$value['images'][0].'" class="w-20 h-20 rounded object-cover">
                                    <!-- file_exists("/pages/product-pages/images/Electronics/SM_BTHP2024/main.jpg")  -->
                                    <div class="ml-4 flex-1">
                                        <h3 class="text-lg font-semibold text-gray-900">
                                            <?php echo $value['name']; ?>
                                        </h3>
                                        <p class="text-gray-500">
                                            <?php echo $value['color']; ?>
                                        </p>
                                        <div class="flex items-center mt-2">
                                            <button class="px-2 py-1 bg-gray-200 rounded-l hover:bg-gray-300">-</button>
                                            <span class="px-4">1</span>
                                            <button class="px-2 py-1 bg-gray-200 rounded-r hover:bg-gray-300">+</button>
                                        </div>
                                    </div>
                                    <div class="flex flex-col items-end">
                                        <span class="text-lg font-medium text-gray-900">$
                                            <?php echo $price; ?></span>
                                        </span>
                                    <a href="pages/functions.php?id=SM-BTHP2024">
                                        <button class="text-red-500 hover:underline mt-2 text-sm">Remove</button>
                                    </a>    
                                    </div>
                                </div>

                                <?php
                                $totalPrice += $price;
                            }
                        }
                    }
                }
            // }

            ?>
        </div>
    </div>
    <!-- Cart Summary -->
    <div class="px-6 py-4 bg-gray-50 flex justify-between items-center">
        <div>
            <span class="text-gray-700">Subtotal:</span>
            <span class="text-xl font-bold text-gray-900">$<?php echo $totalPrice ?></span>
        </div>
        <a href="#"
            class="bg-indigo-600 text-white px-6 py-2 rounded-md font-semibold hover:bg-indigo-700 transition">Checkout</a>
    </div>
</div>
<a href="./index.php" class="mt-6 inline-block text-indigo-600 hover:underline">&larr; Continue Shopping</a>
</div>