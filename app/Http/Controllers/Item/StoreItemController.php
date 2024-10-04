<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreItemRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreItemController extends Controller
{
    public function __invoke(StoreItemRequest $request)
    {
        $category = Category::find($request->input('category_id'));
        $category->items()->create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => $request->image_url,
            'stock_quantity' => $request->stock_quantity,
        ]);

        return redirect()->route('items.index');
    }
}
