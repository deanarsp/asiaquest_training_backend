<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class DestroyCategoryController extends Controller
{
    public function __invoke(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.index');
    }
}
