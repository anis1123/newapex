<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Graduate;
use App\curriculum;
use App\Trimister1;
use App\Trimister2;
use App\Trimister3;
use App\Trimister4;
use App\Trimister5;
use App\Trimister6;
use App\Marketing;
use App\HRM;
use App\Finance;
use App\GeneralManagement;
use App\ManagementScience;
use App\ConcentrationMBATitle;
use App\MBAElectiveTitle;
use App\MBAElective;
use App\MBAEvaluateGradeTitle;
use App\MBAEvaluateGrade;

class GraduateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     protected $limit = 5;



    public function index()
    {
        $graduatepost = Graduate::latest()->paginate($this->limit);
        $graduatepostcount = Graduate::count();

        return view("backend1.graduate.index", compact('graduatepost', 'graduatepostcount'));
    }

    public function graduate1(){

        $graduatepost = Graduate::orderBy('created_at', 'desc')->get();

        $curriculumpost = curriculum::orderBy('created_at', 'desc')->get();

        $trimister1post = Trimister1::orderBy('created_at', 'desc')->get();

        $trimister2post = Trimister2::orderBy('created_at', 'desc')->get();

        $trimister3post = Trimister3::orderBy('created_at', 'desc')->get();

        $trimister4post = Trimister4::orderBy('created_at', 'desc')->get();

        $trimister5post = Trimister5::orderBy('created_at', 'desc')->get();

        $trimister6post = Trimister6::orderBy('created_at', 'desc')->get();

        $marketingpost = Marketing::orderBy('created_at', 'desc')->get();

        $financepost = Finance::orderBy('created_at', 'desc')->get();

        $hrmpost = HRM::orderBy('created_at', 'desc')->get();

        $generalmgmtpost = GeneralManagement::orderBy('created_at', 'desc')->get();

        $mgmtsciencepost = ManagementScience::orderBy('created_at', 'desc')->get();

        $concentrationpost = ConcentrationMBATitle::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = MBAElectiveTitle::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = MBAElective::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = MBAEvaluateGradeTitle::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = MBAEvaluateGrade::orderBy('created_at', 'asc')->get();

        return view("mba", [
            'graduatepost'=>$graduatepost, 
            'curriculumpost'=>$curriculumpost, 
            'trimister1post'=>$trimister1post, 
            'trimister2post'=>$trimister2post, 
            'trimister3post'=>$trimister3post, 
            'trimister4post'=>$trimister4post, 
            'trimister5post'=>$trimister5post, 
            'trimister6post'=>$trimister6post, 
            'marketingpost'=>$marketingpost, 
            'financepost'=>$financepost,
            'hrmpost'=>$hrmpost, 
            'generalmgmtpost'=>$generalmgmtpost, 
            'mgmtsciencepost'=>$mgmtsciencepost,
            'concentrationpost'=>$concentrationpost,
            'mbaelectiveposttitle'=>$mbaelectiveposttitle,
            'mbaelectivepost'=>$mbaelectivepost,
            'mbaevaluateposttitle'=>$mbaevaluateposttitle,
            'mbaevaluatepost'=>$mbaevaluatepost,
            
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Graduate $post)
    {
        return view("backend1.graduate.create", compact('post'));
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
            'body' => 'required',
        ]);

        $request->user()->post2()->create($request->all());
        return redirect('/backend1/graduate')->with('message', 'Your graduate program was created successfully!');
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
        $post = Graduate::findOrFail($id);
        return view("backend1.graduate.edit", compact('post'));
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
        $post = Graduate::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Graduate::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
