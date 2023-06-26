@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table2">
            <h1>Thông Tin Cửa Hàng<i class="bi bi-shop-window ms-3"></i></h1>
            <p class=" text-center fs-1 border-bottom border-danger text-danger"><strong >{{ $store->store_name }}</strong></p>
            <p class="ms-3 fs-5 "> <i class="bi bi-geo-alt-fill me-3 text-primary" ></i><strong class="text-dark">Địa Chỉ:</strong> {{ $store->address }}</p>
            <p class="ms-3 fs-5"><i class="bi bi-telephone-inbound-fill me-3 text-primary"></i><strong class="text-dark">Điện Thoại:</strong> {{ $store->phone_number }}</p>
            <p class="ms-3 fs-5"><i class="bi bi-clock-fill me-3  text-primary"></i><strong class="text-dark">Thời Gian Mở Cửa:</strong> {{ $store->opening_hours }}</p>
            <div class="d-flex justify-content-end align-items-center pe-3">
                <a href="{{ route('stores.index') }}" class="btn btn-primary"><i class="bi bi-arrow-left me-3"></i> Quay Lại </a>
                <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-primary">  <i class="bi bi-pen me-3"></i> Cập nhật</a>
                <form action="{{ route('stores.destroy', $store->id) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"> <i class="bi bi-trash3 me-3"></i> Xóa</button>
                </form>
            </div>
        </div>
    </div>
@endsection
