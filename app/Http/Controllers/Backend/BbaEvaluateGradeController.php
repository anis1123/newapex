<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bbaevaluategrade;

class BbaEvaluateGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $mbaevaluategradepost = Bbaevaluategrade::latest()->paginate($this->limit);
        $mbaevaluategradepostcount = Bbaevaluategrade::count();

        return view("backend1.bbaevaluategrade.index", compact('mbaevaluategradepost', 'mbaevaluategradepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bbaevaluategrade $post)
    {
        return view("backend1.bbaevaluategrade.create", compact('post'));
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
            'grade' => 'required',
            'cgpa' => 'required',
            'description' => 'required',
        ]);

        $request->user()->post78()->create($request->all());
        return redirect('/backend1/bbaevaluategrade')->with('message', 'Your BBA Evaluate and Grading was created successfully!');
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
        $post = Bbaevaluategrade::findOrFail($id);
        return view("backend1.bbaevaluategrade.edit", compact('post'));
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
        $post = Bbaevaluategrade::findOrFail($id);
        $data = $request->only('grade','cgpa','description');

        $post->fill($data)->save();
        return redirect('/backend1/bbaevaluategrade')->with('message', 'Your BBA Evaluation and Grading was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bbaevaluategrade::findOrFail($id)->delete();
        
        return redirect('/backend1/bbaevaluategrade')->with('message', 'Your BBA Evaluation and Grading was deleted successfully!');
    }
}
