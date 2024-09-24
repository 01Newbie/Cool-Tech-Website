@extends('layouts.app')

@section('content')
    <!-- Category Title -->
    <h1>{{ $category->name }}</h1>
    
    <!-- Article List -->
    <ul>
        @if($articles->isEmpty())
            <li>No articles found in this category.</li> 
        @else
            @foreach($articles as $article)
                <li>
                    <!-- Link to the individual article -->
                    <a href="{{ route('article.show', $article->id) }}">{{ $article->title }}</a>
                </li>
            @endforeach
        @endif
    </ul>
@endsection
