<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\GeneralManagement_tt;

class GeneralManagement_TTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $generalmgmtpost = GeneralManagement_tt::latest()->paginate($this->limit);
        $generalmgmtpostcount = GeneralManagement_tt::count();

        return view("backend1.generalmgmt_tt.index", compact('generalmgmtpost', 'generalmgmtpostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GeneralManagement_tt $post)
    {
        return view("backend1.generalmgmt_tt.create", compact('post'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'credits' => 'required',
        ]);

        $request->user()->post97()->create($request->all());
        return redirect('/backend1/generalmgmt_tt')->with('message', 'Your Air Fares and Ticketing Plan was created successfully!');
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
        $post = GeneralManagement_tt::findOrFail($id);
        return view("backend1.generalmgmt_tt.edit", compact('post'));
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
        $post = GeneralManagement_tt::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/generalmgmt_tt')->with('message', 'Your Air Fares and Ticketing Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        GeneralManagement_tt::findOrFail($id)->delete();
       
        return redirect('/backend1/generalmgmt_tt')->with('message', 'Your Air Fares and Ticketing Plan was deleted successfully!');
    }
}
