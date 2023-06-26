@extends('layout')

@section('content')
<div class="container">
    <div class="main_table2">
    <h1>MÃ ĐƠN HÀNG: {{ $order->id }}</h1>
    <div class="row mt-4">

        <div class="col-md-6">

            <p class="ms-3"><strong><i class="bi bi-person-circle me-3"></i>Tên Khách Hàng:</strong> {{ $order->customer->customer_name }}</p>
            <p class="ms-3"><strong><i class="bi bi-clock-fill me-3 "></i>Ngày Đặt:</strong> {{ $order->order_date }}</p>
            <p class="ms-3"><strong><i class="bi bi-geo-alt-fill me-3 " ></i>Địa Chỉ:</strong> {{ $order->customer->address }}</p>
            <p class="ms-3"><strong><i class="bi bi-telephone-inbound-fill me-3 "></i>Số Điện Thoại:</strong> {{ $order->customer->phone_number }}</p>
            
        </div>
        <div class="col-md-6">
            
            <p class="ms-3"><strong><i class="bi bi-envelope me-3"></i> Email:</strong> {{ $order->customer->email }}</p>
            
            @foreach ($order->items as $item)
            
            <p class="ms-3"><strong><i class="bi bi-yelp me-3"></i> Tên Món:</strong> {{ $item->product->product_name }}</p>
            @endforeach
            
            <p class="ms-3"><strong><i class="bi bi-currency-dollar me-3"></i>Tổng Tiền:</strong> {{ number_format($order->total_amount, 0, '.', ',') }} VNĐ</p>

        </div>
    </div>
    <div class="d-flex justify-content-end align-items-center pe-3">
        <a href="{{ route('orders.index', $order->id) }}" class="btn btn-primary"><i class="bi bi-arrow-left me-3"></i> Quay Lại</a>
        <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 me-3"></i> Hủy Đơn</button>
        </form>
    </div>
    </div>
    </div>
@endsection
