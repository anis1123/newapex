<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\UpcomingEvent;

class UpcomingEventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;



    public function index()
    {
        $upcomingpost = UpcomingEvent::latest()->paginate($this->limit);
        $upcomingpostcount = UpcomingEvent::count();
        return view("backend1.upcomingevent.index", compact('upcomingpost', 'upcomingpostcount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(UpcomingEvent $post)
    {
        return view("backend1.upcomingevent.create", compact('post'));
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
            'upcoming_at' => 'date_format:Y-m-d H:i:s'
        ]);

        $request->user()->postsss()->create($request->all());
        return redirect('/backend1/upcomingevent')->with('message', 'Your event was created successfully!');
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
        $post = UpcomingEvent::findOrFail($id);
        return view("backend1.upcomingevent.edit", compact('post'));
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
        $post = UpcomingEvent::findOrFail($id);
        $data = $request->only('title', 'body', 'upcoming_at');

        $post->fill($data)->save();
        return redirect('/backend1/upcomingevent')->with('message', 'Your event was updated successfully!');


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        UpcomingEvent::findOrFail($id)->delete();
        
        return redirect('/backend1/upcomingevent')->with('message', 'Your event was deleted successfully!');
    }
}
