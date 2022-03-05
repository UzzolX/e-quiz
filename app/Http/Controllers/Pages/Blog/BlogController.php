<?php

namespace App\Http\Controllers\Pages\Blog;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    function index()
    {
        $blog = Blog::latest()->paginate(10);
        return view('pages.blog.all-blogs', compact('blog'));
    }
}
