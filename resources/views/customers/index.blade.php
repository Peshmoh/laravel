@extends('layouts.app')

@section('title', 'Customers List')

@section('content')
<div class="container mt-4">
    <h1>Customers List</h1>
    
    <!-- Display success message for creation and deletion -->
    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3">Create New Customer</a>

    @if($customers->isEmpty())
        <div class="alert alert-warning" role="alert">
            No customers found. Please create a new customer.
        </div>
    @else
        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name ?? 'N/A' }}</td> <!-- Handle null name -->
                        <td>{{ $customer->email ?? 'N/A' }}</td> <!-- Handle null email -->
                        <td>
                            <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-info btn-sm">View</a>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this customer?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
