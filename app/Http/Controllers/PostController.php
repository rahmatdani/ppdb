<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;
class PostController extends Controller
{
    public function index()
    {
        return view('blog',[
            "title" => "All Post",
            "active" => "blog",
            // "posts" => Post::all()
            "posts" => Post::latest()->filter(request(['search']))->paginate(7)
        ]);
    }

    public function about()
    {
        return view('about', [
            "title" => "About",
            "active" => "about",
            "name" => "Rahmat Dani S, S.Kom,. M.Kom",
            "email" => "rahmatdani2699@gmail.com",
            "image" => "dani.jpeg"
        ]);
    }


    public function show(Post $post)
    {
        return view('post',[
            "title" => "single post",
            "active" => "blog",
            "post" => $post
        ]);
    }

    public function category(Category $category)
    {
        return view('blog',[
            "title" => "Post By Category : $category->name",
            "active" => "categories",
            "posts" => $category->posts->load('author','category')
        ]);
    }

    public function allcategory()
    {
        return view('v_category_all',[
            "title" => "Blog",
            "active" => "categories",
            "category" => Category::all()
        ]);
    }

    public function authors(User $author)
    {
        return view('blog',[
            "title" => "Post By Author $author->name",
            "active" => "author",
            "posts" => $author->posts->load('author','category')
        ]);
    }
}
