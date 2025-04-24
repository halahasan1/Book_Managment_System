@extends('layouts.app')

@section('title', 'Categories')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">🏷️ All Categories</h2>
    <a href="{{ route('categories.create') }}" class="btn btn-pastel mb-3">Add New Category</a>

    <div class="row">
        @foreach($categories as $category)
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <h5 class="card-title">{{ $category->name }}</h5>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-pastel">Edit</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this category?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
