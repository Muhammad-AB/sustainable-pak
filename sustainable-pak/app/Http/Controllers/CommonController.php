<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\About;
use App\Models\Business;

class CommonController extends Controller
{
    // return the home page
    public function home()
    {
        $categories = Category::all();
        $blogs = Blog::orderBy('updated_at', 'desc')->get();
        return view('Main.home', ['categories' => $categories, 'blogs' => $blogs]);
    }

    // return the categories page
    public function allCategories()
    {
        $categories = Category::paginate(6);
        return view('Main.categories', ['categories' => $categories]);
    }

    // return the all blogs page
    public function allBlogs()
    {
        $blogs = Blog::orderBy('updated_at', 'desc')->paginate(5);
        return view('Main.all_blogs', ['blogs' => $blogs]);
    }

    // return the business details page
    public function businesses($id)
    {
        $category = Category::find($id);
        $businesses = $category->businesses;
        return view('Main.all_businesses', ['businesses' => $businesses, 'category' => $category]);
    }

    // return the blog page
    public function blog($id = null)
    {
        $blog = Blog::find($id);
        // Retrieve 3 random blog suggestions excluding the current blog
        $blogSuggestions = Blog::whereNotIn('id', [$id])->inRandomOrder()->take(3)->get();
        return view('Main.blog', ['blog' => $blog, 'blogSuggestions' => $blogSuggestions]);
    }

    // return the about page
    public function about()
    {
        $about = About::first();
        return view('Main.about', ['about' => $about]);
    }
}
