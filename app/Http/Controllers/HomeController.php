<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Writer;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereIn('name', [
            'Data Science', 
            'Network Security'
        ])->get();

        $latestArticles = Article::latest()->take(3)->get();

        $writers = Writer::all();

        return view('home', compact('categories', 'latestArticles', 'writers'));
    }
}
