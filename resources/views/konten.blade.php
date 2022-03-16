@extends('layouts.template')

@section('container')
    <h3 class="mb-5">{{ $article->title }}</h3>
    <p>By. <a href="/author/{{ $article->author->username }}" class="text-decoration-none">{{ $article->author->name }}</a> in <a href="/categories/{{ $article->category->slug }}"  class="text-decoration-none">{{ $article->category->name }}</a></p>
   {!! $article->body !!}

   <a href="/article" class="d-block mt-4">Back to posts</a>
@endsection
