<?php

namespace App\Http\Controllers;
use App\chairman_msg;
use Gate;
use DB;
use Image;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class chairmanmsgController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $chairmanmsg=chairman_msg::all();
        return view('faculty.chairmanmsg.index', compact('chairmanmsg'));
    }
        /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('faculty.chairmanmsg.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(chairman_msg::count()>0){
	        return redirect()->route('chairman_index')->with('status','Already Existed!!!');
        }else {

       if(Input::hasFile('image')){
                $image = Input::file('image');
                $filename= time() . 'chairmanmsg'.'.' . $image->getClientOriginalExtension();

               $location = public_path('upload/'. $filename);
                Image::make($image)->save($location);

            }
        $data         = $request->only('message_detail');
        $data['user_id'] = auth()->user()->id;
        $data['image'] = $filename;
        $chairmanmsg           = chairman_msg::create($data);

        return redirect()->route('chairman_index')->with('status','Message Added Sucessfully!!!');
     }

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
    public function edit(chairman_msg $chairmanmsg)
    {
        return view('faculty.chairmanmsg.edit',compact('chairmanmsg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, chairman_msg $chairmanmsg)
    {
         if(Input::hasFile('image')){
                $image = Input::file('image');
                $filename= time() . 'chairmanmsg'.'.' . $image->getClientOriginalExtension();

               $location = public_path('upload/'. $filename);
                Image::make($image)->save($location);

            }
        $data         = $request->only('message_detail');
        if(Input::hasFile('image')){
            $chairmanmsg->image=$filename;
        }        
        $chairmanmsg->fill($data)->save();
        return redirect()->route('chairman_index')->with('status','Updated Sucessfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
