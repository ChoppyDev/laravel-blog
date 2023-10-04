@extends('base')

@section('title', 'Accueil du blog')

@section('content')
    <h1>Derniers articles :</h1>

    @foreach ($posts as $post)
        <article>
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
            <p>
                <a href="{{ route('blog.show', ['slug' => $post->slug, 'post' => $post->id]) }}">Lire la suite...</a>
            </p>

        </article>
    @endforeach
    {{ $posts->links() }}
@endsection
