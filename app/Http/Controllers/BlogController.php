<?php
namespace App\Http\Controllers;

use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
        $postsAll=Post::all();
        $yangilari=Post::orderBy('updated_at', 'DESC')->get();
        return view('index',[
            'allposts'=>$postsAll,
            'yangiposts'=>$yangilari
        ]);
    }
    public function post(){
        return view('post');
    }
    public function author(){
        return view('author');
    }
    public function singe($id){

        $yangilari=Post::orderBy('updated_at', 'DESC')->get();
        $post=Post::find($id);
        return view('post',[
            'post'=>$post,
            'all'=>$yangilari,
        ]);
    }
}
