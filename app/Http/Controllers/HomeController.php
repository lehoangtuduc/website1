<?php

namespace App\Http\Controllers;

use App\Models\Store;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class HomeController extends Controller

{
    public function index()
    {
        $storeData = Store::join('orders', 'stores.id', '=', 'orders.store_id')
            ->groupBy('stores.id', 'stores.store_name')
            ->select('stores.store_name', DB::raw('SUM(orders.total_amount) as total_amount'))
            ->get();
            
            $orderItemData = Product::join('order_items', 'products.id', '=', 'order_items.product_id')
                ->groupBy('products.id', 'products.product_name')
                ->select('products.product_name', DB::raw('SUM(order_items.quantity) as total_quantity'))
                ->get();


                $storeCount = Store::count();
                $productCount = Product::count();
                $orderCount = Order::count();
                $totalAmount = Order::sum('total_amount');
            
       
        return view('home', compact('storeData','orderItemData','storeCount','productCount','orderCount','totalAmount'));
    }
}
