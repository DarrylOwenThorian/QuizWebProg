<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Article;

class SubjectController extends Controller
{
    public function show($id)
    {
        $subject = Subject::with('category')->findOrFail($id);
        $article = Article::where('subject_id', $id)->first();

        return view('subject.show', compact('subject', 'article'));
    }
}
