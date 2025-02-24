@extends('layout')

@section('title', $find)

@section('content')
@if ($posts->isEmpty())
    <p class="my-[15%] text-center text-[25px] text-bold">Không tìm thấy kết quả.</p>
@endif
<main class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
    @foreach ($posts as $post)
    <div class="bg-white dark:bg-gray-700 shadow-lg rounded-lg overflow-hidden transition duration-300 hover:shadow-xl w-3/4">
        <img src="{{env('APP_URL') . '/storage/' . $post->thumbnail}}" class="w-full h-48 object-cover">
        <div class="p-6">
            <h3 class="font-bold text-xl mb-4 text-primary-light dark:text-primary-dark">{{$post->name}}</h3>
            <p class="text-gray-700 dark:text-gray-300 mb-4">{{$post->description}}</p>
            <a href="{{'/post/' . $post->id}}" class="inline-block bg-secondary-light dark:bg-secondary-dark text-white py-2 px-4 rounded hover:bg-opacity-90 transition duration-300">Xem chi tiết</a>
        </div>
    </div>
    @endforeach
</main>
@endsection