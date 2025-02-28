<?php

namespace App\Http\Controllers;

use App\Models\ItemSale;
use Illuminate\Http\Request;

class ItemSaleController extends Controller
{
    public function index()
    {
        $items = ItemSale::all();
        return view('items.index', compact('items'));
    }

    public function create()
    {
        return view('items.create');
    }

    public function store(Request $request)
    {
        $request->validate(ItemSale::$rules);
        
        ItemSale::create($request->all());
        
        return redirect()->route('items.index')
            ->with('success', 'Item created successfully.');
    }

    public function edit(ItemSale $item)
    {
        return view('items.edit', compact('item'));
    }

    public function update(Request $request, ItemSale $item)
    {
        $request->validate(ItemSale::$rules);
        
        $item->update($request->all());
        
        return redirect()->route('items.index')
            ->with('success', 'Item updated successfully');
    }
}
