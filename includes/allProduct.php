<?php include './includes/products.php';
        if($data === null || empty($data)) 
            {
                    echo "<p class='text-red-500'>No products available</p>";
                } else {
                    foreach ($data as $key => $value) {
                    echo '
            <div class="group relative" data-aos="fade-right">
                <div
                    class="w-fit h-fit  bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="../pages/product-pages/images/' . $value['category'] . '/' .$value['sku']. '/' . 'main' . '.jpg' . '" alt="' . $value['name'] . '"
                        class="w-full h-full object-center object-cover lg:w-full lg:h-full">
                </div>
                <div class="mt-4 flex justify-between h-24">
                    <div>
                        <h3 class="text-xl text-gray-900">
                            <a href="./pages/product-pages/' . $value['category'] . '/' . $value['sku'] . '.php">
                                <span aria-hidden="true" style="width: 90%" class="absolute inset-0"></span>
                                ' . $value['name'] . '
                            </a>
                        </h3>
                        <p class="absolute bottom-14 text-sm text-gray-500">' . $value['color'] . '</p>
                    </div>
                    <div class="flex flex-col items-end">
                        <p class="text-lg font-medium text-gray-900">$' . round(($value['price']-($value['price']/$value['discount'])), 2) . '</p>
                        <p class="text-sm font-medium text-gray-500 line-through">$' .  $value['price'] . '</p>
                    </div>
                </div>
                <div class="mt-2">
                    <button
                        class="text-xl w-full bg-indigo-600 text-white py-2 px-4 rounded-md hover:bg-indigo-700 transition duration-300">
                        Add to Cart
                    </button>
                </div>
            </div>';
                }
            }
            


    ?>