<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {   
        $search = request()->query('query');
        if ($search){
            $post = Post::where('title', 'LIKE', "%{$search}%" )->simplePaginate(1);
        }else{
            $post = Post::simplePaginate(1);
        }
        return view('welcome')->with('categories', Category::all())->with('tags', Tag::all())->with('posts', $post);
    }
}
