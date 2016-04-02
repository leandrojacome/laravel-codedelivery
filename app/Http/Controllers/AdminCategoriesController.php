<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;
use CodeDelivery\Repositories\CategoryRepository;

class AdminCategoriesController extends Controller
{
    public function index(CategoryRepository $repository)
    {
        $categories = $repository->all();

        return view('admin.categories.index', compact('categories'));
    }
}
