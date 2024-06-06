<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;

class BlogController extends Controller
{
    // Function to display all blogs and categories
    public function blog(){
        $blogs = Blog::all();
        $categories = Category::all();
        return view('blog', compact('blogs', 'categories'));
    }
    public function show($id)
{
    // Function to display a single blog by its ID

    $blog = Blog::findOrFail($id);
    return view('singleblog', compact('blog'));
}

   // Function to list all blogs
    public function index()
    {
        $blogs = Blog::all();
        return view('pages.blogs', compact('blogs'));
    }

    // Function to show the form for creating a new blog
    public function create()
    {
        $categories = Category::all();
        return view('pages.addblog', compact('categories'));
    }

     // Function to store a new blog
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ]);

        // Create a new blog instance and fill it with the validated data
        $blog = new Blog();
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        
        // Save the created blog entry to the database
        $blog->save();

        // Redirect to a relevant page after successful save
        return redirect()->route('blogs')->with('success', 'Blog added successfully!');
    }

   // Function to show the form for editing a blog
    public function edit($id)
    {
        $blog = Blog::findOrFail($id);
        $categories = Category::all();
        return view('pages.blogEdit', compact('blog', 'categories'));
    }

    // Function to update a blog
    public function update(Request $request, $id)
    {
       // Validate the incoming request data
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'description' => 'required|string',
        ]);

        // Find the blog by ID
        $blog = Blog::findOrFail($id);

         // Update the blog with the provided data
        $blog->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'description' => $request->description,
        ]);

        // Redirect to a relevant page after successful update
        return redirect()->route('blogs')->with('success', 'Blog updated successfully!');
    }
    // Function to delete a blog
    public function destroy($id)
    {
      // Find the blog by ID and delete it
        $blog = Blog::findOrFail($id);
        $blog->delete();
        
       // Redirect to a relevant page after successful deletion
        return redirect()->route('blogs')->with('success', 'Blog deleted successfully!');
    }
}
