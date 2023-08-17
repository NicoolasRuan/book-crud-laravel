<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct(
        protected Book $book
    )
    {
        
    }

    public function index()
    {
        $books = $this->book->all();
        return view('site.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // pegar o form para criar um book

        return view('site.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $book = $request->except('_token');
        
        $this->book->create($book);

        return redirect()->route('books.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $book = $this->book->find($id);

        return view('site.show', compact('book'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $book = $this->book->find($id);

        return view('site.edit', compact('book'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->book->find($id)->update($request->except(['_token', '_method']));

        return redirect()->route('books.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $this->book->where('id',$id)->delete();

        return redirect()->route('books.index');
    }

    public function about() 
    {
        return view('site.about');
    }
}
