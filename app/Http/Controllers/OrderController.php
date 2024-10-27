<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('orders.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'order_date' => 'required|date',
            'customer_name' => 'required|string|max:255', // Accepting customer name directly
            'total_amount' => 'required|numeric|min:0', // Ensure total amount is non-negative
        ]);

        // Create the order with validated data
        Order::create([
            'order_date' => $validatedData['order_date'],
            'customer_name' => $validatedData['customer_name'], // Storing the customer name
            'total_amount' => $validatedData['total_amount'],
        ]);

        return redirect()->route('orders.index')->with('success', 'Order created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $order = Order::findOrFail($id);
        return view('orders.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // Validate incoming request data
        $validatedData = $request->validate([
            'order_date' => 'required|date',
            'customer_name' => 'required|string|max:255', // Accepting customer name directly
            'total_amount' => 'required|numeric|min:0', // Ensure total amount is non-negative
        ]);

        // Find the order by ID and update it
        $order = Order::findOrFail($id);
        $order->update([
            'order_date' => $validatedData['order_date'],
            'customer_name' => $validatedData['customer_name'], // Updating the customer name
            'total_amount' => $validatedData['total_amount'],
        ]);

        return redirect()->route('orders.index')->with('success', 'Order updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $order = Order::findOrFail($id);
        $order->delete();
        return redirect()->route('orders.index')->with('success', 'Order deleted successfully.');
    }
}
