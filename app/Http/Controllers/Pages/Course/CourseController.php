<?php

namespace App\Http\Controllers\Pages\Course;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    function index()
    {
        return view('pages.course.course-index');
    }
}
