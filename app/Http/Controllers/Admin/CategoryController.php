<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    protected $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index(Request $request)
    {
        $categories = $this->categoryService->index();
        return view('category.index', compact('categories'));
        // return response()->json($categories, 200);
    }

    public function store(Request $request)
    {
        $data = $request->only(['name', 'description']);
        $this->categoryService->store($data);
        return response()->json(200);
    }
}
