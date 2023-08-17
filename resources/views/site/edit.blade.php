@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection

<h1>edit form</h1>

<form action="{{route('books.update', $book->id)}}" method="POST">
    @csrf
    @method('PUT')
    {{-- <label for="title">Book Title</label> --}}
    <input type="text" name="title" value="{{$book->title}}">
    <textarea name="description" cols="30" rows="10">{{$book->description}}</textarea>
    <input type="text" name="author" value="{{$book->author}}">
    <input type="number" name="price" value="{{$book->price ?? ''}}">
    <input type="number" name="number_pages" value="{{$book->number_pages ?? ''}}">
    <input type="text" name="link" value="{{$book->link ?? ''}}">
    <button type="submit">Submit</button>
</form>