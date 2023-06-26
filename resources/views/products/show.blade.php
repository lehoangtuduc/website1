@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
        <h1>{{ $product->product_name }}</h1>
        <p><strong class="ml-3"><i class="bi bi-shop"></i> Cửa Hàng:</strong> {{ $product->store->store_name }}</p>
        <p><strong class="ml-3"><i class="bi bi-basket"></i> Mô Tả Món:</strong> {{ $product->description }}</p>
        <p><strong class="ml-3">$ Giá Tiền:</strong> {{ number_format($product->price, 0, '.', ',') }} VNĐ</p>
        <div class="text-end me-3">
        <a href="{{ route('products.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-3"></i> Quay Lại</a>
        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary"><i class="bi bi-capslock me-3"></i>Cập Nhật</a>
        <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 me-3"></i> Xóa</button>
        </div>
    </div>
        </form>
    </div>
@endsection
