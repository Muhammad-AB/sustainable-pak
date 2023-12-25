<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Blog;
use App\Models\About;
use App\Models\Business;

class CommonController extends Controller
{
    public function home(Request $request)
    {
        $categories = Category::all();
        $blogs = Blog::all();
        return view('Main.home', ['categories' => $categories, 'blogs' => $blogs]);
    }

    public function allCategories(Request $request)
    {
        $categories = Category::all();
        return view('Main.my_all_categories', ['categories' => $categories]);
    }

    public function allBlogs(Request $request)
    {
        $blogs = Blog::all();
        return view('Main.my_all_blogs', ['blogs' => $blogs]);
    }

    public function businesses($id)
    {
        $businesses = Category::find($id)->businesses;
        return view('Main.my_business_list', ['businesses' => $businesses]);
    }

    public function blog(Request $request, $id)
    {
        $blog = Blog::find($id);
        return view('Main.my_blog', ['blog' => $blog]);
    }

    public function about(Request $request)
    {
        $about = About::all();
        return view('Main.my_about', ['about' => $about]);
    }
}