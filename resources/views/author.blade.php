<x-layout>

    <h1>{{ $author['first_name'] }} {{ $author['last_name'] }}</h1>
    <h3>About</h3>
    <p>{{ $author['about'] }}</p>
    <a href="{{ $author['twitter_link'] }}">Twitter link</a>

    <h2>Articles written by {{ $author['first_name'] }} {{ $author['last_name'] }}</h2>
    @foreach ($articles as $article)
        @if($author['id'] == $article['author_id'])
            <a href="/articles/{{ $article['id'] }}" class=" text-blue-500" style="font-size: 40px">
                {{ $article['title'] }}</a>
            <p>{{ $article['description'] }}</p>
            <p style="margin-bottom: 50px">
                {{ $article['date'] }}
            </p>
        @endif



    @endforeach

</x-layout>