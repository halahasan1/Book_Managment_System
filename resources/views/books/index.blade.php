@extends('layouts.app')

@section('title', 'Books')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">📚 All Books</h2>

    <div class="row">
        @foreach ($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card book-card shadow-sm h-100">
                    @if ($book->cover)
                        <img src="{{ asset('storage/' . $book->cover) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="Cover">
                    @endif

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text small text-muted mb-1">By: {{ $book->author->name ?? 'Unknown' }}</p>
                        <p class="card-text small">Category: {{ $book->category->name ?? 'Uncategorized' }}</p>

                        <div class="mt-auto d-flex justify-content-between">
                            <a href="{{ route('books.show', $book->id) }}" class="btn btn-sm btn-pastel">View</a>
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-sm btn-pastel">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" onsubmit="return confirm('Delete this book?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">🗑</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('books.create') }}" class="btn btn-pastel px-4 py-2">➕ Add New Book</a>
    </div>
</div>
@endsection
