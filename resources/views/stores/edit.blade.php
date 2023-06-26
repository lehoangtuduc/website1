@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
            <h1>Sửa Thông Tin Cửa Hàng</h1>
            <form action="{{ route('stores.update', $store->id) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-6">
                        <div class="ml-3 mb-3">
                            <label for="store_name" class="form-label">Tên Cửa Hàng</label>
                            <input type="text" name="store_name" id="store_name" class="form-control" required
                                value="{{ $store->store_name }}">
                        </div>
                        <div class="ml-3 mb-3">
                            <label for="address" class="form-label">Địa Chỉ</label>
                            <input type="text" name="address" id="address" class="form-control" required
                                value="{{ $store->address }}">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ml-3 mb-3">
                            <label for="phone_number" class="form-label">Điện Thoại</label>
                            <input type="number" name="phone_number" id="phone_number" class="form-control" required
                                value="{{ $store->phone_number }}">
                        </div>
                        <div class="ml-3 mb-3">
                            <label for="opening_hours" class="form-label">Thời Gian Mở Cửa</label>
                            <input type="text" name="opening_hours" id="opening_hours" class="form-control" required
                                value="{{ $store->opening_hours }}">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end align-items-center">
                    <a href="{{ route('stores.index') }}" class="btn btn-primary"> <i class="bi bi-arrow-left me-3"></i> Quay Lại</a>
                    <button type="submit" class="btn btn-primary"> <i class="bi bi-capslock me-3"></i>Cập Nhật</button>
                </div>
            </form>
        </div>
    </div>
@endsection
