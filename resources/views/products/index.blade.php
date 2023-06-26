@extends('layout')

@section('content')
    <div class="container">
    <div class="main_table">
        <h1>Quản Lý Món</h1>
        <a href="{{ route('products.create') }}" class="btn btn-primary mb-3"><i class="bi bi-file-earmark-plus me-3"></i> Thêm Món Mới </a>
        <table class="table" id="contentTable">
            <thead>
                <tr>
                    <th>Tên Món</th>
                    <th>Mô Tả</th>
                    <th>Giá Tiền</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->product_name }}</td>
                        <td>{{ $product->description }}</td>
                        <td>{{ number_format($product->price, 0, '.', ',') }} VNĐ</td>
                        <td>
                            <a href="{{ route('products.show', $product->id) }}" class="btn btn-primary"><i class="bi bi-eye me-3"></i>Xem Chi tiết</a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-secondary"> <i class="bi bi-pen me-3"></i> Cập nhật</a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"><i class="bi bi-trash3 me-3"></i> Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    </div>
    <script>
        $(document).ready(function(){
            $('#contentTable').DataTable();
        });
    </script>
@endsection
