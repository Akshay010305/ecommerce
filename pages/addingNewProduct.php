<?php

// header('Refresh: .3; url=../index.php');

$name = $_REQUEST['name'];
$description = $_REQUEST['description'];
$about = explode("\n", $_REQUEST['about_product']);
$category = $_REQUEST['category'];
$brand = $_REQUEST['brand'];
$price = (int) $_REQUEST['price'];
$discount = (int) $_REQUEST['discount'];
$stock = (int) $_REQUEST['stock'];
$sku = $_REQUEST['sku'];
$images = [
    $_FILES['thumbnail']['name'],
    $_FILES['slider_1']['name'],
    $_FILES['slider_2']['name'],
    $_FILES['slider_3']['name']
];
$rating = (int) $_REQUEST['rating'];
$reviews = (int) $_REQUEST['reviews'];
$features = explode("\n", $_REQUEST['features']);
// $features = array_map('trim', $features); // Trim whitespace from each feature
$dimensions = [
    'width' => $_REQUEST['width'] . "cm",
    'height' => $_REQUEST['height'] . "cm",
    'depth' => $_REQUEST['depth'] . "cm"
];
$weight = $_REQUEST['weight'] . "g";
$color = $_REQUEST['color'];
$warranty = $_REQUEST['warranty'];
$release_date = $_REQUEST['release_date'];


$feat = "<ul class='list-disc pl-5 space-y-2'>";

foreach ($features as $feature) {

    $feat .= "<li class='flex items-start'>
            <i class='fas fa-check text-green-500 mt-1 mr-2'></i>
        <span>" . $feature . "</span>
    </li>";
}

$feat .= "</ul><br/>";

$aboutTheProduct = "";

foreach ($about as $item) {
    $aboutTheProduct .= "<p class='text-gray-700 text-justify'>" . $item . "</p>";

}


$string = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product | View page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
</head>
<body class="bg-gray-50">
 <?php include "../ecommerce 2/includes/navbar.php" ?>

    <div class="container mx-auto px-4 py-8 max-w-6xl">
        <!-- Product Container -->
        <div class="bg-white rounded-lg shadow-md overflow-hidden p-6">
            <div class="flex flex-col md:flex-row gap-8">
                <!-- Product Images -->
                <div class="h-screen w-full md:w-1/2">
                    <img id="mainImage" src="../images/' . $category . '/' . $sku . '/' . $images[0] . '" 
                         alt="Wireless Bluetooth Headphones" 
                         class="w-full h-fit object-stretch aspect-square border border-gray-200 rounded-lg mb-4">
                    <div class="flex gap-3 w-full overflow-x-auto   ">
                        <img src="../images/' . $category . '/' . $sku . '/' . $images[0] . '" 
                             alt="Headphones thumbnail 1" 
                             class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/' . $category . '/' . $sku . '/' . $images[1] . '" 
                             alt="Headphones thumbnail 1" 
                             class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition">
                        <img src="../images/' . $category . '/' . $sku . '/' . $images[2] . '" 
                             alt="Headphones thumbnail 2" 
                             class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition"
                             >
                        <img src="../images/' . $category . '/' . $sku . '/' . $images[3] . '" 
                             alt="Headphones thumbnail 2" 
                             class="w-20 h-20 object-cover border border-gray-300 rounded cursor-pointer hover:border-blue-500 transition"
                             >
                    </div>
                </div>
                
                <!-- Product Details -->
                <div class="w-full md:w-1/2">
                    <h1 class="text-3xl font-bold text-gray-900 mb-1">' . $name . '</h1>
                    <div class="text-gray-600 text-lg mb-4">by <span class="font-semibold">' . $brand . '</span></div>
                    
                    <div class="flex items-center mb-4">
                        <div class="text-yellow-400 text-xl">
                            ' . ($rating == "1" ? "★☆☆☆☆" : ($rating == "2" ? "★★☆☆☆" : ($rating == "3" ? "★★★☆☆" : ($rating == "4" ? "★★★★☆" : "★★★★★")))) . '
                            <span class="text-gray-600 text-sm ml-1">4.5</span>
                        </div>
                        <a href="#reviews" class="text-blue-600 ml-3 hover:underline text-sm">' . $reviews . '</a>
                    </div>
                    
                    <p class="text-gray-700 mb-6">' . $description . '</p>

                    
                    <!-- Price Section -->
                    <div class="my-5">
                        <span class="text-2xl font-bold text-red-600">$' . round(($price - ($price * ($discount/100))), 2) . '</span>
                        <span class="text-gray-500 line-through ml-2">$' . $price . '</span>
                        <span class="bg-green-100 text-green-800 text-sm font-semibold ml-2 px-2 py-0.5 rounded">' . $discount . '% OFF</span>
                    </div>
                    
                    <div class="text-green-700 font-semibold mb-4">In Stock (' . $stock . ' available)</div>
                    
                    <!-- Delivery Info -->
                    <div class="bg-gray-100 p-4 rounded-lg mb-6">
                        <div class="flex items-center">
                            <i class="fas fa-shipping-fast text-blue-500 mr-2"></i>
                            <span class="font-medium">FREE delivery</span>
                            <span class="text-gray-600 text-sm ml-2">on orders over $50</span>
                        </div>
                        <div class="flex items-center mt-2">
                            <i class="far fa-calendar-alt text-blue-500 mr-2"></i>
                            <span class="text-gray-700">Expected delivery by <span class="font-medium">Friday, July 12</span></span>
                        </div>
                    </div>
                    
                    <!-- Action Buttons -->
                    <div class="flex flex-col sm:flex-row gap-3 mb-8">
                    <form method="post" action="../../../pages/functions.php">
                        <button
                            class=""w-[400px] bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-semibold transition flex-1 flex items-center justify-center"
                            value="' . $sku . '"  name="addToCart">
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
                        ' . $feat . '
                    </div>
                    <!-- About Product -->
                    <div class="mb-8">
                        <h3 class="text-xl font-semibold border-b border-gray-200 pb-2 mb-4">About this item</h3>
                        ' . $aboutTheProduct . '
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
                                <td class="p-3 text-gray-900">' . $brand . '</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Model</td>
                                <td class="p-3 text-gray-900">' . $sku . '</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Color</td>
                                <td class="p-3 text-gray-900">' . $color . '</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Dimensions</td>
                                <td class="p-3 text-gray-900">' . $dimensions['width'] . '(W)' . '×' . $dimensions['height'] . '(H)' . '×' . $dimensions['depth'] . '(D)</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Weight</td>
                                <td class="p-3 text-gray-900">' . $weight . '</td>
                            </tr>
                            <tr>
                                <td class="p-3 font-medium text-gray-500">Warranty</td>
                                <td class="p-3 text-gray-900">' . $warranty . ' Manufacturer Warranty</td>
                            </tr>
                            <tr class="bg-gray-50">
                                <td class="p-3 font-medium text-gray-500">Release Date</td>
                                <td class="p-3 text-gray-900">' . $release_date . '</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
 <?php include "../includes/footer.php" ?>

    <script>
    document.querySelectorAll(".flex img").forEach(img => {
            img.addEventListener("click", function() {
            document.getElementById("mainImage").src = this.src;
        });
    });
    </script>
