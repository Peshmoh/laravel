<!-- resources/views/categories/show.blade.php -->

<h1>Category Details</h1>

<p><strong>Category ID:</strong> {{ $category->id }}</p>
<p><strong>Name:</strong> {{ $category->name }}</p>
<p><strong>Description:</strong> {{ $category->description }}</p>

<a href="{{ route('categories.index') }}">Back to Categories</a>
