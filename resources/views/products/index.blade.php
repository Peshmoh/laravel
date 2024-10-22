<h1>Our products list</h1>

<button>
    <a href="/products/create">Create product</a>
</button>
<ul>

    @foreach ($products as $product)
    <li>
        <a href="{{ route('products.show', $product)}}">{{ $product->name }}</a>

        <form action="{{ route('products.destroy', $product)}}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </li>
    @endforeach

</ul>