</body>
</html>';



// if (!file_exists("../pages/product-pages/$category")) {
if (!file_exists("../pages/product-pages/$category")) {
    // echo "Directory already exists.";
    if (!file_exists("../pages/product-pages/images/$category")) {
        mkdir("../pages/product-pages/images/$category", 0777, true);
        mkdir("../pages/product-pages/images/$category/$sku", 0777, true);
        echo "Directory created successfully.1234567890";
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['slider_1']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_1']['name']);
        move_uploaded_file($_FILES['slider_2']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_2']['name']);
        move_uploaded_file($_FILES['slider_3']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_3']['name']);

    } else {
        if (!file_exists("../pages/product-pages/images/$category/$sku")) {
            mkdir("../pages/product-pages/images/$category/$sku", 0777, true);
        }
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['slider_1']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_1']['name']);
        move_uploaded_file($_FILES['slider_2']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_2']['name']);
        move_uploaded_file($_FILES['slider_3']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_3']['name']);
    }
    $fileUpload = fopen("$sku.php", "w");

    fwrite($fileUpload, $string);
    fclose($fileUpload);

    $source = "$sku.php";
    if (!file_exists("../pages/product-pages/$category")) {
        mkdir("../pages/product-pages/$category", 0777, true);
    }
    $destination = "../pages/product-pages/$category/$sku.php";

    echo rename($source, $destination) ?
        "File moved successfully to $destination" :
        "Error moving file to $destination";

} else {

    if (file_exists("../pages/product-pages/$category")) {
        echo "Directory created successfully.";
        if (!file_exists("../pages/product-pages/images/$category/$sku")) {
            mkdir("../pages/product-pages/images/$category/$sku", 0777, true);
        }
        move_uploaded_file($_FILES['thumbnail']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['thumbnail']['name']);
        move_uploaded_file($_FILES['slider_1']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_1']['name']);
        move_uploaded_file($_FILES['slider_2']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_2']['name']);
        move_uploaded_file($_FILES['slider_3']['tmp_name'], "../pages/product-pages/images/$category/$sku/" . $_FILES['slider_3']['name']);
    }
    $fileUpload = fopen("$sku.php", "w");

    fwrite($fileUpload, $string);
    fclose($fileUpload);

    $source = "$sku.php";
    $destination = "../pages/product-pages/$category/$sku.php";

    echo rename($source, $destination) ?
        "File moved successfully to $destination" :
        "Error moving file to $destination";


}
// }

if (file_exists('../src/js/products.json')) {
    echo "File exists, proceeding with further operations...";
    $file = file_get_contents('../src/js/products.json');
    $data = json_decode($file, true);

    $new_data = array(
        "name" => $name,
        "description" => $description,
        "about" => $about,
        "category" => $category,
        "brand" => $brand,
        "price" => $price,
        "discount" => $discount,
        "stock" => $stock,
        "sku" => $sku,
        "images" => $images,
        "rating" => $rating,
        "reviews" => $reviews,
        "features" => $features,
        "dimensions" => $dimensions,
        "weight" => $weight,
        "color" => $color,
        "warranty" => $warranty,
        "release_date" => $release_date
    );
    $data[] = $new_data;
    $final_data = json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES);
    file_put_contents('../src/js/products.json', $final_data);
} else {
    echo "File does not exist.";
}


?>