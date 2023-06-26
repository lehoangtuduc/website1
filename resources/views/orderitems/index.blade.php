@extends('layout')

@section('content')
    <h1>Sản Phẩm</h1>

    <a href="{{ route('orderitems.create') }}" class="btn btn-primary">Create</a>

    <table>
        <thead>
            <tr>
                <th>Order ID</th>
                <th>Product ID</th>
                <th>Quantity</th>
                <th>Subtotal</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordersItems as $ordersItem)
                <tr>
                    <td>{{ $ordersItem->order_id }}</td>
                    <td>{{ $ordersItem->product_id }}</td>
                    <td>{{ $ordersItem->quantity }}</td>
                    <td>{{ $ordersItem->subtotal }}</td>
                    <td>
                        <a href="{{ route('orderitems.show', $orderItem->id) }}" class="btn btn-info">View</a>
                        <a href="{{ route('orderitems.edit', $orderItem->id) }}" class="btn btn-warning">Edit</a>
                        
                        <form action="{{ route('order_items.destroy', $orderItem->id) }}" method="POST" style="display: inline-block">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
