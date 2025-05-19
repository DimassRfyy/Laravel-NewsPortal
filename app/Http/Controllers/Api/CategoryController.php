<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(Request $request) {
        $categories = Category::withCount(['articleNews']);

        if ($request->has('limit')) {
            $categories->take($request->input('limit'));
        }

        return CategoryResource::collection($categories->get());
    }
}