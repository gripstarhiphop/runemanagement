<x-layout>

    <h1>Welcome to Rune Management!</h1>
    <h2>Read the most recent article here:</h2>
    <a href="/articles/{{ $article['id'] }}" class="" text-blue-500" style="font-size: 40px">
        {{ $article['title'] }}</a>
    <p>{{ $article['description'] }}</p>
    <footer style="margin-bottom: 50px">By
        <a href="authors/{{ $article['author_id'] }}">{{ $article['author_firstname'] }}
            {{ $article['author_lastname'] }}</a>
        {{ $article['date'] }}
    </footer>


</x-layout>