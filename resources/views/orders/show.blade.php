<!-- resources/views/orders/show.blade.php -->

<h1>Order Details</h1>

<p><strong>Order ID:</strong> {{ $order->id }}</p>
<p><strong>Order Date:</strong> {{ $order->order_date }}</p>
<p><strong>Customer Name:</strong> {{ $order->customer_name }}</p>
<p><strong>Total Amount:</strong> ${{ $order->total_amount }}</p>

<a href="{{ route('orders.index') }}">Back to Orders</a>
