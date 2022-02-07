<?php

namespace App\Http\Controllers\admin\category;

use Illuminate\Http\Request;
use App\Category;
use App\Http\Controllers\Controller;


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
            'content'     =>  'required'
        ]);
        $form_data = array(
            'title'    => $title = $request->title,
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
