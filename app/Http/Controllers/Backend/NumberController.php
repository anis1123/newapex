<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Number;

class NumberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;


    public function index()
    {
        $numberpost = Number::latest()->paginate($this->limit);
        $numberpostcount = Number::count();
        return view("backend1.number.index", compact('numberpost', 'numberpostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Number $post)
    {
        return view("backend1.number.create", compact('post'));
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
            'academic' => 'required',
            'faculty' => 'required',
            'event' => 'required',
            'alumini' => 'required',
        ]);

        $request->user()->post21()->create($request->all());
        return redirect('/backend1/number')->with('message', 'Your Number was added successfully!');
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
        $post = Number::findOrFail($id);
        return view("backend1.number.edit", compact('post'));
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
        $post = Number::findOrFail($id);
        $data = $request->only('academic', 'faculty', 'event', 'alumini');

        $post->fill($data)->save();
        return redirect('/backend1/number')->with('message', 'Your Number was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Number::findOrFail($id)->delete();
        
        return redirect('/backend1/number')->with('message', 'Your Number was deleted successfully!');
    }

    
}
