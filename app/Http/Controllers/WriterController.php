<?php

namespace App\Http\Controllers;

use App\Models\Writer;

class WriterController extends Controller
{
    public function index()
    {
        $writers = Writer::all();
        return view('writer.index', compact('writers'));
    }

    public function show($id)
    {
        $writer = Writer::with('articles')->findOrFail($id);
        return view('writer.show', compact('writer'));
    }
}
