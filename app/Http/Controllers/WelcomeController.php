<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('welcome', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
}
