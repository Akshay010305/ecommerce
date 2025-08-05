<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - LuxeShop</title>
    <link rel="stylesheet" href="src/style/style.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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


    <!-- About Header -->
    <div class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Our Story</h1>
            <p class="text-xl text-primary-200 max-w-3xl mx-auto">Discover the passion and dedication behind LuxeShop</p>
        </div>
    </div>

    <!-- About Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12 items-center">
            <div class="mb-8 lg:mb-0">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" 
                     alt="Our Team" 
                     class="w-full rounded-lg shadow-xl">
            </div>
            <div>
                <h2 class="text-3xl font-bold text-gray-900 mb-6">Who We Are</h2>
                <p class="text-gray-600 mb-4">
                    Founded in 2015, LuxeShop began as a small boutique with a big vision: to bring high-quality, ethically sourced fashion to discerning customers worldwide. What started as a passion project between three friends has grown into a premier online destination for luxury apparel and accessories.
                </p>
                <p class="text-gray-600 mb-6">
                    Our team of fashion experts carefully curates each collection, working directly with artisans and manufacturers who share our commitment to quality and sustainability. We believe that great style shouldn't come at the expense of ethical production.
                </p>
                <div class="bg-gray-100 p-6 rounded-lg mb-6">
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Our Mission</h3>
                    <p class="text-gray-600">
                        To empower individuals to express their unique style through premium, responsibly-made fashion that stands the test of time.
                    </p>
                </div>
            </div>
        </div>

        <!-- Values Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Our Core Values</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-medal text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Quality</h3>
                    <p class="text-gray-600">
                        We source only the finest materials and work with skilled artisans to create products that last.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-leaf text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Sustainability</h3>
                    <p class="text-gray-600">
                        We're committed to ethical production and minimizing our environmental impact at every step.
                    </p>
                </div>
                <div class="bg-white p-6 rounded-lg shadow-sm border border-gray-200 text-center">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-full w-16 h-16 flex items-center justify-center mx-auto mb-4">
                        <i class="fas fa-heart text-primary text-2xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Customer Care</h3>
                    <p class="text-gray-600">
                        Your satisfaction is our priority. We stand behind every product with exceptional service.
                    </p>
                </div>
            </div>
        </div>

        <!-- Team Section -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Meet The Team</h2>
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="bg-white rounded-lg overflow-hidden shadow-sm text-center">
                    <img src="https://randomuser.me/api/portraits/women/43.jpg" alt="Sarah Johnson" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900">Sarah Johnson</h3>
                        <p class="text-primary font-medium">CEO & Founder</p>
                        <p class="text-gray-600 mt-2 text-sm">
                            With 15 years in the fashion industry, Sarah leads our vision and brand direction.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm text-center">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Michael Chen" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900">Michael Chen</h3>
                        <p class="text-primary font-medium">Creative Director</p>
                        <p class="text-gray-600 mt-2 text-sm">
                            Michael's keen eye for design shapes our seasonal collections.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm text-center">
                    <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Emily Rodriguez" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900">Emily Rodriguez</h3>
                        <p class="text-primary font-medium">Head of Operations</p>
                        <p class="text-gray-600 mt-2 text-sm">
                            Emily ensures our supply chain meets the highest ethical standards.
                        </p>
                    </div>
                </div>
                <div class="bg-white rounded-lg overflow-hidden shadow-sm text-center">
                    <img src="https://randomuser.me/api/portraits/men/76.jpg" alt="David Kim" class="w-full h-64 object-cover">
                    <div class="p-6">
                        <h3 class="text-lg font-bold text-gray-900">David Kim</h3>
                        <p class="text-primary font-medium">Customer Experience</p>
                        <p class="text-gray-600 mt-2 text-sm">
                            David and his team provide the exceptional service we're known for.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Stats Section -->
    <div class="bg-primary text-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">8+</div>
                    <div class="text-primary-200 uppercase text-sm font-medium">Years in Business</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">50K+</div>
                    <div class="text-primary-200 uppercase text-sm font-medium">Happy Customers</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">200+</div>
                    <div class="text-primary-200 uppercase text-sm font-medium">Brand Partners</div>
                </div>
                <div class="p-4">
                    <div class="text-4xl font-bold mb-2">100%</div>
                    <div class="text-primary-200 uppercase text-sm font-medium">Satisfaction Guarantee</div>
                </div>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>
</html>