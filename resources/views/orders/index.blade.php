@extends('layout')

@section('content')
    <div class="container">
        <div class="main_table">
            <h1>Quản Lý Đơn Hàng</h1>
            <a href="{{ route('orders.create') }}" class="btn btn-primary mb-3"> <i class="bi bi-file-earmark-plus me-3"></i>Thêm Đơn Hàng</a>
            <table class="table"  id="contentTable">
                <thead>
                    <tr>
                        <th>Mã Đơn Hàng</th>
                        <th>Tên Khách Hàng</th>
                        <th>Tổng Tiền</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                        <tr>
                            <td>{{ $order->id }}</td>
                            <td>{{ $order->customer->customer_name }}</td>
                            <td>{{ number_format($order->total_amount, 0, '.', ',') }} VNĐ</td>

                            <td>
                                <a href="{{ route('orders.show', $order->id) }}" class="btn btn-primary"><i class="bi bi-eye me-3"></i>Xem Chi tiết</a>
                                <form action="{{ route('orders.destroy', $order->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Xác nhận xoá? Bạn Chắc Chắn Muốn Hủy Không!!!')"><i class="bi bi-trash3 me-3"></i> Hủy Đơn</button>
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
 