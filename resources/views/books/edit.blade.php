@extends('layouts.app')

@section('title', 'Edit Book')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">✏️ Edit Book</h2>

    <div class="card p-4 shadow-sm" style="border-radius: 15px; background-color: #fefbff;">
        <form action="{{ route('books.update', $book->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Book Title</label>
                <input type="text" name="title" id="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="mb-3">
                <label for="author_id" class="form-label">Author</label>
                <select name="author_id" id="author_id" class="form-select" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Category</label>
                <select name="category_id" id="category_id" class="form-select" required>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $book->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">Book Content</label>
                <textarea name="content" id="content" rows="5" class="form-control" required>{{ $book->content }}</textarea>
            </div>

            <div class="mb-3">
                <label for="cover" class="form-label">Book Cover</label>
                <input type="file" name="cover" id="cover" class="form-control">
                @if($book->cover)
                    <p class="mt-2">Current Cover:</p>
                    <img src="{{ asset('storage/' . $book->cover) }}" alt="Book Cover" style="width: 100px;">
                @endif
            </div>

            <button type="submit" class="btn btn-pastel w-100 mt-3">Update Book</button>
        </form>
    </div>
</div>
@endsection
