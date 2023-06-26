@extends('layouts.app')

@section('content')
    <h1>Order Item Details</h1>

    <p><strong>Order ID:</strong> {{ $orderItem->order_id }}</p>
    <p><strong>Product ID:</strong> {{ $orderItem->product_id }}</p>
    <p><strong>Quantity:</strong> {{ $orderItem->quantity }}</p>
    <p><strong>Subtotal:</strong> {{ $orderItem->subtotal }}</p>

    <a href="{{ route('order_items.index') }}" class="btn btn-secondary">Back</a>
@endsection
