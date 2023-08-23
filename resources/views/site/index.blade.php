@extends('site.layouts.app')

@section('header')
    @include('site.partials.header')
@endsection



@section('content')
    <div class="text-white p-4 text-center flex flex-col gap-4 w-4/5 justify-between">
        <div class="flex flex-col gap-6">
            <h1 class="text-white text-3xl font-bold text-center">All books</h1>

            <table class="p-6 border-2 border-solid border-slate-700 border-collapse w-full bg-slate-800">
                <thead>
                    <tr class="text-2xl border-2 border-slate-700 leading-10">
                        <th>Title</th>
                        <th>Description</th>
                        <th>Author</th>
                        <th>Price</th>
                        <th>N° Pages</th>
                        <th>Link</th>
                    </tr>
                </thead>
                <tbody>
    
                    @foreach ($books as $book)
                        <tr class="border-2 border-slate-700 py-28 leading-9 cursor-pointer hover:bg-slate-900">
                            <td><a href="{{ route('books.show', $book->id) }}" class="w-full h-full block">{{ $book->title }}</a>
                            </td>
                            <td><a href="{{ route('books.show', $book->id) }}"
                                    class="w-full h-full block">{{ strlen($book->description) > 30 ? substr($book->description, 0, 30) . '(...)' : $book->description }}</a>
                            </td>
                            <td><a href="{{ route('books.show', $book->id) }}"
                                    class="w-full h-full block">{{ $book->author }}</a></td>
                            <td><a href="{{ route('books.show', $book->id) }}"
                                    class="w-full h-full block">{{ isset($book->price) ? '$ ' . $book->price : 'Not specified' }}</a>
                            </td>
                            <td><a href="{{ route('books.show', $book->id) }}"
                                    class="w-full h-full block">{{ $book->number_pages ?? 'Not specified' }}</a>
                            </td>
                            <td>
                                <a href="{{ route('books.show', $book->id) }}" class="w-full h-full block">
                                    {{isset($book->link) && strlen($book->link) > 21 ? substr($book->link, 0, 21) . "(...)" : (isset($book->link) && strlen($book->link) <= 21 ? $book->link : "Not specified") }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- {{dd($books->items())}} --}}

        <div class="flex justify-end items-end text-white">
            {{ $books->links() }}
        </div>
    </div>
@endsection



@section('footer')
    @include('site.partials.footer')
@endsection





{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>Document</title>

    @vite('resources/css/app.css')  

    <style>
        /* .teste:hover {
            background-color: gray;
            cursor: pointer;
        } */

        tr:hover {
            background: rgb(173, 163, 163);
        }

        td a {
            display: block;

            padding: 10px;
            text-decoration: none;
            color: black;
        }

        tr {
            border: 1px solid black;
        }

        table {
            border-spacing: 0;
            /* Removes the cell spacing via CSS */
            border-collapse: collapse;
        }

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
    </style>
</head>

<body>

    <h1 class="text-3xl font-bold underline">
        Hello world!
    </h1>

    <h1 class="">All books</h1>

    <a href="{{ route('books.create') }}">Create</a>

    <table class="table table-sm">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Author</th>
                <th>Price</th>
                <th>Number of Pages</th>
                <th>link</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
                <tr class="teste">
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->title }}</a></td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->description }}</a></td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->author }}</a></td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ '$ ' . $book->price ?? 'Not specified' }}</a>
                    </td>
                    <td><a
                            href="{{ route('books.show', $book->id) }}">{{ $book->number_pages ?? 'Not specified' }}</a>
                    </td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->link ?? 'Not specified' }}</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html> --}}
