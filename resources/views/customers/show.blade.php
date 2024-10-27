<!-- resources/views/customers/show.blade.php -->

<h1>Customer Details</h1>

<p><strong>Customer ID:</strong> {{ $customer->id }}</p>
<p><strong>Name:</strong> {{ $customer->name }}</p>
<p><strong>Email:</strong> {{ $customer->email }}</p>

<a href="{{ route('customers.index') }}">Back to Customers</a>
