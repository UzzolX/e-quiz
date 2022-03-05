<?php

namespace App\Http\Controllers\Pages\Course;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    function index()
    {
        $course = Course::latest()->paginate(10);
        return view('pages.course.course-index', compact('course'));
    }

    public function singleCourse($id, Course $course)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.single-course', compact('course'));
    }
}
