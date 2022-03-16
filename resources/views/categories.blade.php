@extends('layouts.template')

@section('container')
    <h1 class="mb-5">Post Categories</h1>

    @foreach($categories as $category)
    <ul class="mb-5 border-bottom pb-3">
        <li>
            <h3><a href="/categories/{{ $category->slug }}" > {{ $category->name }}</a></h3>
        </li>
    </ul>

    @endforeach
@endsection


