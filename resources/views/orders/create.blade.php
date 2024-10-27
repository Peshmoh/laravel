<!-- resources/views/orders/create.blade.php -->

<h1>Create New Order</h1>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <label for="order_date">Order Date:</label>
    <input type="date" name="order_date" id="order_date" required>

    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" required>

    <label for="total_amount">Total Amount:</label>
    <input type="number" name="total_amount" id="total_amount" step="0.01" required>

    <button type="submit">Save Order</button>
</form>
