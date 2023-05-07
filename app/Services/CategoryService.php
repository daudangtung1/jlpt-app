<?php

namespace app\Services;

use App\Models\Category;

class CategoryService
{
    protected $categoryModel;

    public function __construct(Category $categoryModel)
    {
        $this->categoryModel = $categoryModel;
    }

    public function index()
    {
        return $this->categoryModel->all();
    }

    public function store($data)
    {
        return $this->categoryModel->create($data);
    }
}
