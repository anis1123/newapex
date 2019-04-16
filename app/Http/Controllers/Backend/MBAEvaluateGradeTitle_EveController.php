<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mbaevaluategradetitle_eve;

class MBAEvaluateGradeTitle_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $mbaevaluategradetitlepost = Mbaevaluategradetitle_eve::latest()->paginate($this->limit);
        $mbaevaluategradetitlepostcount = Mbaevaluategradetitle_eve::count();
        return view("backend1.mbaevaluategradetitle_eve.index", compact('mbaevaluategradetitlepost', 'mbaevaluategradetitlepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mbaevaluategradetitle_eve $post)
    {
        return view("backend1.mbaevaluategradetitle_eve.create", compact('post'));
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

        $request->user()->post57()->create($request->all());
        return redirect('/backend1/mbaevaluategradetitle_eve')->with('message', 'Your Title and Body was created successfully!');
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
        $post = Mbaevaluategradetitle_eve::findOrFail($id);
        return view("backend1.mbaevaluategradetitle_eve.edit", compact('post'));
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
        $post = Mbaevaluategradetitle_eve::findOrFail($id);
        $data = $request->only('title', 'body');

        $post->fill($data)->save();
        return redirect('/backend1/mbaevaluategradetitle_eve')->with('message', 'Your Title and Body was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mbaevaluategradetitle_eve::findOrFail($id)->delete();
        
        return redirect('/backend1/mbaevaluategradetitle_eve')->with('message', 'Your Title and Body was deleted successfully!');
    }
}
