<?php

namespace App\Http\Controllers\Item;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class IndexItemController extends Controller
{
    public function __invoke()
    {
        $items = Item::all();
        return view('items.index', compact('items'));
    }
}
