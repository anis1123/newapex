<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Curriculum_eve;
use App\Http\Requests;
use Intervention\Image\Facades\Image;

class Curriculum_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;
    protected $uploadPath;


    public function __construct()
    {
        $this->middleware('auth');
        $this->uploadPath = public_path(config('cms.image.directory'));
    }

    public function index()
    {
        $cur_eve_post = Curriculum_eve::latest()->paginate($this->limit);
        $cur_eve_postcount = Curriculum_eve::count();

        return view("backend1.curriculum_eve.index", compact('cur_eve_post', 'cur_eve_postcount'));
    }


    public function handleRequest($request)
    {
        $data = $request->all();

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $fileName = $image->getClientOriginalName();
            
            $destination = $this->uploadPath;

            $successUploaded = $image->move($destination, $fileName);

            if ($successUploaded)
            {
                $width = config('cms.image.thumbnail.width');
                $height = config('cms.image.thumbnail.height');
                $extension = $image->getClientOriginalExtension();
                $thumbnail = str_replace(".{$extension}", "_thumb.{$extension}", $fileName);

                Image::make($destination . '/' . $fileName)
                     ->resize($width, $height)
                     ->save($destination . '/' . $thumbnail);
            }

            $data['image'] = $fileName;
        }

        return $data;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Curriculum_eve $post)
    {
        return view("backend1.curriculum_eve.create", compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\Curriculum_eveRequest $request)
    {
        $data = $this->handleRequest($request);

        $request->user()->post39()->create($data);

        return redirect('/backend1/curriculum_eve')->with('message', 'Your curriculum was created successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Curriculum_eve::findOrFail($id);
        return view("backend1.curriculum_eve.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\Curriculum_eveRequest $request, $id)
    {
        $post = Curriculum_eve::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        
        return redirect('/backend1/curriculum_eve')->with('message', 'Your curriculum was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Curriculum_eve::findOrFail($id)->delete();
       
        return redirect('/backend1/curriculum_eve')->with('message', 'Your curriculum was deleted successfully!');
    }
}
