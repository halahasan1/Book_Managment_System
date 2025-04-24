@extends('layouts.app')

@section('title', 'Book Details')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">📖 Book Details</h2>

    <div class="card p-4 shadow-sm" style="border-radius: 15px; background-color: #fefbff;">
        <h5 class="card-title">{{ $book->title }}</h5>
        <p class="card-text small text-muted">By: {{ $book->author->name ?? 'Unknown' }}</p>
        <p class="card-text small">Category: {{ $book->category->name ?? 'Uncategorized' }}</p>

        @if($book->cover)
            <div class="mb-3">
                <img src="{{ asset('storage/' . $book->cover) }}" alt="Book Cover" style="width: 150px; height: 200px; object-fit: cover;">
            </div>
        @endif

        <p class="card-text">{{ $book->content }}</p>

        <div class="d-flex justify-content-between mt-4">
            <a href="{{ route('books.index') }}" class="btn btn-pastel">Back to Books</a>
            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-pastel">Edit Book</a>
        </div>
    </div>
</div>
@endsection
