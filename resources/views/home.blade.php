@extends('layout')

@section('title', 'Medcare')

@section('content')
<main>
        <!-- Hero Section -->
    <section class="bg-primary dark:bg-gray-800 text-white py-20">
        <div class="container mx-auto px-4 flex flex-col md:flex-row items-center">
            <div class="md:w-1/2 mb-8 md:mb-0">
                <h1 class="text-4xl font-bold mb-4">Chăm sóc sức khỏe tận tâm</h1>
                <p class="text-xl mb-8">Đồng hành cùng bạn trên hành trình sức khỏe</p>
                <a href="#" class="bg-white text-primary dark:bg-gray-200 dark:text-gray-800 font-bold py-2 px-6 rounded-full hover:bg-opacity-90 dark:hover:bg-opacity-90 transition duration-300">Tìm hiểu thêm</a>
            </div>
            <div class="md:w-1/2">
                <div class="slideshow rounded-lg shadow-lg">
                    <img src="https://images.unsplash.com/photo-1505751172876-fa1923c5c528?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Health Image 1" class="active">
                    <img src="https://images.unsplash.com/photo-1631815589968-fdb09a223b1e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Health Image 2">
                    <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Health Image 3">
                    <img src="https://images.unsplash.com/photo-1519494026892-80bbd2d6fd0d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1453&q=80" alt="Health Image 4">
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Products -->
    <section class="py-16 dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center dark:text-white">Sản phẩm nổi bật</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Product 1 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1607619056574-7b8d3ee536b2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Product 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Thuốc A</h3>
                        <p class="text-gray-700 dark:text-gray-300">Mô tả ngắn về thuốc A và công dụng của nó.</p>
                        <a href="#" class="mt-4 inline-block bg-secondary text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
                    </div>
                </div>
                <!-- Product 2 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1471864190281-a93a3070b6de?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Product 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Thuốc B</h3>
                        <p class="text-gray-700 dark:text-gray-300">Mô tả ngắn về thuốc B và công dụng của nó.</p>
                        <a href="#" class="mt-4 inline-block bg-secondary text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
                    </div>
                </div>
                <!-- Product 3 -->
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1512069772995-ec65ed45afd6?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1474&q=80" alt="Product 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Thuốc C</h3>
                        <p class="text-gray-700 dark:text-gray-300">Mô tả ngắn về thuốc C và công dụng của nó.</p>
                        <a href="#" class="mt-4 inline-block bg-secondary text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Health Blog Preview -->
    <section class="bg-gray-100 dark:bg-gray-900 py-16">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center dark:text-white">Blog sức khỏe</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Blog Post 1 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1576091160550-2173dba999ef?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Blog Post 1" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Cách sử dụng thuốc an toàn</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">Tìm hiểu về cách sử dụng thuốc đúng cách và an toàn.</p>
                        <a href="#" class="text-primary dark:text-blue-400 hover:underline hover:text-opacity-80 dark:hover:text-opacity-80 transition duration-300">Đọc thêm</a>
                    </div>
                </div>
                <!-- Blog Post 2 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1498837167922-ddd27525d352?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80" alt="Blog Post 2" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Dinh dưỡng cho người bệnh tiểu đường</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">Hướng dẫn chế độ ăn uống cho người mắc bệnh tiểu đường.</p>
                        <a href="#" class="text-primary dark:text-blue-400 hover:underline hover:text-opacity-80 dark:hover:text-opacity-80 transition duration-300">Đọc thêm</a>
                    </div>
                </div>
                <!-- Blog Post 3 -->
                <div class="bg-white dark:bg-gray-800 shadow-md rounded-lg overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1520&q=80" alt="Blog Post 3" class="w-full h-48 object-cover">
                    <div class="p-4">
                        <h3 class="font-bold text-xl mb-2 dark:text-white">Tập thể dục đúng cách</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">Những lời khuyên về cách tập thể dục hiệu quả và an toàn.</p>
                        <a href="#" class="text-primary dark:text-blue-400 hover:underline hover:text-opacity-80 dark:hover:text-opacity-80 transition duration-300">Đọc thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Medical Services -->
    <section class="py-16 dark:bg-gray-800">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold mb-8 text-center dark:text-white">Dịch vụ y tế</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="font-bold text-xl mb-4 dark:text-white">Đặt lịch khám</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">Đặt lịch khám với bác sĩ chuyên khoa một cách nhanh chóng và thuận tiện.</p>
                    <a href="#" class="bg-primary text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Đặt lịch ngay</a>
                </div>
                <div class="bg-white dark:bg-gray-700 shadow-md rounded-lg p-6">
                    <h3 class="font-bold text-xl mb-4 dark:text-white">Tư vấn trực tuyến</h3>
                    <p class="text-gray-700 dark:text-gray-300 mb-4">Trao đổi trực tiếp với bác sĩ qua video call để được tư vấn về sức khỏe.</p>
                    <a href="#" class="bg-primary text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Tư vấn ngay</a>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection