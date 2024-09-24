@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">Articles tagged with: {{ $tag->name }}</h1>
    
    <ul class="list-disc list-inside">
        <!-- Check if there are any articles for the given tag -->
        @if($articles->isEmpty())
            <li class="text-gray-600">No articles found for this tag.</li>
        @else
            <!-- Loop through the articles and display each one -->
            @foreach($articles as $article)
                <li class="mb-2">
                    <a href="{{ route('article.show', $article->id) }}" class="text-blue-500 hover:underline">
                        {{ $article->title }}
                    </a>
                </li>
            @endforeach
        @endif
    </ul>
@endsection
