<x-layout>

    <h1>Articles</h1>
    <ul>
        @foreach ($articles as $article)

            <a href="/articles/{{ $article['id'] }}" class="" text-black-500" style="font-size: 40px">
                {{ $article['title'] }}</a>
            <p>{{ $article['description'] }}</p>
            <footer style="margin-bottom: 50px">By
                <a href="authors/{{ $article['author_id'] }}">{{ $article['author_firstname'] }}
                    {{ $article['author_lastname'] }}</a>
                {{ $article['date'] }}
            </footer>



        @endforeach
    </ul>

</x-layout>