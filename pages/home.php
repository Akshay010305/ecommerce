<link rel="stylesheet" href="../src/output.css">

<!-- Navigation -->

<!-- Hero Section -->
<div class="relative bg-indigo-900 overflow-hidden">
    <div class="mx-auto max-w-[1330px]">
        <div class="relative z-10 pb-8 bg-indigo-900 sm:pb-16 md:pb-20 lg:max-w-2xl lg:w-full lg:pb-28 xl:pb-32">
            <div class="pt-10 sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden">
                <div class="mt-10 mx-auto max-w-[1330px] px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
                    <div class="sm:text-center lg:text-left">
                        <h2 class="text-4xl tracking-tight font-extrabold text-white sm:text-5xl md:text-6xl">
                            <span class="block">Summer Collection</span>
                            <span class="block text-indigo-200">2025</span>
                        </h2>
                        <p
                            class="mt-3 text-base text-indigo-200 sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                            Discover our premium selection of fashion items designed to elevate your style.
                        </p>
                        <div class="mt-5 sm:mt-8 sm:flex sm:justify-center lg:justify-start">
                            <div class="rounded-md shadow">
                                <a href="?page=products"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-700 bg-white hover:bg-indigo-50 md:py-4 md:text-lg md:px-10">
                                    Shop Now
                                </a>
                            </div>
                            <div class="mt-3 sm:mt-0 sm:ml-3">
                                <a href="?page=cart"
                                    class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 bg-opacity-60 hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                                    View Lookbook
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="lg:absolute lg:inset-y-0 lg:right-0 lg:w-1/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full"
            src="https://images.unsplash.com/photo-1483985988355-763728e1935b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80"
            alt="Fashion model">
    </div>
</div>

<!-- Featured Categories -->
<div class="max-w-[1330px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
    <h2 class="text-3xl font-extrabold text-gray-900 mb-8" data-aos="fade-right">Shop by Category</h2>
    <div class="flex gap-6 overflow-x-auto hide-scrollbar p-2 ">
        <?php include './includes/products.php';

        foreach ($category as $cat) {
            echo '
        <div class="group relative" data-aos="fade-right">
            <div
                class="w-[150px] h-[150px] border-b-4 border-gray-800 bg-gray-200 rounded-[100px] overflow-hidden group-hover:opacity-75 max-sm:w-[100px] max-sm:h-[100px] lg:aspect-none">
                <img src="./src/images/category/' . ($cat->image) . '" alt="' . $cat->image . '"
                    class="w-full h-[150px] object-center object-fit justify-center lg:w-full lg:h-full">   
            </div>
            <div class="mt-4 flex justify-between">
                <div>
                    <h3 class="text-lg font-medium text-gray-900">
                        <a href="#">
                            ' . $cat->name . '
                        </a>
                    </h3>
                </div>
            </div>
        </div>';

        }
        ?>

    </div>
</div>

