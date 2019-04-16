<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\ManagementScience_bba;

class Mgmtscience_BBAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $mgmtsciencepost = ManagementScience_bba::latest()->paginate($this->limit);
        $mgmtsciencepostcount = ManagementScience_bba::count();

        return view("backend1.mgmtscience_bba.index", compact('mgmtsciencepost', 'mgmtsciencepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ManagementScience_bba $post)
    {
        return view("backend1.mgmtscience_bba.create", compact('post'));
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

        $request->user()->post74()->create($request->all());
        return redirect('/backend1/mgmtscience_bba')->with('message', 'Your Management Science and Systems Plan was created successfully!');
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
        $post = ManagementScience_bba::findOrFail($id);
        return view("backend1.mgmtscience_bba.edit", compact('post'));
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
        $post = ManagementScience_bba::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/mgmtscience_bba')->with('message', 'Your Management Science and Systems Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ManagementScience_bba::findOrFail($id)->delete();
        
        return redirect('/backend1/mgmtscience_bba')->with('message', 'Your Management Science and Systems Plan was deleted successfully!');
    }
}
