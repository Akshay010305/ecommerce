function togglePasswordVisibility() {
    const passwordInput = document.getElementById('password');
    const toggleCheckbox = document.getElementById('togglePassword');
    const checkLabel = document.getElementById('check-lable');
    checkLabel.textContent = toggleCheckbox.checked ? 'Hide Password' : 'Show Password';
    passwordInput.type = toggleCheckbox.checked ? 'text' : 'password';
}

document.querySelectorAll('.flex img').forEach(img => {
            img.addEventListener('click', function() {
                document.getElementById('mainImage').src = this.src;
            });
        });


const menuButton = document.querySelector('.mobile-menu-button');
        const mobileMenu = document.querySelector('.mobile-menu');
        menuButton.addEventListener('click', function () {
            mobileMenu.classList.toggle('hidden');
        });

// Highlight active nav item on page load
        const currentPage = new URLSearchParams(window.location.search).get('page') || 'home';
        const navItems = document.querySelectorAll('.navItems');
        navItems.forEach(item => {
            if (item.getAttribute('href') === `?page=${currentPage}`) {
                item.classList.add('text-indigo-600', 'border-b-4', 'border-indigo-600');
            } else {
                item.classList.remove('text-indigo-600', 'border-b-4', 'border-indigo-600');
            }
        });

console.log("JavaScript loaded successfully");