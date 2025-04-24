<?php

namespace App\Http\Controllers;

use App\Models\Author;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAuthorRequest;
use App\Http\Requests\UpdateAuthorRequest;

class AuthorController extends Controller
{
    /**
     * Display a listing of the authors.
     */
    public function index()
    {
        $authors = Author::all();
        return view('authors.index',compact('authors'));
    }

    /**
     * Show the form for creating a new author.
     */
    public function create()
    {
        return view('authors.create');
    }

    /**
     * Store a newly created author in storage.
     */
    public function store(StoreAuthorRequest $request)
    {
        Author::create($request->validated());

        return redirect()->route('authors.index')->with('success','Author created successfully');
    }

    /**
     * Display the specified author.
     */
    public function show(string $id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show',compact('author'));
    }

    /**
     * Show the form for editing the specified author.
     */
    public function edit(string $id)
    {
        $author = Author::findOrFail($id);
        return view('authors.edit',compact('author'));
    }

    /**
     * Update the specified author in storage.
     */
    public function update(UpdateAuthorRequest $request, string $id)
    {
        $author = Author::findOrFail($id);
        $author->update($request->validated());

        return redirect()->route('authors.index')->with('success','Aythor updated successfully');
    }

    /**
     * Remove the specified author from storage.
     */
    public function destroy(string $id)
    {
        $author = Author::findOrFail($id);
        $author->delete();

        return redirect()->route('authors.index')->with('success','Author deleted successfully');
    }
}
