<x-layout>






    <div style="width: 75%; margin:0 auto;">
        <p></p>
        <span style="font-size: 20px; margin-top: 100px;">Written by</span>
        <a class=" text-black-500" href="/authors/{{ $article['author_id'] }}"
            style="font-size: 20px; margin-top: 100px;">{{ $article['author_firstname'] }}
            {{ $article['author_lastname'] }}</a>
        {!! html_entity_decode($article['content']) !!}

    </div>



</x-layout>