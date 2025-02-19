<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- @vite('resources/css/app.css') -->
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: '#0056b3',
                        secondary: '#28a745',
                    }
                }
            }
        }
    </script>
    <style>
        .slideshow {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .slideshow img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            opacity: 0;
            transition: opacity 1s ease-in-out;
            object-fit: cover;
        }

        .slideshow img.active {
            opacity: 1;
        }
    </style>
</head>

<body class="font-sans transition-colors duration-300 ease-in-out dark:bg-gray-900 dark:text-white">
    <header class="bg-white dark:bg-gray-800 shadow-md">
        <nav class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="#" class="text-2xl font-bold text-primary dark:text-white hover:text-secondary dark:hover:text-secondary transition duration-300">MedCare</a>
            <div class="hidden md:flex space-x-6">
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white px-3 py-2 rounded transition duration-300">Trang chủ</a>
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white px-3 py-2 rounded transition duration-300">Blog các bài thuốc hay</a>
                <a href="#" class="text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white px-3 py-2 rounded transition duration-300">Blog sức khỏe</a>
            </div>
            <div class="flex items-center">
                <button id="darkModeToggle" class="mr-4 p-2 rounded-full bg-gray-200 dark:bg-gray-600 hover:bg-gray-300 dark:hover:bg-gray-500 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button class="md:hidden hover:bg-gray-200 dark:hover:bg-gray-700 p-2 rounded transition duration-300" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="#" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white transition duration-300">Trang chủ</a>
            <a href="#" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white transition duration-300">Blog các bài thuốc hay</a>
            <a href="#" class="block py-2 px-4 text-gray-700 dark:text-gray-300 hover:bg-primary hover:text-white transition duration-300">Blog sức khỏe</a>
        </div>
    </header>
    <!-- Content -->
    @yield('content')
    <!-- End Content -->
    <footer class="bg-gray-800 text-white py-8 dark:bg-gray-900">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">MedCare</h3>
                    <p>Chăm sóc sức khỏe tận tâm, đồng hành cùng bạn trên hành trình sức khỏe.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên kết nhanh</h3>
                    <ul>
                        <li><a href="#" class="hover:text-gray-300 transition duration-300">Trang chủ</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition duration-300">Sản phẩm</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition duration-300">Blog sức khỏe</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition duration-300">Dịch vụ y tế</a></li>
                        <li><a href="#" class="hover:text-gray-300 transition duration-300">Liên hệ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên hệ</h3>
                    <p>123 Đường ABC, Quận XYZ, TP. Hồ Chí Minh</p>
                    <p>Email: info@medcare.com</p>
                    <p>Điện thoại: (123) 456-7890</p>
                </div>
            </div>
            <div class="mt-8 text-center">
                <p>&copy; 2024 MedCare. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Dark mode toggle
        const darkModeToggle = document.getElementById('darkModeToggle');
        const html = document.documentElement;

        darkModeToggle.addEventListener('click', () => {
            html.classList.toggle('dark');
        });

        // Slideshow
        const slides = document.querySelectorAll('.slideshow img');
        let currentSlide = 0;

        function showSlide(n) {
            slides[currentSlide].classList.remove('active');
            currentSlide = (n + slides.length) % slides.length;
            slides[currentSlide].classList.add('active');
        }

        function nextSlide() {
            showSlide(currentSlide + 1);
        }

        setInterval(nextSlide, 5000); // Change slide every 5 seconds
    </script>
</body>

</html>