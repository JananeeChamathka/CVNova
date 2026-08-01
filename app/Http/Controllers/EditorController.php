<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EditorController extends Controller
{
    public function index(Request $request, ?string $template = null)
    {
        $templates = ['t1', 't2', 't3', 't4', 't5'];
        $selected = in_array($template, $templates, true) ? $template : 't2';

        return view('editor', compact('selected', 'templates'));
    }
}
