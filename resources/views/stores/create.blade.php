@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
            <h1>Thêm Mới Cửa Hàng</h1>
            <form action="{{ route('stores.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="ml-3 mb-3">
                            <label for="store_name" class="form-label">Tên Cửa Hàng:</label>
                            <input type="text" name="store_name" id="store_name" class="form-control" required>
                        </div>
                        <div class="ml-3 mb-3">
                            <label for="address" class="form-label">Địa Chỉ:</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ml-3 mb-3">
                            <label for="phone_number" class="form-label">Số Điện thoại:</label>
                            <input type="number" name="phone_number" id="phone_number" class="form-control" required>
                        </div>
                        <div class="ml-3 mb-3">
                            <label for="opening_hours" class="form-label">Thời Gian Mở:</label>
                            <input type="text" name="opening_hours" id="opening_hours" class="form-control" required>
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
