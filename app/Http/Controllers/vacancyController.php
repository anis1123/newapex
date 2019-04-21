<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\vacancy;
use Gate;
use DB;
use Image;
use Illuminate\Support\Facades\Input;

class vacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vacancy=vacancy::paginate(5);
        return view('acs.index', compact('vacancy'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('acs.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            
  
        if(Input::hasFile('image')){
                $image = Input::file('image');

                $filename = time() . 'vacancy'.'.' . $image->getClientOriginalExtension();

               $location = public_path('upload/'. $filename);
                Image::make($image)->save($location);



            }
            $data         = $request->only('vacancy');
            $data['user_id'] = auth()->user()->id;
            $data['image'] = $filename;
            $vacancy            = vacancy::create($data);

            return redirect()->route('vacancy_index')->with('status','Vacancy Added!!!');
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    Public function delete($id){
        vacancy::destroy($id);
        return back()->with('status','Deleted Sucessfully!!!');
    }
    Public function vacancyfront(){
         $vacancy = vacancy::paginate(1);
        return view('acs', compact('vacancy'));
    }
}
