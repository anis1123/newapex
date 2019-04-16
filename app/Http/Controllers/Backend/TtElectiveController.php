<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ttelective;

class TtElectiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $mbaelectivepost = Ttelective::latest()->paginate($this->limit);
        $mbaelectivepostcount = Ttelective::count();

        return view("backend1.ttelective.index", compact('mbaelectivepost', 'mbaelectivepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Ttelective $post)
    {
        return view("backend1.ttelective.create", compact('post'));
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

        $request->user()->post110()->create($request->all());
        return redirect('/backend1/ttelective')->with('message', 'Your BBA-TT Elective Plan was created successfully!');
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
        $post = Ttelective::findOrFail($id);
        return view("backend1.ttelective.edit", compact('post'));
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
        $post = Ttelective::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/ttelective')->with('message', 'Your BBA-TT Elective Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ttelective::findOrFail($id)->delete();
        
        return redirect('/backend1/ttelective')->with('message', 'Your BBA-TT Elective Plan was deleted successfully!');
    }
}
