@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection

@section('content')
    {{-- @include('site.partials.header') --}}

    <div class="w-2/4 h-full bg-slate-600 flex">
        <div class="w-1/2 h-full flex flex-col items-start  pt-28 text-white">

            <div class="ml-8 w-full bg-slate-500 flex flex-col pl-5 pt-3 rounded-xl">
                <div class="flex gap-5 items-center">
                    <h1 class="text-xl font-bold flex">{{ $book->title }}</h1>
                </div>
                <div class="pl-3">
                    <p>by: <a href="#" class="hover:underline cursor-pointer">{{ $book->author }}</a></p>
                    <div class="py-3 flex items-end">
                        <span class="text-3xl font-bold ">$ {{ $book->price }}</span>
                        @if ($book->price - 20 > 0)
                            <span class="pl-4 pb-2 text-lg font-medium line-through">$ {{ $book->price - 20 }}</span>
                        @endif
                    </div>
                </div>
                <h1 class="text-xl font-bold flex">Description:</h1>
                <div class="w-full pb-4 flex flex-col p-2">
                    <span>{{ $book->description }}</span>
                    <span>{{ $book->number_pages }} pages</span>
                </div>
                <h1 class="text-xl font-bold flex">Link:</h1>
                <div class="w-full pb-4 flex flex-col p-2">
                    @if ($book->link)
                        <a href="{{ $book->link }}" target=”_blank”
                            class="hover:underline">{{ substr($book->link, 0, 21) }}</a>
                    @else
                        <p>Not specified</p>
                    @endif
                </div>

            </div>
            <div class="ml-8 w-full flex justify-around pl-5 py-1 rounded-xl mt-3">
                <button class="bg-amber-600 w-24 h-8 rounded-lg text-lg font-bold hover:bg-amber-700">
                    <a href="{{ route('books.edit', $book->id) }}">Edit</a> 
                </button>
                <form action="{{ route('books.destroy', $book->id) }}" method="POST">
                    @csrf
                    @method('DELETE')

                    <button class="bg-amber-600 w-24 h-8 rounded-lg text-lg font-bold hover:bg-amber-700" type="submit">Delete</button>
                </form>
            </div>
        </div>

        <div class="w-1/2 h-full flex justify-center items-center ">

            <div class="bg-slate-500 w-64 h-96 flex justify-center items-center text-white rounded-xl">
                book photo

            </div>
        </div>


    </div>
@endsection

@section('footer')
    @include('site.partials.footer')
@endsection


{{-- <h1>show Book</h1>

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
    </form> --}}
