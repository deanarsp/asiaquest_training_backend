<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CreateCategoryController extends Controller
{
    public function __invoke()
    {
        return view('categories.create');
    }
}
