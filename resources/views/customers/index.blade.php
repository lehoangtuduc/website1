<!-- index.blade.php -->

@extends('layout')

@section('content')
<div class="container">
    <div class="main_table">
    <h1>Quản Lý Khách Hàng</h1>
    <a href="{{ route('customers.create') }}" class="btn btn-primary mb-3"><i class="bi bi-file-earmark-plus me-3"></i>Thêm Mới Khách Hàng </a>
    <table class="table"  id="contentTable">
        <thead>
            <tr>
                <th>Tên Khách Hàng</th>
                <th>Địa Chỉ</th>
                <th>Email</th>
                <th>Chức Năng</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($customers as $customer)
                <tr>
                    <td>{{ $customer->customer_name }}</td>
                    <td>{{ $customer->address }}</td>
                    <td>{{ $customer->email }}</td>
                    <td>
                        <a href="{{ route('customers.show', $customer->id) }}" class="btn btn-primary"><i class="bi bi-eye me-3"></i>Xem Chi tiết</a>
                        <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-secondary"><i class="bi bi-pen me-3"></i> Cập Nhật</a>
                        <form action="{{ route('customers.destroy', $customer->id) }}" method="POST" class="d-inline">
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
