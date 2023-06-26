@extends('layout')

@section('content')
<div class="container">
<div class="main_table2">
<h1>Chỉnh Sửa Chi Tiết Món</h1>
        <div class="row">
            <div class="col-md-6">
                <form action="{{ route('products.update', $product->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group  ms-2">
                        <label for="store_id">Cửa Hàng:</label>
                        <select name="store_id" id="store_id" class="form-control">
                            @foreach ($stores as $store)
                                <option value="{{ $store->id }}"> {{ $store->store_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-3  ms-2">
                        <label for="product_name" class="form-label">Tên Món:</label>
                        <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}">
                    </div>
                </div>
                <div class="col-md-6 ">
                <div class="mb-3 ms-2">
                    <label for="description" class="form-label">Mô Tả:</label>
                    <select name="description" id="description" class="form-control">
                        <option value="Món Mới">New</option>
                        <option value="Món Cũ">Old</option>
                    </select>
                </div>
                    <div class="mb-3  ms-2">
                        <label for="price" class="form-label">Giá Tiền:</label>
                        <input type="text" name="price" id="price" class="form-control" value="{{ $product->price }}">


                    </div>
                </div>
            </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-primary">Xác nhận <i class="bi bi-check-all"></i></button>
                    </div>
                </form>
    </div>
    </div>
@endsection
