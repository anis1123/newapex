<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trimister7_eve;

class Trimister7_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;


    public function index()
    {
        $trimister7post = Trimister7_eve::latest()->paginate($this->limit);
        $trimister7postcount = Trimister7_eve::count();

        return view("backend1.trimister7_eve.index", compact('trimister7post', 'trimister7postcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trimister7_eve $post)
    {
        return view("backend1.trimister7_eve.create", compact('post'));
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

        $request->user()->post46()->create($request->all());
        return redirect('/backend1/trimister7_eve')->with('message', 'Your Trimister VII Plan was created successfully!');
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
        $post = Trimister7_eve::findOrFail($id);
        return view("backend1.trimister7_eve.edit", compact('post'));
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
        $post = Trimister7_eve::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/trimister7_eve')->with('message', 'Your Trimister VII Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trimister7_eve::findOrFail($id)->delete();
        
        return redirect('/backend1/trimister7_eve')->with('message', 'Your Trimister VII Plan was deleted successfully!');
    }
}
