<x-layout>

    <h1>Authors</h1>
    @foreach ($authors as $author)

        <a href="/authors/{{ $author['id'] }}" class="" text-blue-500" style="font-size: 40px">
            {{ $author['first_name'] }} {{ $author['last_name'] }}</a>
        <p>{{ $author['about'] }}</p>
        <a href="{{ $author['twitter_link'] }}">Twitter link</a>
        {{-- <footer style="margin-bottom: 50px">By {{ $article['author'] }}
            {{ $article['date'] }}
        </footer> --}}



    @endforeach

</x-layout>