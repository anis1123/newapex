<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trimister4_eve;

class Trimister4_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;


    public function index()
    {
        $trimister4post = Trimister4_eve::latest()->paginate($this->limit);
        $trimister4postcount = Trimister4_eve::count();

        return view("backend1.trimister4_eve.index", compact('trimister4post', 'trimister4postcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trimister4_eve $post)
    {
        return view("backend1.trimister4_eve.create", compact('post'));
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

        $request->user()->post43()->create($request->all());
        return redirect('/backend1/trimister4_eve')->with('message', 'Your Trimister IV Plan was created successfully!');
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
        $post = Trimister4_eve::findOrFail($id);
        return view("backend1.trimister4_eve.edit", compact('post'));
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
        $post = Trimister4_eve::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/trimister4_eve')->with('message', 'Your Trimister IV Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trimister4_eve::findOrFail($id)->delete();
        
        return redirect('/backend1/trimister4_eve')->with('message', 'Your Trimister IV Plan was deleted successfully!');
    }
}
