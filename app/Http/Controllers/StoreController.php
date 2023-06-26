<?php

namespace App\Http\Controllers;

use App\Models\Store;
use Illuminate\Http\Request;

class StoreController extends Controller
{
    public function index()
    {
        $stores = Store::all();
        return view('stores.index', compact('stores'));
    }

    public function create()
    {
        return view('stores.create');
    }

    public function store(Request $request)
    {
        $store = Store::create($request->all());
        return redirect()->route('stores.index', $store->id);
    }

    public function show(Store $store)
    {
        return view('stores.show', compact('store'));
    }

    public function edit(Store $store)
    {
        return view('stores.edit', compact('store'));
    }

    public function update(Request $request, Store $store)
    {
        $store->update($request->all());
        return redirect()->route('stores.show', $store->id);
    }

    public function destroy(Store $store)
    {
        $store->delete();
        return redirect()->route('stores.index');
    }
}
