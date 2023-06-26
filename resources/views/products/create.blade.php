@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
            <h1>Thêm Món </h1>
            <form action="{{ route('products.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class=" form-group">
                            <label for="store_id" class="ml-3 form-label" >Cửa Hàng:</label>
                            <select name="store_id" id="store_id" class="ml-3 form-control" required>
                                @foreach ($stores as $store)
                                    <option value="{{ $store->id }}"> {{ $store->store_name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="available_quantity" class="ml-3 form-label" >Số Lượng Trong Kho:</label>
                            <input type="number" name="available_quantity" id="available_quantity" class="ml-3 form-control" required>
                        </div>
                       
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="product_name" class="ml-3 form-label">Tên Món:</label>
                            <input type="text" name="product_name" id="product_name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="price" class="ml-3 form-label">Giá Tiền:</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="description" class="ml-3 form-label">Mô Tả:</label>
                    <select name="description" id="description" class="form-control">
                        <option value="Món Mới">New</option>
                        <option value="Món Cũ">Old</option>
                    </select>
                </div>
                <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary ">Xác Nhận <i class="bi bi-check-all"></i></button>
                </div>
                </div>
            </form>
    </div>
@endsection
