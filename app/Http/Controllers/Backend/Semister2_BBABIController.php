<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Semister2_bi;

class Semister2_BBABIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $trimister1post = Semister2_bi::latest()->paginate($this->limit);
        $trimister1postcount = Semister2_bi::count();

        return view("backend1.semister2_bi.index", compact('trimister1post', 'trimister1postcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Semister2_bi $post)
    {
        return view("backend1.semister2_bi.create", compact('post'));
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

        $request->user()->post82()->create($request->all());
        return redirect('/backend1/semister2_bi')->with('message', 'Your Semister II Plan was created successfully!');
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
        $post = Semister2_bi::findOrFail($id);
        return view("backend1.semister2_bi.edit", compact('post'));
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
        $post = Semister2_bi::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/semister2_bi')->with('message', 'Your Semister II Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Semister2_bi::findOrFail($id)->delete();
        
        return redirect('/backend1/semister2_bi')->with('message', 'Your Semister II Plan was deleted successfully!');
    }
}
