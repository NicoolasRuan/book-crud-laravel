<h1>Formulario</h1>


<form action="{{route('books.store')}}" method="POST">
    @csrf
    {{-- <label for="title">Book Title</label> --}}
    <input type="text" name="title" placeholder="book title">
    <textarea name="description" cols="30" rows="10" placeholder="Description"></textarea>
    <input type="text" name="author" placeholder="book author">
    <input type="number" name="price" placeholder="book price">
    <input type="number" name="number_pages" placeholder="book number pages">
    <input type="text" name="link" placeholder="book link">
    <button type="submit">Submit</button>
</form>