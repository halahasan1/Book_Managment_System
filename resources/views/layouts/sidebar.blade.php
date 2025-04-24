<div class="d-flex flex-column p-3 text-white" style="width: 250px; background-color: #b8c0ff; min-height: 100vh;">
    <ul class="nav nav-pills flex-column mb-auto">
        <li class="nav-item">
            <a href="{{ route('books.index') }}" class="nav-link sidebar-link">📚 Books</a>
        </li>
        <li>
            <a href="{{ route('authors.index') }}" class="nav-link sidebar-link">🖋️ Authors</a>
        </li>
        <li>
            <a href="{{ route('categories.index') }}" class="nav-link sidebar-link">🏷️ Categories</a>
        </li>
    </ul>
</div>
