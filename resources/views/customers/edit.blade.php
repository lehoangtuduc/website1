<!-- edit.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <div class="main_table2">
        <h1>Chỉnh Sửa Thông Tin Khách Hàng</h1>
    
        <form action="{{ route('customers.update', $customer->id) }}" method="POST">
            @csrf
            @method('PUT')
 <div class="row">
    <div class="col-md-6">

        
        <div class="ms-3 form-group">
            <label for="customer_name">Tên Khách Hàng:</label>
            <input type="text" name="customer_name" id="customer_name" class="form-control" value="{{ $customer->customer_name }}">
        </div>
        
        <div class="ms-3 form-group">
            <label for="address">Địa Chỉ:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $customer->address }}">
        </div>
        
    </div>
    <div class="col-md-6">
        <div class="me-2 form-group">
            <label for="phone_number">Số Điện Thoại:</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control" value="{{ $customer->phone_number }}">
        </div>
        
        <div class=" me-3 form-group">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" class="form-control" value="{{ $customer->email }}">
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
