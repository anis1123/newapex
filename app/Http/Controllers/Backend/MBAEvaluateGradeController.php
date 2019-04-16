<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\MBAEvaluateGrade;

class MBAEvaluateGradeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $mbaevaluategradepost = MBAEvaluateGrade::latest()->paginate($this->limit);
        $mbaevaluategradepostcount = MBAEvaluateGrade::count();

        return view("backend1.mbaevaluategrade.index", compact('mbaevaluategradepost', 'mbaevaluategradepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(MBAEvaluateGrade $post)
    {
        return view("backend1.mbaevaluategrade.create", compact('post'));
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

        $request->user()->post18()->create($request->all());
        return redirect('/backend1/mbaevaluategrade')->with('message', 'Your MBA Evaluate and Grading was created successfully!');
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
        $post = MBAEvaluateGrade::findOrFail($id);
        return view("backend1.mbaevaluategrade.edit", compact('post'));
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
        $post = MBAElecitve::findOrFail($id);
        $data = $request->only('grade','cgpa','description');

        $post->fill($data)->save();
        return redirect('/backend1/mbaevaluategrade')->with('message', 'Your MBA Evaluation and Grading was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MBAElecitve::findOrFail($id)->delete();
        
        return redirect('/backend1/mbaevaluategrade')->with('message', 'Your MBA Evaluation and Grading was deleted successfully!');
    }
}
