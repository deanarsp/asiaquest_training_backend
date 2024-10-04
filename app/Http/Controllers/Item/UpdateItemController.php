<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class UpdateItemController extends Controller
{
    public function __invoke(Request $request, Item $item)
    {
        $item->name = $request->input('name');
        $item->description = $request->input('description');
        $item->price = $request->input('price');
        $item->image_url = $request->input('image_url');
        $item->stock_quantity = $request->input('stock_quantity');

        $category = Category::find($request->input('category_id'));
        $category->items()->save($item);

        return redirect()->route('items.index');
    }
}
