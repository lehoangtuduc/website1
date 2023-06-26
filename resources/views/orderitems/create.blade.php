@extends('layout')

@section('content')
    <h1>Create Order Item</h1>

    <form action="{{ route('orderitems.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="order_id">Order ID:</label>
            <input type="text" name="order_id" id="order_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="product_id">Product ID:</label>
            <input type="text" name="product_id" id="product_id" class="form-control">
        </div>

        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="text" name="quantity" id="quantity" class="form-control">
        </div>

        

        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
