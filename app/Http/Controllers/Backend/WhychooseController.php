<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Whychoose;

class WhychooseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $whychoosepost = Whychoose::latest()->paginate($this->limit);
        $whychoosepostcount = Whychoose::count();
        return view("backend1.whychoose.index", compact('whychoosepost', 'whychoosepostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Whychoose $post)
    {
        return view("backend1.whychoose.create", compact('post'));
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

        $request->user()->post20()->create($request->all());
        return redirect('/backend1/whychoose')->with('message', 'Your Title and Body was created successfully!');
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
        $post = Whychoose::findOrFail($id);
        return view("backend1.whychoose.edit", compact('post'));
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
        $post = Whychoose::findOrFail($id);
        $data = $request->only('title', 'body');

        $post->fill($data)->save();
        return redirect('/backend1/whychoose')->with('message', 'Your Title and Body was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Whychoose::findOrFail($id)->delete();
        
        return redirect('/backend1/whychoose')->with('message', 'Your Title and Body was deleted successfully!');
    }
}
