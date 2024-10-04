<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ShowItemController extends Controller
{
    public function __invoke(Item $item)
    {
        return view('items.show', compact('item'));
    }
}
