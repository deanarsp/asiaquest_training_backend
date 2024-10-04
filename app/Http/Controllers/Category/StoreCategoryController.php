<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class StoreCategoryController extends Controller
{
    public function __invoke(StoreCategoryRequest $request)
    {
        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('categories.index');
    }
}
