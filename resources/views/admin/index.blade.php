<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <title>Document</title>

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

    <h1>All books</h1>

    <a href="{{route('books.create')}}">Create</a>

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
                    <td><a href="{{ route('books.show', $book->id) }}">{{ '$ '.$book->price ?? 'Not specified' }}</a></td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->number_pages ?? 'Not specified' }}</a>
                    </td>
                    <td><a href="{{ route('books.show', $book->id) }}">{{ $book->link ?? 'Not specified' }}</a></td>

                </tr>
            @endforeach
        </tbody>
    </table>


</body>

</html>
