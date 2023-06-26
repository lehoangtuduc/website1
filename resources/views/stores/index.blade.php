@extends('layout')

@section('content')
<div class="container">
    <div class="main_table ">
        <h1>Quản Lý Cửa Hàng</h1>
        <a href="{{ route('stores.create') }}" class="btn btn-primary mb-3"><i class="bi bi-file-earmark-plus me-3"></i> Thêm Mới Cửa Hàng </a>
        <table class="table " id="contentTable">
            <thead>
                <tr>
                    <th>Tên Cửa Hàng</th>
                    <th>Địa Chỉ</th>
                    <th>Điện Thoại</th>
                    <th>Thời Gian Mở Cửa</th>
                    <th>Chức Năng</th>
                </tr>
            </thead>
            <tbody>
                @foreach($stores as $store)
                    <tr>
                        <td>{{ $store->store_name }}</td>
                        <td>{{ $store->address }}</td>
                        <td>{{ $store->phone_number }}</td>
                        <td>{{ $store->opening_hours }}</td>
                        <td>
                            <a href="{{ route('stores.show', $store->id) }}" class="btn btn-primary"> <i class="bi bi-eye me-3"></i>Xem Chi tiết</a>
                            <a href="{{ route('stores.edit', $store->id) }}" class="btn btn-secondary"> <i class="bi bi-pen me-3"></i> Cập Nhật</a>
                            <form action="{{ route('stores.destroy', $store->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"> <i class="bi bi-trash3 me-3"></i> Xóa</button>
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