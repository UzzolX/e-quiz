<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Course;
use App\Category;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->paginate(5);
        return view('welcome', compact('categories'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function catCourse($id)
    {
        $course = Course::latest()->where('category', $id)->paginate(20);
        return view('pages.course.cat-courses', compact('course'));
    }
}