<!-- Featured Products -->
<div id="featured" class="bg-white">
    <div class="max-w-[1330px] mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <h2 class="text-3xl font-extrabold text-gray-900 mb-8" data-aos="fade-right">Featured Products</h2>

        <div class="grid grid-cols-1 gap-y-10 gap-x-6 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
            <?php include './includes/products.php';
            if($data === null || empty($data)) {
                echo "<p class='text-red-500'>No products available</p>";
            } else {
                $p = 1;
                foreach ($data as $key => $value) {
                    if($p<5){
                        // echo './images/' . ($value['category']) . '/' . $value['sku'] . '/' . ($value['images'][0]) . '<br/>';
                    echo '
            <div class="group relative" data-aos="fade-right">
                <div
                    class="w-fit h-fit  bg-gray-200 aspect-w-1 aspect-h-1 rounded-md overflow-hidden group-hover:opacity-75 lg:h-80 lg:aspect-none">
                    <img src="./pages/product-pages/images/' . ($value['category']) . '/' . $value['sku'] . '/' . ($value['images'][0]) . '" alt="' . $value['name'] . '"
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
                    $p++;
                }
            }
            
            ?>
        </div>
    </div>
</div>

<!-- Banner Section -->
<div class="bg-indigo-700">
    <div class="max-w-[1330px] mx-auto py-12 px-4 sm:px-6 lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8 lg:items-center">
            <div data-aos="fade-up">
                <h2 class="text-3xl font-extrabold text-white sm:text-4xl">
                    <span class="block">Ready to dive in?</span>
                    <span class="block text-indigo-200">Start shopping today.</span>
                </h2>
                <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">
                    Join thousands of satisfied customers who trust us for quality products and exceptional
                    service.
                </p>
                <div class="mt-8 sm:flex">
                    <div class="rounded-md shadow">
                        <a href="?page=products"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 md:py-4 md:text-lg md:px-10">
                            Shop Now
                        </a>
                    </div>
                    <div class="mt-3 sm:mt-0 sm:ml-3">
                        <a href="?page=about"
                            class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-indigo-600 bg-opacity-60 hover:bg-opacity-70 md:py-4 md:text-lg md:px-10">
                            Learn more
                        </a>
                    </div>
                </div>
            </div>
            <div class="mt-8 lg:mt-0" data-aos="zoom-in">
                <div class="bg-white rounded-lg shadow-xl overflow-hidden">
                    <div class="px-6 py-8 sm:p-10 sm:pb-6">
                        <div class="flex items-center">
                            <div class="flex-shrink-0 bg-indigo-500 rounded-md p-3">
                                <svg class="h-6 w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <h3 class="ml-3 font-medium text-gray-900 text-lg">Premium Membership</h3>
                        </div>
                        <div class="mt-6">
                            <p class="text-4xl font-extrabold text-gray-900">$9.99<span
                                    class="text-base font-medium text-gray-500">/mo</span></p>
                            <p class="mt-2 text-base text-gray-500">Get exclusive deals and early access to new
                                arrivals.</p>
                        </div>
                    </div>
                    <div class="px-6 pt-6 pb-8 bg-gray-50 sm:p-10 sm:pt-6">
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Free shipping on all orders</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Early access to sales</p>
                            </li>
                            <li class="flex items-start">
                                <div class="flex-shrink-0">
                                    <svg class="h-6 w-6 text-indigo-500" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5 13l4 4L19 7"></path>
                                    </svg>
                                </div>
                                <p class="ml-3 text-base text-gray-700">Exclusive member-only deals</p>
                            </li>
                        </ul>
                        <div class="mt-6">
                            <button
                                class="w-full bg-indigo-600 border border-transparent rounded-md py-2 px-4 flex items-center justify-center text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                Join Now
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Testimonials -->
<div class="bg-gray-50 py-16">
    <div class="max-w-[1330px] mx-auto px-4 sm:px-6 lg:px-8">
        <h2 class="text-3xl font-extrabold text-gray-900 text-center mb-12" data-aos="zoom-in-down">What Our
            Customers Say</h2>
        <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3" data-aos="zoom-in-up">
            <!-- Testimonial 1 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/32.jpg"
                        alt="Sarah Johnson">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900">Sarah Johnson</h4>
                        <p class="text-lg text-indigo-600">Verified Buyer</p>
                    </div>
                </div>
                <p class="text-xl text-gray-600">
                    "The quality of the products exceeded my expectations. Shipping was fast and the customer
                    service was excellent when I had a question about sizing."
                </p>
                <div class="mt-4 flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>
            

            <!-- Testimonial 2 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/men/54.jpg"
                        alt="Michael Chen">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900">Michael Chen</h4>
                        <p class="text-lg text-indigo-600">Verified Buyer</p>
                    </div>
                </div>
                <p class="text-xl text-gray-600">
                    "I've ordered multiple times from LuxeShop and I'm always impressed. Their premium
                    membership is
                    worth every penny with the free shipping and exclusive deals."
                </p>
                <div class="mt-4 flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                </div>
            </div>

            <!-- Testimonial 3 -->
            <div class="bg-white p-6 rounded-lg shadow">
                <div class="flex items-center mb-4">
                    <img class="w-12 h-12 rounded-full mr-4" src="https://randomuser.me/api/portraits/women/68.jpg"
                        alt="Emily Rodriguez">
                    <div>
                        <h4 class="text-lg font-semibold text-gray-900">Emily Rodriguez</h4>
                        <p class="text-lg text-indigo-600">Verified Buyer</p>
                    </div>
                </div>
                <p class="text-xl text-gray-600">
                    "The summer dress I bought is my new favorite! Perfect fit and so comfortable. Will
                    definitely
                    be shopping here again soon."
                </p>
                <div class="mt-4 flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->
<div class="bg-indigo-800">
    <div class="max-w-[1330px] mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center">
        <div class="lg:w-0 lg:flex-1">
            <h2 class="text-3xl font-extrabold tracking-tight text-white sm:text-4xl">
                Sign up for our newsletter
            </h2>
            <p class="mt-3 max-w-3xl text-lg leading-6 text-indigo-200">
                Get the latest updates on new products and upcoming sales.
            </p>
        </div>
        <div class="mt-8 lg:mt-0 lg:ml-8">
            <form class="sm:flex">
                <label for="email-address" class="sr-only">Email address</label>
                <input id="email-address" name="email" type="email" autocomplete="email" required
                    class="w-full px-5 py-3 border border-transparent placeholder-gray-500 focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white focus:border-white sm:max-w-xs rounded-md"
                    placeholder="Enter your email">
                <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3 sm:flex-shrink-0">
                    <button type="submit"
                        class="w-full flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-indigo-600 bg-white hover:bg-indigo-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-indigo-700 focus:ring-white">
                        Notify me
                    </button>
                </div>
            </form>
            <p class="mt-3 text-sm text-indigo-200">
                We care about your data. Read our <a href="#" class="text-white font-medium underline">Privacy
                    Policy</a>.
            </p>
        </div>
    </div>
</div>