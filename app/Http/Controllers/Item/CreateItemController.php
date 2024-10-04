<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CreateItemController extends Controller
{
    public function __invoke()
    {
        $categories = Category::listOfOptions();
        return view('items.create', compact('categories'));
    }
}
