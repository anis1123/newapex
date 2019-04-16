<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\curriculum;
use App\Http\Requests;
use Intervention\Image\Facades\Image;

class CurriculumController extends Controller
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
        $curriculumpost = curriculum::latest()->paginate($this->limit);
        $curriculumpostcount = curriculum::count();

        return view("backend1.curriculum.index", compact('curriculumpost', 'curriculumpostcount'));
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
    public function create(curriculum $post)
    {
        return view("backend1.curriculum.create", compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CurriculumRequest $request)
    {
        $data = $this->handleRequest($request);

        $request->user()->post3()->create($data);

        return redirect('/backend1/curriculum')->with('message', 'Your curriculum was created successfully!');
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
        $post = curriculum::findOrFail($id);
        return view("backend1.curriculum.edit", compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Requests\CurriculumRequest $request, $id)
    {
        $post = curriculum::findOrFail($id);
        $data = $this->handleRequest($request);
        $post->update($data);
        
        return redirect('/backend1/curriculum')->with('message', 'Your curriculum was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        curriculum::findOrFail($id)->delete();
       
        return redirect('/backend1/curriculum')->with('message', 'Your curriculum was deleted successfully!');
    }
}
