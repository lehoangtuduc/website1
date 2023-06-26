@extends('layout')

@section('content')
    <div class="container">
    <div class="main_table2">
        <h1>Edit Order</h1>
        <form action="{{ route('orders.update', $order->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row">
            <div class="col-md-6">
            <div class="mb-3">
                <label for="order_number" class="form-label">Order Number</label>
                <input type="text" name="order_number" id="order_number" class="form-control" value="{{ $order->order_number }}">
            </div>
            <div class="mb-3">
                    <label for="total_amount" class="form-label">Total Amount</label>
                    <input type="text" name="total_amount" id="total_amount" class="form-control" value="{{ $order->total_amount }}">
                </div>
        </div>
        <div class="col-md-6">
            <div class="mb-3">
                <label for="customer_name" class="form-label">Customer Name</label>
                <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $order->customer_name }}">
            </div>
            </div>
            </div>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Xác Nhận <i class="bi bi-check-all"></i></button>
            </div>
        </form>
    </div>
    </div>
@endsection
