<!-- create.blade.php -->

@extends('layout')

@section('content')



    <h2 class="text-center fw-bold text-warning bg-black  pt-3 pb-3 mt-3 mb-3">Tạo Mới Đơn Hàng</h2>
    <form action="{{ route('orders.store') }}" method="POST">
        @csrf
<div class="main_table p-2">
    <h1 >Thông Tin Đơn Hàng</h1>
        <div class="form-group">
            <label for="customer_id">Customer:</label>
            <select name="customer_id" id="customer_id" class="form-control">
                @foreach ($customers as $customer)
                    <option value="{{ $customer->id }}">{{ $customer->customer_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="store_id">Store:</label>
            <select name="store_id" id="store_id" class="form-control">
                @foreach ($stores as $store)
                    <option value="{{ $store->id }}">{{ $store->store_name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="order_date">Order Date:</label>
            <input type="datetime-local" name="order_date" id="order_date" value="{{\Carbon\Carbon::now()}}" min="{{\Carbon\Carbon::now()->format('dd-MM-yyyy\TH:i')}}" class="form-control">
        </div>
        <div class="form-group">
            <label for="status">Status:</label>
            <select name="status" id="status" class="form-control">
                <option value="đã thanh toán">Đã Thanh Toán</option>
                <option value="chưa thanh toán">Chưa Thanh Toán</option>
            </select>
        </div>
        
</div>
    <div class="main_table p-2">
    <h1>Chi Tiết Đơn Hàng</h1>
        <div class="form-group">
            <label for="product_search" >Tìm kiếm sản phẩm:</label>
            <input type="text" name="product_search" id="product_search" class="form-control" placeholder="Nhập tên sản phẩm">
            <ul id="product_suggestions"></ul>
        </div>

        <table class="table">
            <thead>
                <th class="col-md-4">Tên Sản Phẩm</th>
                <th class="col-md-4">Số Lượng</th>
                <th class="col-md-4"></th>
            </thead>
            <tbody id="product_table">
               
            </tbody>
            <!-- Các hàng sản phẩm sẽ được thêm vào đây -->
        </table>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-primary">Xác Nhận <i class="bi bi-check-all"></i></button>
        </div>
    </div>

    </form>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            var productSearchInput = $('#product_search');
            var productSuggestionsList = $('#product_suggestions');
            var productTable = $('#product_table');

            productSearchInput.on('keyup', function() {
                var keyword = $(this).val();

                if (keyword.length >= 1) {
                    $.ajax({
                        url: "{{ url('/order/search') }}",
                        type: "POST",
                        data: {
                            _token: "{{ csrf_token() }}",
                            product_name: keyword
                        },
                        success: function(response) {
                            productSuggestionsList.empty();

                            response.forEach(function(product) {
                                var listItem = $('<li>').text(product.product_name).click(function() {
                                    var row = $('<tr class=" product_row">');

                                    var productNameCell = $(' <td class=" product_cell">').text('Tên sản phẩm: '+product.product_name);
                                    var quantityCell = $('<td class=" product_cell">').append('<input type="number" name="quantity[]" value="1" class="form-control" required  placeholder="Nhập số lượng sản phẩm">');

                                    var productIdInput = $('<input type="hidden" name="product_id[]" value="' + product.id + '">');
                                    var removeButton = $('<td class=" col-md-4"><button type="button" class=" btn btn-danger">Hủy</button></td>').click(function() {
                                        row.remove();
                                    });

                                    row.append(productNameCell, quantityCell, productIdInput, removeButton);
                                    productTable.append(row);

                                    productSearchInput.val('');
                                    productSuggestionsList.empty();
                                });

                                productSuggestionsList.append(listItem);
                            });
                        },
                        error: function(xhr) {
                            console.log(xhr.responseText);
                        }
                    });
                } else {
                    productSuggestionsList.empty();
                }
            });
        });
    </script>
@endsection
