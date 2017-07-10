<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use Illuminate\Support\Facades\DB;

use App\Models\Blog;


class BlogController extends Controller
{
    public function index()
    {
    	$blogs = Blog::all();
    	//dd($blogs);
    	return view('blog/home', ['blog' => $blogs]);
    }

    public function show($id)
    {
    	//$nilai = 'nilainya adalah ' . $id;
    	//$user  = 'Rofiuddin';
    	// metode pengambilan data teknik database query builder.
    	//$users = DB::table('users')->get();
    	//$users = DB::table('users')->where('username','like', '%i%')->get();

    	//$unescaped = '<script>alert("OK!")</script>';

    	//return view('blog/single', ['data' => $nilai, 'users' => $users, 'unescaped' => $unescaped]);
    	//return view('blog/single', ['data' => $nilai, 'users' => $users]);
    	$blogs = Blog::find($id);
    	//dd($blogs);
    	return view('blog/single', ['blog' => $blogs]);
    }

}
