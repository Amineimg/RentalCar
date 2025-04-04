<?php

namespace App\Http\Controllers;

use App\Http\Helpers\Helpers;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){
        $defaultLanguage = Helpers::getDefaultLanguage('object');
        $posts = Blog::with(['contentload' => function($query) use($defaultLanguage){
            $query->where('language_id', $defaultLanguage->id);
        }])->where('status', 1)->orderBy('created_at', 'desc')->paginate(10);
        return view('front.blogs.index', [
            'posts'=> $posts,
        ]);
    }

    public function post($alias){

        // Get the Post
        $defaultLanguage = Helpers::getDefaultLanguage('object');

        $post = Blog::with(['contentload' => function($query) use($defaultLanguage){
            $query->where('language_id', $defaultLanguage->id);
        }])->where('alias', $alias)->first();
        // dd($post);

        $posts = Blog::with(['contentload' => function($query) use($defaultLanguage){
            $query->where('language_id', $defaultLanguage->id);
        }])->where('alias', "!=", $alias)->where('status', 1)->get();

        // dd($posts);

        if($post && $posts){
            return view('front.blogs.show', [
                'post' => $post,
                'posts' => $posts,
            ]);
        }else{
            abort(404);
        }

    }
}
