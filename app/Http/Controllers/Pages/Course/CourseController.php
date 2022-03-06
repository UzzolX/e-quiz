<?php

namespace App\Http\Controllers\Pages\Course;

use Illuminate\Http\Request;
use App\Course;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CourseController extends Controller
{
    function index()
    {
        // $course = Course::latest()->paginate(10);
        $course = Course::with('user')->latest()->paginate(10);
        return view('pages.course.course-index', compact('course'));
    }

    public function singleCourse($id, Course $course)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.single-course', compact('course'));
    }

    // function tutorialShow()
    // {
    //     $course = Course::latest()->paginate(10);
    //     return view('pages.course.tutorials-index', compact('course'));
    // }



    public function addCourseMetrial($id)
    {
        $course = Course::findOrFail($id);
        // $courseMetrials = DB::table('course_metrals')->get();
        $courseMetrials = DB::table('course_metrals')->where('course_id', $id)->get();
        return view('pages.course.tutorials-index', compact('course', 'courseMetrials'));
    }
}
