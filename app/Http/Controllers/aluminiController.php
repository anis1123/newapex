<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumini;

class aluminiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alumini = alumini::paginate(10);
        return view('alumini.alumini', compact('alumini'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,array(

            'name'=>'required',
            'email'=>'required',
            'program'=>'required',
            'year'=>'required',
            'occupation'=>'required',
            'sector'=>'required',
            'phone'=>'required',


        ));
            $data         = $request->only('name', 'email','program','year','occupation','sector','phone');
            $alumini            = alumini::create($data);
            return redirect()->route('showalumini')->with('message','Alumini Added!!!');
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
    public function edit(alumini $alumini)
    {
          return view ('alumini.edit',compact('alumini'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, alumini $alumini)
    {
            $data         = $request->only('name', 'email','program','year','occupation','sector','phone');
            $alumini->fill($data)->save();
            return redirect()->route('showalumini')->with('message','Edited Alumini!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        alumini::destroy($id);
        return back()->with('message','Deleted Sucessfully!!!');
    }
    public function frontendalumini(Request $request)
    {
       $this->validate($request,array(

            'name'=>'required',
            'email'=>'required',
            'program'=>'required',
            'year'=>'required',
            'occupation'=>'required',
            'sector'=>'required',
            'phone'=>'required',


        ));
            $data         = $request->only('name', 'email','program','year','occupation','sector','phone');
            $alumini            = alumini::create($data);
            return view('acs');
    }
}
