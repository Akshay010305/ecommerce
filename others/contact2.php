<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LuxeShop</title>
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


    <!-- Contact Header -->
    <div class="bg-primary text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h1 class="text-4xl font-bold mb-4">Contact Us</h1>
            <p class="text-xl text-primary-200 max-w-3xl mx-auto">We'd love to hear from you! Reach out with questions,
                feedback, or just to say hello.</p>
        </div>
    </div>

    <!-- Contact Content -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
        <div class="lg:grid lg:grid-cols-2 lg:gap-12">
            <!-- Contact Form -->
            <div class="mb-8 lg:mb-0">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Send Us a Message</h2>
                    <form>
                        <div class="mb-4">
                            <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        <div class="mb-4">
                            <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                Address</label>
                            <input type="email" id="email" name="email"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                        </div>
                        <div class="mb-4">
                            <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                            <select id="subject" name="subject"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary">
                                <option value="">Select a subject</option>
                                <option value="order">Order Inquiry</option>
                                <option value="return">Returns & Exchanges</option>
                                <option value="product">Product Question</option>
                                <option value="feedback">Feedback</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                        <div class="mb-4">
                            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                            <textarea id="message" name="message" rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-primary focus:border-primary"></textarea>
                        </div>
                        <div class="mb-4">
                            <input type="checkbox" id="subscribe" name="subscribe"
                                class="h-4 w-4 text-primary focus:ring-primary border-gray-300 rounded">
                            <label for="subscribe" class="ml-2 text-sm text-gray-700">Subscribe to our
                                newsletter</label>
                        </div>
                        <button type="submit"
                            class="w-full bg-primary text-white py-3 px-6 rounded-md font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition duration-300">
                            Send Message
                        </button>
                    </form>
                </div>
            </div>

            <!-- Contact Info -->
            <div>
                <div class="bg-white rounded-lg shadow-md p-6 mb-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Contact Information</h2>
                    <div class="space-y-4">
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                <i class="fas fa-map-marker-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Our Location</h3>
                                <p class="text-gray-600">123 Fashion Avenue<br>New York, NY 10001<br>United States</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                <i class="fas fa-phone-alt text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Phone</h3>
                                <p class="text-gray-600">+1 (555) 123-4567<br>Mon-Fri, 9am-6pm EST</p>
                            </div>
                        </div>
                        <div class="flex items-start">
                            <div class="flex-shrink-0 bg-primary bg-opacity-10 p-3 rounded-full mr-4">
                                <i class="fas fa-envelope text-primary"></i>
                            </div>
                            <div>
                                <h3 class="text-lg font-medium text-gray-900">Email</h3>
                                <p class="text-gray-600">hello@luxeshop.com<br>support@luxeshop.com</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-2xl font-bold text-gray-900 mb-6">Customer Support Hours</h2>
                    <div class="space-y-3">
                        <div class="flex justify-between">
                            <span class="text-gray-700">Monday - Friday</span>
                            <span class="font-medium">9:00 AM - 6:00 PM EST</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Saturday</span>
                            <span class="font-medium">10:00 AM - 4:00 PM EST</span>
                        </div>
                        <div class="flex justify-between">
                            <span class="text-gray-700">Sunday</span>
                            <span class="font-medium">Closed</span>
                        </div>
                    </div>
                    <div class="mt-6">
                        <h3 class="text-lg font-medium text-gray-900 mb-2">Live Chat</h3>
                        <p class="text-gray-600 mb-4">Available during business hours via our website or mobile app.</p>
                        <button
                            class="bg-primary text-white py-2 px-4 rounded-md font-medium hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 transition duration-300">
                            Start Live Chat
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Section -->
    <div class="bg-gray-100 py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>
            <div class="max-w-3xl mx-auto">
                <div class="bg-white rounded-lg shadow-sm divide-y divide-gray-200">
                    <!-- FAQ Item 1 -->
                    <div class="p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <span class="text-lg font-medium text-gray-900">How can I track my order?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="mt-4 text-gray-600 hidden">
                            <p>Once your order has shipped, you'll receive a confirmation email with a tracking number
                                and link. You can also track your order by logging into your account and viewing your
                                order history.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 2 -->
                    <div class="p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <span class="text-lg font-medium text-gray-900">What is your return policy?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="mt-4 text-gray-600 hidden">
                            <p>We accept returns within 30 days of purchase for most items. Items must be unworn,
                                unwashed, and in their original condition with tags attached. Final sale items cannot be
                                returned.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 3 -->
                    <div class="p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <span class="text-lg font-medium text-gray-900">Do you offer international shipping?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="mt-4 text-gray-600 hidden">
                            <p>Yes, we ship to most countries worldwide. Shipping costs and delivery times vary by
                                destination. You'll see available shipping options and costs at checkout.</p>
                        </div>
                    </div>
                    <!-- FAQ Item 4 -->
                    <div class="p-6">
                        <button class="flex justify-between items-center w-full text-left focus:outline-none">
                            <span class="text-lg font-medium text-gray-900">How do I change or cancel my order?</span>
                            <i class="fas fa-chevron-down text-primary transition-transform duration-300"></i>
                        </button>
                        <div class="mt-4 text-gray-600 hidden">
                            <p>If you need to change or cancel your order, please contact us immediately at
                                support@luxeshop.com or call us at (555) 123-4567. We process orders quickly, so we can
                                only modify orders that haven't entered the shipping process yet.</p>
                        </div>
                    </div>
                </div>
                <div class="mt-8 text-center">
                    <a href="#" class="text-primary font-medium hover:underline">View all FAQs &rarr;</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="bg-white py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Visit Our Store</h2>
            <div class="rounded-lg overflow-hidden shadow-lg">
                <!-- Embedded Google Map -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3022.215573291614!2d-73.9878449241002!3d40.74844097138962!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9b3117469%3A0xd134e199a405a163!2sEmpire%20State%20Building!5e0!3m2!1sen!2sus!4v1689878901234!5m2!1sen!2sus"
                    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>

    <?php include 'includes/footer.php'; ?>

</body>

</html>