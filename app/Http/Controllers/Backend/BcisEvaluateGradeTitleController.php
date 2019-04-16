<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bcisevaluategradetitle;

class BcisEvaluateGradeTitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $bcisevaluategradetitlepost = Bcisevaluategradetitle::latest()->paginate($this->limit);
        $bcisevaluategradetitlepostcount = Bcisevaluategradetitle::count();

        return view("backend1.bcisevaluategradetitle.index", compact('bcisevaluategradetitlepost', 'bcisevaluategradetitlepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Bcisevaluategradetitle $post)
    {
        return view("backend1.bcisevaluategradetitle.create", compact('post'));
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

        $request->user()->post36()->create($request->all());
        return redirect('/backend1/bcisevaluategradetitle')->with('message', 'Your Title and Body was created successfully!');
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
        $post = Bcisevaluategradetitle::findOrFail($id);
        return view("backend1.bcisevaluategradetitle.edit", compact('post'));
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
        $post = Bcisevaluategradetitle::findOrFail($id);
        $data = $request->only('title', 'body');

        $post->fill($data)->save();
        return redirect('/backend1/bcisevaluategradetitle')->with('message', 'Your Title and Body was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bcisevaluategradetitle::findOrFail($id)->delete();
        
        return redirect('/backend1/bcisevaluategradetitle')->with('message', 'Your Title and Body was deleted successfully!');
    }
}
