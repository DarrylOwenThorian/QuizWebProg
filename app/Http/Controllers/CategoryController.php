<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subject;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::whereIn('name', [
            'Data Science',
            'Network Security'
        ])->get();

        return view('category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);

        $subjects = Subject::where('category_id', $id)->get();

        return view('category.show', compact('category', 'subjects'));
    }
}
