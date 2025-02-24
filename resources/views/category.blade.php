@extends('layout')

@section('title', $category->meta_name)
@section('description', $category->meta_desc)
@section('content')
<section class="py-16 bg-white dark:bg-gray-800 shadow-md">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-primary-light dark:text-primary-dark inline-block border-b-4 border-secondary-light dark:border-secondary-dark pb-4">{{$category->name}}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($posts as $post)
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
@endsection
    
