<?php
namespace App\Http\Controllers;

use App\Models\orderitem;
use Illuminate\Http\Request;

class OrdersItemController extends Controller
{
    public function index()
    {
        $ordersItems = orderitem::all();
        return view('orderitems.index', compact('ordersItems'));
        
    }

    public function create()
    {
        return view('orderitems.create');
    }

    public function store(Request $request)
    {
        $ordersItem = orderitem::create($request->all());
        return redirect()->route('orderitems.show', $ordersItem->id);
        
    }

    public function show(orderitem $ordersItem)
    {
        return view('orderitems.show', compact('ordersItem'));
    }

    public function edit(orderitem $ordersItem)
    {
        return view('orderitems.edit', compact('ordersItem'));
    }

    public function update(Request $request, orderitem $ordersItem)
    {
        $ordersItem->update($request->all());
        return redirect()->route('orderitems.show', $ordersItem->id);
    }

    public function destroy(orderitem $ordersItem)
    {
        $ordersItem->delete();
        return redirect()->route('orderitems.index');
    }
}
