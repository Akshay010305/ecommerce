<div class="m-auto mt-24 mb-24 bg-white shadow-lg rounded-lg p-8 w-full max-w-md">
    <h2 class="text-2xl font-bold text-center text-gray-900 mb-6">Enter into admin dashboard<span class="text-primary">Shop</span>
    </h2>
    <form id="loginForm" class="space-y-5" method="post" action="./pages/addProducts.php">
        <div>
            <label class="block text-gray-700 mb-1 after:content-['*'] after:text-red-900 after:font-bold"
                for="email">Email</label>
            <input id="email" type="email" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="you@example.com" name="email">
        </div>
        <div>
            <label class="block text-gray-700 mb-1 after:content-['*'] after:text-red-900 after:font-bold"
                for="password">Password</label>
            <input id="password" type="password" required
                class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-primary"
                placeholder="••••••••" name="password">
            <input type="checkbox" class="mt-2" id="togglePassword" name="togglePassword"
                onclick="togglePasswordVisibility()">
            <label for="togglePassword" class="text-sm text-gray-600" id="check-lable">Show Password</label>

        </div>
        <button type="submit" class="w-full bg-blue-200 text-white py-2 rounded hover:bg-indigo-700 transition"
            name="submit">Enter</button>
    </form>
</div>