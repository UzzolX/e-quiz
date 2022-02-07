<?php

namespace App\Http\Controllers\admin\Blogs;

use Illuminate\Http\Request;
use App\Blog;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;

class BlogsController extends Controller
{
    public function index()
    {
        $blog = Blog::latest()->paginate(5);
        return view('admin.blog.blog-index', compact('blog'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    public function create()
    {
        return view('admin.blog.blog-create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'    =>  'required',
            'content'     =>  'required',
            'category' => 'string|max:30'
        ]);

        $form_data = array(
            'title'    => $title = $request->title,
            'content'  => $request->content,
            'category' => $request->category,
            'slug' => Str::slug($title)

        );

        Blog::create($form_data);

        return redirect('dashboard/blogs')->with('message', 'Blog created successfully.');
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog-show', compact('blog'));
    }

    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        return view('admin.blog.blog-edit', compact('blog'));
    }

    public function update(Request $request, $id)
    {
        $blog = Blog::findOrFail($id);
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->save();
        return redirect('dashboard/blogs')->with('message', 'Data is successfully updated');
    }

    public function destroy($id)
    {
        $blog = Blog::findOrFail($id);
        $blog->delete();

        return redirect('dashboard/blogs')->with('message', 'Data is successfully deleted');
    }
}
