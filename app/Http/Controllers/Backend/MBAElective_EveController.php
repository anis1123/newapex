<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mbaelective_eve;

class MBAElective_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    protected $limit = 5;


    public function index()
    {
        $mbaelectivepost = Mbaelective_eve::latest()->paginate($this->limit);
        $mbaelectivepostcount = Mbaelective_eve::count();

        return view("backend1.mbaelective_eve.index", compact('mbaelectivepost', 'mbaelectivepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Mbaelective_eve $post)
    {
        return view("backend1.mbaelective_eve.create", compact('post'));
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

        $request->user()->post55()->create($request->all());
        return redirect('/backend1/mbaelective_eve')->with('message', 'Your MBA Elective Plan was created successfully!');
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
        $post = Mbaelective_eve::findOrFail($id);
        return view("backend1.mbaelective_eve.edit", compact('post'));
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
        $post = Mbaelective_eve::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/mbaelective_eve')->with('message', 'Your MBA Elective Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Mbaelective_eve::findOrFail($id)->delete();
        
        return redirect('/backend1/mbaelective_eve')->with('message', 'Your MBA Elective Plan was deleted successfully!');
    }
}
