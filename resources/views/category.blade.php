@extends('layouts.template')

@section('container')
    <h1 class="mb-5">Post Category : {{ $category }}</h1>

    @foreach($articles as $article)
    <article>
        <h3> 
            <a href="/article/{{ $article->slug }}" > {{ $article->title }}</a>                    
        </h3>
        {{-- <h6>By: Helsa Nesta Dhaifullah</h6> --}}
        <p>{{ $article->excerpt }}</p>
    </article>
    @endforeach
@endsection


