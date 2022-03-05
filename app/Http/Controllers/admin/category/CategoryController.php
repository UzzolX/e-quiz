<?php

namespace App\Http\Controllers\admin\category;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class CategoryController extends Controller
{
    public function index()
    {
        $category = Category::latest()->paginate(5);
        return view('admin.category.category-index', compact('category'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.category.category-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'image'         =>  'required|mimes:jpeg,jpg,png|max:2048',
            'content'     =>  'required'
        ]);

        $image = $request->file('image');

        $new_name = rand() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('images/category'), $new_name);

        $form_data = array(
            'title'    => $title = $request->title,
            'image'    => $new_name,
            'content'  => $request->content

        );

        Category::create($form_data);

        return redirect('dashboard/category')->with('message', 'Category created successfully.');
    }


    public function show($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category-show', compact('category'));
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);
        return view('admin.category.category-edit', compact('category'));
    }

    public function update(Request $request, $id)
    {
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->content = $request->content;
        if ($request->hasFile('image')) {
            $path = public_path('images/category' . $category->image);
            if (file_exists($path)) {
                unlink($path);
            }
            $extension = $request->image->extension();
            $fileName = Str::slug($request->title, '_') . '_' . md5(date('Y-m-d H:i:s'));
            $fileName = $fileName . '.' . $extension;
            $category->image = $fileName;
            $request->image->move('images/category/', $fileName);
        }
        $category->save();
        return redirect('dashboard/category')->with('message', 'Category is successfully updated');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect('dashboard/category')->with('message', 'Category is successfully deleted');
    }
}
