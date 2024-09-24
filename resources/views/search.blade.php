<!-- Search Form -->
<form action="{{ route('search') }}" method="GET" class="search-form mb-6 p-4 bg-gray-100 rounded shadow">
    <h2 class="text-lg font-semibold mb-4">Search Articles</h2>
    <button type="submit" class="btn btn-primary">Search</button>
</form>

<!-- Display Results -->
@if(!empty($results))
    <h3 class="mt-4">Search Results:</h3>
    @if(isset($results['article']))
        <div class="article">
            <h4>{{ $results['article']->title }}</h4>
            <p>{{ $results['article']->content }}</p>
        </div>
    @endif
    @if(isset($results['category']))
        <h4>Category: {{ $results['category']->name }}</h4>
        <!-- Display articles in this category -->
    @endif
    @if(isset($results['tag']))
        <h4>Tag: {{ $results['tag']->name }}</h4>
        <!-- Display articles with this tag -->
    @endif
@endif
