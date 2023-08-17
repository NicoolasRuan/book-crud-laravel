@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection

<h1>show Book</h1>

<a href="{{ route('books.index') }}">Back</a>
<h4>book title</h4>
<p>{{ $book->title }}</p>

<h4>book description</h4>
<p>{{ $book->description }}</p>

<h4>book author</h4>
<p>{{ $book->author }}</p>

<h4>book price</h4>
<p>{{ $book->price ?? 'not specified' }}</p>

<h4>book pages</h4>
<p>{{ $book->number_pages ?? 'not specified' }}</p>

<h4>book link</h4>
<p>{{ $book->link ?? 'not specified' }}</p>

<a href="{{ route('books.edit', $book->id) }}">Edit</a>
<form action="{{ route('books.destroy', $book->id) }}" method="POST">
    @csrf
    @method('DELETE')

    <button type="submit">Delete</button>
</form>
