<?php
namespace App\Http\Controllers;

class BlogController extends Controller
{
    public function index(){
        return view('index');
    }
    public function post(){
        return view('post');
    }
    public function author(){
        return view('author');
    }
}
