@extends('layouts.app')

@section('title', 'Edit Category')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">✏️ Edit Category</h2>

    <div class="card p-4 shadow-sm" style="border-radius: 15px; background-color: #fefbff;">
        <form action="{{ route('categories.update', $category->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label">Category Name</label>
                <input type="text" name="name" class="form-control" value="{{ $category->name }}" required>
            </div>

            <button type="submit" class="btn btn-pastel w-100">Update Category</button>
        </form>
    </div>
</div>
@endsection
