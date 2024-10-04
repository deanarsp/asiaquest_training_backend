<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Item;
use Illuminate\Http\Request;

class EditItemController extends Controller
{
    public function __invoke(Item $item)
    {
        $categories = Category::listOfOptions();
        return view('items.edit', compact('item', 'categories'));
    }
}
