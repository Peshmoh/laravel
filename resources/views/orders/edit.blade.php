<!-- resources/views/orders/edit.blade.php -->

<h1>Edit Order</h1>

<form action="{{ route('orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="order_date">Order Date:</label>
    <input type="date" name="order_date" id="order_date" value="{{ $order->order_date }}" required>

    <label for="customer_name">Customer Name:</label>
    <input type="text" name="customer_name" id="customer_name" value="{{ $order->customer_name }}" required>

    <label for="total_amount">Total Amount:</label>
    <input type="number" name="total_amount" id="total_amount" step="0.01" value="{{ $order->total_amount }}" required>

    <button type="submit">Update Order</button>
</form>
