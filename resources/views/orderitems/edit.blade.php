@extends('layouts.app')

@section('content')
    <h1>Edit Order Item</h1>

    <form action="{{ route('order_items.update', $orderItem->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="order_id">Order ID:</label>
            <input type="text" name="order_id" id="order_id" class="form-control" value="{{ $orderItem->order_id }}">
        </div>

        <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" id="product_id" class="form-control" value="{{ $orderItem->product_id }}">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" class="form-control" value="{{ $orderItem->quantity }}">
        </div>

        <div class="form-group">
            <label for="subtotal">Subtotal:</label>
            <input type="text" name="subtotal" id="subtotal" class="form-control" value="{{ $orderItem->subtotal }}">
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
