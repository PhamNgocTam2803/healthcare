<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- @vite('resources/css/app.css') -->
    <script src="https://cdn.tailwindcss.com"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @if (isset($post->meta_desc))
    <meta name="description" content="{{ $post->meta_desc }}">
    @endif
    <title>@yield('title')</title>
    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        primary: {
                            light: '#3498db',
                            dark: '#2980b9',
                        },
                        secondary: {
                            light: '#2ecc71',
                            dark: '#27ae60',
                        },
                        background: {
                            light: '#f0f4f8',
                            dark: '#1a202c',
                        },
                        text: {
                            light: '#2c3e50',
                            dark: '#e2e8f0',
                        },
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

<body class="font-sans transition-colors duration-300 ease-in-out bg-background-light dark:bg-background-dark text-text-light dark:text-text-dark">
    <header class="bg-primary-light dark:bg-primary-dark shadow-md">
        <nav class="container mx-auto px-4 py-4 flex flex-wrap justify-between items-center">
            <div class="bg-orange-500 rounded-2xl flex items-center space-x-4 space-y-2">
                <!-- Logo -->
                <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                </svg>
                <a href="/" class="text-3xl translate-y-[-5px] translate-x-[-10px] font-extrabold text-white hover:text-secondary-light dark:hover:text-secondary-dark transition duration-300 ">
                    NutriMind
                </a>
            </div>
            <div class="hidden md:flex space-x-4">
                <a href="/" class="bg-white dark:bg-gray-800 text-primary-light dark:text-white font-bold hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white px-4 py-2 rounded-lg shadow-md transition duration-300">Trang chủ</a>
                <a href="/category/ngoai-hang-anh" class="bg-white dark:bg-gray-800 text-primary-light dark:text-white font-bold hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white px-4 py-2 rounded-lg shadow-md transition duration-300">Sức khoẻ tinh thần</a>
                <a href="/category/laliga" class="bg-white dark:bg-gray-800 text-primary-light dark:text-white font-bold hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white px-4 py-2 rounded-lg shadow-md transition duration-300">Dinh dưỡng & ăn uống</a>
            </div>
            <div class="flex items-center">
                <button id="darkModeToggle" class="mr-4 p-2 rounded-full bg-white dark:bg-gray-800 text-primary-light dark:text-white hover:bg-gray-200 dark:hover:bg-gray-700 transition duration-300">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.354 15.354A9 9 0 018.646 3.646 9.003 9.003 0 0012 21a9.003 9.003 0 008.354-5.646z" />
                    </svg>
                </button>
                <button class="md:hidden bg-white dark:bg-gray-800 text-primary-light dark:text-white hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white p-2 rounded-lg shadow-md transition duration-300" id="mobile-menu-button">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </nav>
        <div class="md:hidden hidden" id="mobile-menu">
            <a href="#" class="block py-2 px-4 text-white hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white transition duration-300">Trang chủ</a>
            <a href="#" class="block py-2 px-4 text-white hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white transition duration-300">Sức khoẻ tinh thần</a>
            <a href="#" class="block py-2 px-4 text-white hover:bg-secondary-light hover:text-white dark:hover:bg-secondary-dark dark:hover:text-white transition duration-300">Dinh dưỡng & ăn uống</a>
        </div>
    </header>
    <!-- Content -->
    @yield('content')
    <!-- End Content -->
    <footer class="bg-primary-light dark:bg-primary-dark text-white shadow-md">
        <div class="container mx-auto px-4 py-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-xl font-bold mb-4">NutriMind</h3>
                    <p class="text-gray-200 dark:text-gray-300">Chăm sóc sức khỏe tận tâm, đồng hành cùng bạn trên hành trình sức khỏe.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên kết nhanh</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-200 dark:text-gray-300 hover:text-white transition duration-300">Trang chủ</a></li>
                        <li><a href="#" class="text-gray-200 dark:text-gray-300 hover:text-white transition duration-300">Sản phẩm</a></li>
                        <li><a href="#" class="text-gray-200 dark:text-gray-300 hover:text-white transition duration-300">Blog sức khỏe</a></li>
                        <li><a href="#" class="text-gray-200 dark:text-gray-300 hover:text-white transition duration-300">Dịch vụ y tế</a></li>
                        <li><a href="#" class="text-gray-200 dark:text-gray-300 hover:text-white transition duration-300">Liên hệ</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-4">Liên hệ</h3>
                    <p class="text-gray-200 dark:text-gray-300">123 Đường ABC, Quận XYZ, TP. Hồ Chí Minh</p>
                    <p class="text-gray-200 dark:text-gray-300">Email: info@nutrimind.com</p>
                    <p class="text-gray-200 dark:text-gray-300">Điện thoại: (123) 456-7890</p>
                </div>
            </div>
            <div class="mt-8 text-center text-gray-200 dark:text-gray-300">
                <p>&copy; 2024 NutriMind. All rights reserved.</p>
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