<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Post;


class PostController extends Controller
{
    public function index(Post $postModel){
        //$posts = Post::all();
//        $posts = Post::latest('published_at')
//            ->where('published_at','<=',Carbon::now())
//            ->get();
        $posts = $postModel->getPublishedPosts();
        return view('post.index',['posts' => $posts]);
    }
    public function unpublished(Post $postModel){
        $posts = $postModel->getUnPublishedPosts();
        return view('post.index',['posts' => $posts]);
    }
    public function create(){

    }
    public function store(){

    }
    public function show($id){

    }
    public function edit($id){

    }
    public function update($id){

    }
    //
}
