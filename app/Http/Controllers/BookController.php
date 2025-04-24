<?php

namespace App\Http\Controllers;

use Storage;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBookRequest;
use App\Http\Requests\UpdateBookRequest;

class BookController extends Controller
{
    /**
     * Display a listing of the books.
     */
    public function index()
    {
        $books = Book::with(['author','category'])->paginate(10);

        return view('books.index',compact('books'));
    }

    /**
     * Show the form for creating a new book.
     */
    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create',compact('authors','categories'));
    }

    /**
     * Store a newly created book in storage.
     */
    public function store(StoreBookRequest $request)
    {

        $data = $request->validated();

        if ($request->hasFile('cover')) {
            $data['cover'] = $request->file('cover')->store('covers', 'public');
        }

        Book::create($data);

        return redirect()->route('books.index')->with('success','Book created successfully');
    }

    /**
     * Display the specified book.
     */
    public function show(string $id)
    {
        $book = Book::with(['category','author'])->findOrFail($id);
        return view('books.show',compact('book'));
    }

    /**
     * Show the form for editing the specified book.
     */
    public function edit(string $id)
    {
        $authors = Author::all();
        $categories = Category::all();
        $book = Book::findOrFail($id);
        return view('books.edit',compact('authors','categories','book'));
    }

    /**
     * Update the specified book in storage.
     */
    public function update(UpdateBookRequest $request, string $id)
    {
        $book = Book::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('cover')) {
            if ($book->cover && Storage::disk('public')->exists($book->cover)) {
                Storage::disk('public')->delete($book->cover);
            }

            $data['cover'] = $request->file('cover')->store('covers', 'public');
        }

        $book->update($data);

        return redirect()->route('books.index')->with('success','Book updated successfully');

    }

    /**
     * Remove the specified book from storage.
     */
    public function destroy(string $id)
    {
        $book = Book::findOrFail($id);
        $book->delete();

        return redirect()->route('books.index')->with('success','Book deleted successfully');

    }
}
