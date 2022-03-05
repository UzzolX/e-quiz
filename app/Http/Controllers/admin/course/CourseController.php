<?php

namespace App\Http\Controllers\admin\course;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class CourseController extends Controller
{


    public function index()
    {
        $course = Course::latest()->paginate(5);
        return view('admin.course.course-index', compact('course'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.course.course-create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'description'     =>  'required',
            'image'         =>  'required|mimes:jpeg,jpg,png|max:2048',
            'category' => 'string|max:30'
        ]);

        $image = $request->file('image');
        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/course'), $new_name);

        $form_data = array(
            'title'    => $title = $request->title,
            'description'  => $request->description,
            'image'    => $new_name,
            'category' => $request->category,
            'slug' => Str::slug($title)

        );

        Course::create($form_data);

        return redirect('dashboard/course')->with('message', 'course created successfully.');
    }

    public function show($id, Course $course)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.course-show', compact('course'));
    }



    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('admin.course.course-edit', compact('course'));
    }

    public function update(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $course->title = $request->title;
        $course->description = $request->description;
        if ($request->hasFile('image')) {
            $path = public_path('images/course' . $course->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $extension = $request->image->extension();
            $fileName = Str::slug($request->title, '_') . '_' . md5(date('Y-m-d H:i:s'));
            $fileName = $fileName . '.' . $extension;
            $course->image = $fileName;
            $request->image->move('images/course/', $fileName);
        }
        $course->save();
        return redirect('dashboard/course')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect('dashboard/course')->with('message', 'Data is successfully deleted');
    }
}
