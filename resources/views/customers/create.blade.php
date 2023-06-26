<!-- create.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
            <h1>Tạo Mới Khách Hàng</h1>

            <form action="{{ route('customers.store') }}" method="POST">
                @csrf
                <div class="row">    
                <div class="col-md-6">    
                <div class="ms-2 form-group">
                    <label for="customer_name">Tên Khách Hàng:</label>
                    <input type="text" name="customer_name" id="customer_name" class="form-control">
                </div>

                <div class="ms-2 form-group">
                    <label for="address">Địa Chỉ:</label>
                    <input type="text" name="address" id="address" class="form-control">
                </div>
                </div>
                <div class="col-md-6">
                <div class="me-1 form-group">
                    <label for="phone_number">Số Điện Thoại:</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                </div>

                <div class="me-1 form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" id="email" class="form-control">
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
