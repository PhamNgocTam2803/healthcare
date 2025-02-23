@extends('layout')

@section('title', $post->meta_name)

@section('content')
<!-- Content -->
<main class="container mx-auto px-4 py-8">
    <article class="max-w-4xl mx-auto">
        {{-- Post title --}}
        <h1 class="text-4xl font-bold dark:text-white mb-5">{{$post->name}}</h1>
        <!-- Post content -->
        <div class="prose prose-lg max-w-none dark:prose-invert">
            {!!$post->content!!}
        </div>
    </article>
</main>
<!-- End Content -->
@endsection

