<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\customer;
use App\Models\store;
use App\Models\orderitem;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index', compact('orders'));
    }

    public function create()
    {
        $customers = customer::all();
        $stores = store::all();
        return view('orders.create', compact('customers','stores'));
    }

    public function store(Request $request)
    {
        $order = new order;
        
        $productIds = $request->input('product_id');
        $quantities = $request->input('quantity');
        $prices = $request->input('price'); 

        $order->customer_id = $request->input('customer_id');
        $order->store_id = $request->input('store_id');
        $order->order_date = $request->input('order_date');
        $order->status = $request->input('status');
        $Total=0;
        foreach ($productIds as $index => $productId) {
            $orderitem = new orderitem;
            $orderitem->product_id = $productId;
            $Total += $quantities[$index] * $orderitem->product->price;
        }
        $order->total_amount=$Total;
        $order->save();

        // Lưu thông tin chi tiết đơn hàng
        

        
        foreach ($productIds as $index => $productId) {
            $orderitem = new orderitem;
            $orderitem->order_id = $order->id;
            $orderitem->product_id = $productId;
            $orderitem->quantity = $quantities[$index];
            $orderitem->subtotal = $quantities[$index] * $orderitem->product->price;
            $orderitem->save();
        }
        return redirect()->route('orders.index', $order->id);
    }

    public function show(Order $order)
    {
        return view('orders.show', compact('order'));
    }

    public function edit(Order $order)
    {
        return view('orders.edit', compact('order'));
    }

    public function update(Request $request, Order $order)
    {
        $order->update($request->all());
        return redirect()->route('orders.show', $order->id);
    }

    public function destroy(Order $order)
    {
        $order->delete();
        return redirect()->route('orders.index');
    }
}
