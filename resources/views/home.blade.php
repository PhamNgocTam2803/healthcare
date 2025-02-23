@extends('layout')

@section('title', 'NutriMind')

@section('content')
<main class="bg-gray-100 dark:bg-gray-900">
    <!-- Hero Section -->
    <section class="bg-primary-light dark:bg-primary-dark text-white py-20 shadow-lg">
        <div class="container mx-auto px-4">
            <div class="md:w-2/3 mx-auto">
                <div class="slideshow rounded-lg shadow-xl overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1544367567-0f2fcb009e0b?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1520&q=80" alt="Health Image 1" class="active">
                    <img src="https://images.unsplash.com/photo-1508672019048-805c876b67e2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1473&q=80" alt="Health Image 2">
                    <img src="https://images.unsplash.com/photo-1520206183501-b80df61043c2?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1471&q=80" alt="Health Image 3">
                    <img src="https://images.unsplash.com/photo-1543807535-eceef0bc6599?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1374&q=80" alt="Health Image 4">
                </div>
            </div>
        </div>
    </section>

    <!-- Mind Health -->
    <section class="py-16 bg-white dark:bg-gray-800 shadow-md">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-primary-light dark:text-primary-dark inline-block border-b-4 border-secondary-light dark:border-secondary-dark pb-4">Sức khoẻ tinh thần</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                @foreach($posts['Laliga'] as $post)
                <!--Post -->
                <div class="bg-gray-50 dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition duration-300 hover:shadow-xl">
                    <img src="{{env('APP_URL') . '/storage/' . $post->thumbnail}}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-4 text-primary-light dark:text-primary-dark">{{$post->name}}</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">{{$post->description}}</p>
                        <a href="{{'/post/' . $post->id}}" class="inline-block bg-secondary-light dark:bg-secondary-dark text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Nutrition Blog Preview -->
    <section class="py-16 bg-gray-100 dark:bg-gray-900 shadow-md">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-primary-light dark:text-primary-dark inline-block border-b-4 border-secondary-light dark:border-secondary-dark pb-4">Dinh dưỡng & ăn uống</h2>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($posts['Ngoại hạng anh'] as $post)
                <!--Post -->
                <div class="bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition duration-300 hover:shadow-xl">
                    <img src="{{env('APP_URL') . '/storage/' . $post->thumbnail}}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="font-bold text-xl mb-4 text-primary-light dark:text-primary-dark">{{$post->name}}</h3>
                        <p class="text-gray-700 dark:text-gray-300 mb-4">{{$post->description}}</p>
                        <a href="{{'/post/' . $post->id}}" class="inline-block bg-secondary-light dark:bg-secondary-dark text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</main>
@endsection