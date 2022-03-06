<?php

namespace App\Http\Controllers\admin\course;

use Illuminate\Http\Request;
use App\Course;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
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



    //

    public function addCourseMetrial($id)
    {
        $course = Course::findOrFail($id);
        $courseMetrials = DB::table('course_metrals')->get();
        return view('admin.course.add-course-metrial', compact('course', 'courseMetrials'));
    }

    /**
     * metrial edit function
     * @method Get
     * $veriable $id
     */

    public function editMetrials($id)
    {
        $data = DB::table('course_metrals')->where('id', $id)->first();
        return response()->json($data);
    }



    /**
     * Get courser metrial window
     * @method post
     *
     */
    public function metrialStore(Request $request)
    {
        $metrial['topic'] = $request->topic;
        $metrial['course_id'] = $request->course_id;
        $metrial['link'] = $request->video_link;
        $metrial['status'] = $request->status;
        $metrial['type'] = $request->type;

        if ($request->hasFile('thumbnails')) {
            $image = $request->file('thumbnails');
            $new_name = rand() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images/course/thumbnails'), $new_name);
            $metrial['thumbnails'] = $new_name;
        }

        if ($request->id == '') {
            $metrial['created_at'] = Carbon::now();
            $metrial['updated_at'] = Carbon::now();
            $metrial['created_by'] = Auth::user()->id;
            $metrial['updated_by'] = Auth::user()->id;
            DB::table('course_metrals')->insert($metrial);

            return redirect()->back()->with('message', 'Data is successfully added');
        } else {

            $metrial['updated_at'] = Carbon::now();
            $metrial['updated_by'] = Auth::user()->id;

            DB::table('course_metrals')->where('id', $request->id)->update($metrial);
            return redirect()->back()->with('message', 'Data is successfully updated');
        }
    }
}
