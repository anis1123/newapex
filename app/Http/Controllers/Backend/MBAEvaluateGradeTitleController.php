<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MBAEvaluateGradeTitle;

class MBAEvaluateGradeTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $mbaevaluategradetitlepost = MBAEvaluateGradeTitle::latest()->paginate($this->limit);
        $mbaevaluategradetitlepostcount = MBAEvaluateGradeTitle::count();
        return view("backend1.mbaevaluategradetitle.index", compact('mbaevaluategradetitlepost', 'mbaevaluategradetitlepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MBAEvaluateGradeTitle $post)
    {
        return view("backend1.mbaevaluategradetitle.create", compact('post'));
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
            'body' => 'required',
        ]);

        $request->user()->post19()->create($request->all());
        return redirect('/backend1/mbaevaluategradetitle')->with('message', 'Your Title and Body was created successfully!');
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
        $post = MBAEvaluateGradeTitle::findOrFail($id);
        return view("backend1.mbaevaluategradetitle.edit", compact('post'));
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
        $post = MBAEvaluateGradeTitle::findOrFail($id);
        $data = $request->only('title', 'body');

        $post->fill($data)->save();
        return redirect('/backend1/mbaevaluategradetitle')->with('message', 'Your Title and Body was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MBAEvaluateGradeTitle::findOrFail($id)->delete();
        
        return redirect('/backend1/mbaevaluategradetitle')->with('message', 'Your Title and Body was deleted successfully!');
    }
}
