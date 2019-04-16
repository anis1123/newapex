<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use App\NewsEvent;
use App\NewsEvent1;
use App\TodayNews;
use App\UpcomingEvent;

class BlogController1 extends Controller
{
    protected $limit = 5;
    


    public function index()
    {
        $posts = NewsEvent::latest()->paginate($this->limit);
        $postCount = NewsEvent::count();
        return view("backend1.blog.index",compact('posts', 'postCount'));
        
        
    }

    public function post1(){
         $posts = NewsEvent::with('author')->orderBy('created_at', 'desc')->get();
         

         $highlightPosts = NewsEvent1::orderBy('created_at', 'desc')->get();

         $newsposts = TodayNews::orderBy('created_at', 'desc')->get();

         $upcomingpost = UpcomingEvent::orderBy('created_at', 'desc')->get();


         return view("news", ['posts'=>$posts,'highlightPosts'=>$highlightPosts, 'newsposts'=>$newsposts, 'upcomingpost'=>$upcomingpost ]);
        
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(NewsEvent $post)
    {
        return view('backend1.blog.create', compact('post'));
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\NewsEventRequest $request)
    {

        $request->user()->posts()->create($request->all());

        return redirect('/backend1/blog')->with('message', 'Your post was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = NewsEvent::findOrFail($id);
        return view("/show", compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = NewsEvent::findOrFail($id);
        return view("backend1.blog.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     //this function calls to  NewsEventRequest 
    public function update(Requests\NewsEventRequest $request, $id)
    {
        $post = NewsEvent::findOrFail($id);
        $data         = $request->only('title','slug', 'excerpt' , 'body');
       // $data['slug'] = str_slug($data['title']);
        $post->fill($data)->save();
        return redirect('/backend1/blog')->with('message', 'Your post was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewsEvent::findOrFail($id)->delete();
       
        return redirect('/backend1/blog')->with('message', 'Your post was deleted successfully!');
    }
}
