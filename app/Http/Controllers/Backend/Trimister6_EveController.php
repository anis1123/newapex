<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Trimister6_eve;

class Trimister6_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;


    public function index()
    {
        $trimister6post = Trimister6_eve::latest()->paginate($this->limit);
        $trimister6postcount = Trimister6_eve::count();

        return view("backend1.trimister6_eve.index", compact('trimister6post', 'trimister6postcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Trimister6_eve $post)
    {
        return view("backend1.trimister6_eve.create", compact('post'));
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

        $request->user()->post45()->create($request->all());
        return redirect('/backend1/trimister6_eve')->with('message', 'Your Trimister VI Plan was created successfully!');
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
        $post = Trimister6_eve::findOrFail($id);
        return view("backend1.trimister6_eve.edit", compact('post'));
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
        $post = Trimister6_eve::findOrFail($id);
        $data = $request->only('title','credits');

        $post->fill($data)->save();
        return redirect('/backend1/trimister6_eve')->with('message', 'Your Trimister VI Plan was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Trimister6_eve::findOrFail($id)->delete();
        
        return redirect('/backend1/trimister6_eve')->with('message', 'Your Trimister VI Plan was deleted successfully!');
    }
}
