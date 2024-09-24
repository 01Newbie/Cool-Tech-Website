@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
          <!-- Main heading for the welcome page -->
        <h1 class="text-4xl font-bold mb-8 text-center text-gray-800">Welcome to CoolTech</h1>

         <!-- Subheading for the latest articles section -->
        <h2 class="text-2xl font-semibold mb-4 text-center">Latest Articles</h2>

         <!-- Grid layout for displaying articles -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @foreach($articles as $article)
                <div class="bg-white shadow-lg rounded-lg p-6 mb-6">
                    <a href="{{ route('article.show', $article->id) }}" class="text-2xl font-semibold text-blue-600 hover:underline">
                        {{ $article->title }}
                    </a>
                    <p class="text-gray-600 mt-2">{{ Str::limit($article->content, 150) }}</p>
                    <p class="text-sm text-gray-500 mt-4">{{ $article->created_at->format('F j, Y') }}</p>
                </div>
            @endforeach
        </div>
    </div>
@endsection
