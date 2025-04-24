@extends('layouts.app')

@section('title', 'Edit Author')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">✏️ Edit Author</h2>

    <div class="card p-4 shadow-sm" style="border-radius: 15px; background-color: #fefbff;">
        <form action="{{ route('authors.update', $author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Author Name</label>
                <input type="text" name="name" class="form-control" value="{{ $author->name }}" required>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label">Author Bio</label>
                <textarea name="bio" class="form-control" rows="4" required>{{ $author->bio }}</textarea>
            </div>

            <button type="submit" class="btn btn-pastel w-100">Update Author</button>
        </form>
    </div>
</div>
@endsection
