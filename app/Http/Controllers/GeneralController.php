<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\general;
use Image;

class GeneralController extends Controller
{
    public function index(){

        $post = general::paginate(10);
        return view('uiElement.post',['posts'=>$post]);



    }

    public function create(){

        return view ('uiElement.general');



    }

    public function store(Request $request)
    {



        $user = new general;

            $user->title=$request->get('title-general');



            if(Input::hasFile('images')){
                $image = Input::file('images');

                $filename = time() . '.' . $image->getClientOriginalExtension();

               $location = public_path('upload/' . $filename);
                Image::make($image)->save($location);
                $user->image = $filename;



            }

            $user->save();




        return back()->with('success','Uploaded Successfully!');
    }
    Public function delete($id){
        general::destroy($id);

        return back()->with('delete','Deleted!!!');
    }
}
