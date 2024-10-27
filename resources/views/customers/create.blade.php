<!-- resources/views/customers/create.blade.php -->

<h1>Create New Customer</h1>

<form action="{{ route('customers.store') }}" method="POST">
    @csrf
    <label for="name">Customer Name:</label>
    <input type="text" name="name" id="name" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <button type="submit">Save Customer</button>
</form>
