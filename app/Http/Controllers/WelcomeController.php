<?php

namespace App\Http\Controllers;
use App\Post;
use App\general;
use DB;
use Illuminate\Http\Request;
use App\Whychoose;
use App\Number;

class WelcomeController extends Controller
{
    public function index()
    {
        $posts = Post::where('published', true)->paginate(20);
        $image = general::paginate(6);
        $whychoosepost = Whychoose::orderBy('created_at', 'desc')->get();
        $numberpost = Number::orderBy('created_at', 'desc')->get();

        return view('welcome',['posts'=>$posts,'image'=>$image,'whychoosepost'=>$whychoosepost,'numberpost'=>$numberpost]);




    }

    public function blog(){
        // $posts = Post::where('published', true)->;
        $posts = DB::table('posts')
        ->join('users','user_id', '=' , 'users.id')
        ->select('posts.*','users.name')->where('published', true)->paginate(3);
        $archives = DB::table('posts')->orderBy('id', 'DESC')->where('published', true)->take(5)->get();



        return view('blog',['posts'=>$posts,'link'=>$archives]);
    }

}
