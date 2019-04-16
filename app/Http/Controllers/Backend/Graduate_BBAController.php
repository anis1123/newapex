<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BbaGraduate;
use App\Curriculum_bba;
use App\Semister1_bba;
use App\Semister2_bba;
use App\Semister3_bba;
use App\Semister4_bba;
use App\Semister5_bba;
use App\Semister6_bba;
use App\Semister7_bba;
use App\Semister8_bba;
use App\Marketing_bba;
use App\HRM_bba;
use App\Finance_bba;
use App\GeneralManagement_bba;
use App\ManagementScience_bba;
use App\Concentration_bba;
use App\Bbaelectivetitle;
use App\Bbaelective;
use App\Bbaevaluategradetitle;
use App\Bbaevaluategrade;

class Graduate_BBAController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $graduatepost = BbaGraduate::latest()->paginate($this->limit);
        $graduatepostcount = BbaGraduate::count();

        return view("backend1.graduate_bba.index", compact('graduatepost', 'graduatepostcount'));
    }

    public function graduate1(){

        $graduatepost = BbaGraduate::orderBy('created_at', 'desc')->get();

        $curriculumpost = Curriculum_bba::orderBy('created_at', 'desc')->get();

        $trimister1post = Semister1_bba::orderBy('created_at', 'desc')->get();

        $trimister2post = Semister2_bba::orderBy('created_at', 'desc')->get();

        $trimister3post = Semister3_bba::orderBy('created_at', 'desc')->get();

        $trimister4post = Semister4_bba::orderBy('created_at', 'desc')->get();

        $trimister5post = Semister5_bba::orderBy('created_at', 'desc')->get();

        $trimister6post = Semister6_bba::orderBy('created_at', 'desc')->get();

        $trimister7post = Semister7_bba::orderBy('created_at', 'desc')->get();

        $trimister8post = Semister8_bba::orderBy('created_at', 'desc')->get();

        $marketingpost = Marketing_bba::orderBy('created_at', 'desc')->get();

        $financepost = Finance_bba::orderBy('created_at', 'desc')->get();

        $hrmpost = HRM_bba::orderBy('created_at', 'desc')->get();

        $generalmgmtpost = GeneralManagement_bba::orderBy('created_at', 'desc')->get();

        $mgmtsciencepost = ManagementScience_bba::orderBy('created_at', 'desc')->get();

        $concentrationpost = Concentration_bba::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = Bbaelectivetitle::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = Bbaelective::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = Bbaevaluategradetitle::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = Bbaevaluategrade::orderBy('created_at', 'asc')->get();

        return view("bba", [
            'graduatepost'=>$graduatepost, 
            'curriculumpost'=>$curriculumpost, 
            'trimister1post'=>$trimister1post, 
            'trimister2post'=>$trimister2post, 
            'trimister3post'=>$trimister3post, 
            'trimister4post'=>$trimister4post, 
            'trimister5post'=>$trimister5post, 
            'trimister6post'=>$trimister6post, 
            'trimister7post'=>$trimister7post,
            'trimister8post'=>$trimister8post,
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
    public function create(BbaGraduate $post)
    {
        return view("backend1.graduate_bba.create", compact('post'));
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

        $request->user()->post59()->create($request->all());
        return redirect('/backend1/graduate_bba')->with('message', 'Your graduate program was created successfully!');
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
        $post = BbaGraduate::findOrFail($id);
        return view("backend1.graduate_bba.edit", compact('post'));
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
        $post = BbaGraduate::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate_bba')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BbaGraduate::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate_bba')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
