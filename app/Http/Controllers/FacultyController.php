<?php

namespace App\Http\Controllers;
use App\faculty;
use App\UpcomingEvent;
use App\chairman_msg;
use Gate;
use DB;
use Image;
use Illuminate\Support\Facades\Input;

use Illuminate\Http\Request;

class FacultyController extends Controller
{
    Public function all(){

        return view('faculty.facultyback');
    }

    public function index()
    {
     
    }

    public function create()
    {
        return view('faculty.add');
    }
    public function edit(faculty $faculty)
    {
       return view('faculty.edit', compact('faculty'));
    }

    public function add(Request $request)
    {
        $this->validate($request,array(

            'name'=>'required',
            'post'=>'required',
            'qualification'=>'required',
            'image'=>'required|image|max:1999',
            'bio'=>'required',


        ));
        if(Input::hasFile('image')){
                $image = Input::file('image');

                $filename = time() . 'faculty'.'.' . $image->getClientOriginalExtension();

               $location = public_path('upload/'. $filename);
                Image::make($image)->save($location);



            }
            $data         = $request->only('name', 'post','qualification','bio');
            $data['user_id'] = auth()->user()->id;
            $data['image'] = $filename;
            $faculty            = faculty::create($data);

            return redirect()->route('facultybackend')->with('message','Faculty Added!!!');
    }
    public function update(faculty $faculty, Request $request)
    {
        
        if(Input::hasFile('image')){
                $image = Input::file('image');
                $filename= time() . 'faculty'.'.' . $image->getClientOriginalExtension();

               $location = public_path('upload/'. $filename);
                Image::make($image)->save($location);



            }
        $data         = $request->only('name','qualification','bio','post');
        if(Input::hasFile('image')){
        $faculty->image=$filename;
        }        
        $faculty->fill($data)->save();
        return redirect()->route('facultybackend')->with('message','Updated Sucessfully!!!');
    }
    Public function delete($id){
        faculty::destroy($id);
        return back()->with('message','Deleted Sucessfully!!!');
    }

    public function faculty(){
        $upcomingpost=UpcomingEvent::all();
        $chairmanmsg=chairman_msg::all();
        $facultyprogram=faculty::where('post', ["program head",""])->paginate(5);

        $facultyfulltime=faculty::whereIn('post', ["Full Time Faculty","BBA-TT Program Head","BBA-BI Program Head","BBA Program Head","BCIS Program Head","MBA Evening Program Coordinator","Associate Director Graduate Program","Head-Apex Career Services","Associate Director Undergraduate Program","Head-Communication Department"])->paginate(7);
        $facultyvisiting=faculty::where('post', "Visiting Faculty")->paginate(7);
        $facultyadmin=faculty::whereIn('post', ["Administration","Examination Department","MIS","Apex Career Service","Lab and Maintenance","Accounts","Finance and Administration","Server","Library"])->paginate(7);
        $facultymain=faculty::whereIn('post', ["Principal","Vice Principal","Chairperson","Faculty Development Advisor","Director, Student Affairs","Director, Academic Affairs"])->paginate(7);
        return view('faculty', compact('facultymain','facultyfulltime','facultyvisiting','facultyadmin','facultyprogram','upcomingpost','chairmanmsg'));
    }
    public function facultyback(){
        //$facultys=faculty::where('post', "program head")->paginate(20);
        //$facultys=DB::table('faculties')->select('faculties.*')->paginate(3);
         $faculty = faculty::paginate(10);
        return view('faculty.facultyback', compact('faculty'));
    }

}
