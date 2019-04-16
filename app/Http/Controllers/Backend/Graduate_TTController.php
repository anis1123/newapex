<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\TtGraduate;
use App\Curriculum_tt;
use App\Semister1_tt;
use App\Semister2_tt;
use App\Semister3_tt;
use App\Semister4_tt;
use App\Semister5_tt;
use App\Semister6_tt;
use App\Semister7_tt;
use App\Semister8_tt;
use App\Marketing_tt;
use App\HRM_tt;
use App\Finance_tt;
use App\GeneralManagement_tt;
use App\Concentration_tt;
use App\Ttelectivetitle;
use App\Ttelective;
use App\Ttevaluategradetitle;
use App\Ttevaluategrade;

class Graduate_TTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $graduatepost = TtGraduate::latest()->paginate($this->limit);
        $graduatepostcount = TtGraduate::count();

        return view("backend1.graduate_tt.index", compact('graduatepost', 'graduatepostcount'));
    }

    public function graduate1(){

        $graduatepost = TtGraduate::orderBy('created_at', 'desc')->get();

        $curriculumpost = Curriculum_tt::orderBy('created_at', 'desc')->get();

        $trimister1post = Semister1_tt::orderBy('created_at', 'desc')->get();

        $trimister2post = Semister2_tt::orderBy('created_at', 'desc')->get();

        $trimister3post = Semister3_tt::orderBy('created_at', 'desc')->get();

        $trimister4post = Semister4_tt::orderBy('created_at', 'desc')->get();

        $trimister5post = Semister5_tt::orderBy('created_at', 'desc')->get();

        $trimister6post = Semister6_tt::orderBy('created_at', 'desc')->get();

        $trimister7post = Semister7_tt::orderBy('created_at', 'desc')->get();

        $trimister8post = Semister8_tt::orderBy('created_at', 'desc')->get();

        $marketingpost = Marketing_tt::orderBy('created_at', 'desc')->get();

        $financepost = Finance_tt::orderBy('created_at', 'desc')->get();

        $hrmpost = HRM_tt::orderBy('created_at', 'desc')->get();

        $generalmgmtpost = GeneralManagement_tt::orderBy('created_at', 'desc')->get();

        $concentrationpost = Concentration_tt::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = Ttelectivetitle::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = Ttelective::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = Ttevaluategradetitle::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = Ttevaluategrade::orderBy('created_at', 'asc')->get();

        return view("bba-tt", [
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
    public function create(TtGraduate $post)
    {
        return view("backend1.graduate_tt.create", compact('post'));
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

        $request->user()->post98()->create($request->all());
        return redirect('/backend1/graduate_tt')->with('message', 'Your graduate program was created successfully!');
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
        $post = TtGraduate::findOrFail($id);
        return view("backend1.graduate_tt.edit", compact('post'));
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
        $post = TtGraduate::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate_tt')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TtGraduate::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate_tt')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
