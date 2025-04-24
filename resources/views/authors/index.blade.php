@extends('layouts.app')

@section('title', 'Authors')

@section('content')
<div class="container mt-4">
    <h2 class="text-center mb-4" style="color: #6c5b7b;">🖋️ All Authors</h2>
    <a href="{{ route('authors.create') }}" class="btn btn-pastel mb-3">Add New Author</a>

    <div class="row">
        @foreach($authors as $author)
            <div class="col-md-4 mb-4">
                <div class="card p-3">
                    <h5 class="card-title">{{ $author->name }}</h5>
                    <p class="card-text">Bio: {{ $author->bio }}</p>
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-sm btn-pastel">Edit</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Delete this author?')">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
