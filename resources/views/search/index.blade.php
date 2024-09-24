@extends('layouts.app')

@section('content')
    <div class="container mx-auto p-6">
        <h1 class="text-4xl font-bold mb-6 text-center">Search Page</h1>

        <!-- Display error message if it exists in the session -->
        @if(session('error'))
            <p class="error-message text-red-500 mb-4">{{ session('error') }}</p>
        @endif

        <!-- Search form -->
        <form action="{{ route('search') }}" method="GET" class="mb-4">
            <p>Please enter either an Article ID, Category, or Tag:</p>
            <div class="flex mb-4">
                <input type="text" name="article_id" placeholder="Article ID" class="p-2 border border-gray-300 rounded-md mr-2 flex-1">
                <input type="text" name="category" placeholder="Category" class="p-2 border border-gray-300 rounded-md mr-2 flex-1">
                <input type="text" name="tag" placeholder="Tag" class="p-2 border border-gray-300 rounded-md mr-2 flex-1">
                <button type="submit" class="p-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Search</button>
            </div>
        </form>

        <!-- Display search results -->
        @if(isset($results['article']))
            @if($results['article'])
                <div class="article bg-white shadow-lg rounded-lg p-6 mb-6">
                    <h2 class="text-2xl font-semibold">{{ $results['article']->title }}</h2>
                    <p>{{ $results['article']->content }}</p>
                    <p>Category: {{ $results['article']->category->name ?? 'N/A' }}</p>
                    <p>Tags: {{ implode(', ', $results['article']->tags->pluck('name')->toArray()) }}</p>
                </div>
            @else
                <p class="text-center text-gray-500">No article found with that ID.</p>
            @endif
        @endif
    </div>
@endsection
