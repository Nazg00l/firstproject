<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// to use DB, use one of this two import lines. 
//use DB;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    public function index () {
        // Non-fluent
        // DB::select(['table' => 'posts', 'where' => ['id' => 1]])
        // fluent
        // DB::table()->where('id', 1)->get()
        // U can just precede DB with '\' like this '\DB::select' if 
        // you don't want to import at the top. 
        // $posts = DB::select('select * from posts');
        // $posts = DB::select('select * from posts WHERE id = 3');
        // $posts = DB::select('select * from posts WHERE id = ?', [3]);
        // $posts = DB::select('select * from posts WHERE id = :id', ['id' => 3]);
        //dd($posts);

        // Using the QueryBuilder
        $id = 2; 

        $posts = DB::table('posts')
            ->where('id', $id)
            ->get();
        
        dd($posts);

        // return view('posts/index');
    }
}
