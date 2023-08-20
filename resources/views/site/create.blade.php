@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection


@section('content')
    <div class="bg-slate-600 w-2/4 flex flex-col items-center pt-8">
        <h1 class="text-white text-3xl font-bold">Create Book</h1>

        <form action="{{ route('books.store') }}" method="POST" class="flex flex-col items-center text-white w-3/4 h-full gap-3">
            @csrf
            <input type="text" name="title" placeholder="book title" class="bg-transparent h-8 text-xl border-b-2 focus:outline-none w-full">
            <textarea name="description" cols="30" rows="10" placeholder="Description" class="bg-transparent h-48 text-xl border-b-2 focus:outline-none w-full"></textarea>
            <input type="text" name="author" placeholder="book author" class="bg-transparent h-8 text-xl border-b-2 focus:outline-none w-full">
            <input type="number" name="price" placeholder="book price" class="bg-transparent h-8 text-xl border-b-2 focus:outline-none w-full">
            <input type="number" name="number_pages" placeholder="book number pages" class="bg-transparent h-8 text-xl border-b-2 focus:outline-none w-full">
            <input type="text" name="link" placeholder="book link" class="bg-transparent h-8 text-xl border-b-2 focus:outline-none w-full">
            <button type="submit" class="bg-amber-600 h-9 w-20 hover:bg-amber-700">Submit</button>
        </form>
    </div>






@endsection

@section('footer')
    @include('site.partials.footer')
@endsection
