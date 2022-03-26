<?php

namespace App\Http\Controllers\Frontend;

use App\Domain\Blog\Models\Blog;
use App\Domain\Business\Models\Client;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('frontend.blog.index')->with([
            'blog'      => Blog::select(['id','title','description'])->with('media')->paginate(),
            'clients'   => Client::latestClients(),
        ]);
    }
    public function show(Blog $blog)
    {

        return view('frontend.blog.show')->with([
            'post' => $blog,
            'clients'   => Client::latestClients(),
            'similarPosts' => Blog::select(['id','title','description'])->with('media')->where('id','!=',$blog->id)->where('category_id',$blog->category_id)->limit(3)->get(),
        ]);
    }
}
