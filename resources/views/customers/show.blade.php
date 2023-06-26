<!-- show.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <div class="main_table2">
        <h1>Chi Tiết Khách Hàng</h1>
        
        <p><strong class="ms-3"><i class="bi bi-person-circle me-3"></i> Tên Khách Hàng:</strong> {{ $customer->customer_name }}</p>
        <p><strong class="ms-3"><i class="bi bi-geo-alt-fill me-3 " ></i> Địa Chỉ:</strong> {{ $customer->address }}</p>
        <p><strong class="ms-3"><i class="bi bi-telephone-inbound-fill me-3"></i>Số Điện Thoại:</strong> {{ $customer->phone_number }}</p>
        <p><strong class="ms-3"><i class="bi bi-envelope me-3"></i> Email:</strong> {{ $customer->email }}</p>
        <div class="d-flex justify-content-end align-items-center pe-3">
        
        <a href="{{ route('customers.index', $customer->id) }}" class="btn btn-primary"><i class="bi bi-arrow-left me-3"></i> Quay Lại</a>
        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-primary"> <i class="bi bi-pen me-3"></i> Cập nhật</a>
        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 me-3"></i> Xóa</button>
        </form>
    </div>
    </div>
</div>
    @endsection
