<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Graduate_eve;
use App\Curriculum_eve;
use App\Trimister1_eve;
use App\Trimister2_eve;
use App\Trimister3_eve;
use App\Trimister4_eve;
use App\Trimister5_eve;
use App\Trimister6_eve;
use App\Trimister7_eve;
use App\Trimister8_eve;
use App\Marketing_eve;
use App\HRM_eve;
use App\Finance_eve;
use App\GeneralManagement_eve;
use App\ManagementScience_eve;
use App\Concentration_eve;
use App\Mbaelectivetitle_eve;
use App\Mbaelective_eve;
use App\Mbaevaluategradetitle_eve;
use App\Mbaevaluategrade_eve;

class Graduate_EveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $graduatepost = Graduate_eve::latest()->paginate($this->limit);
        $graduatepostcount = Graduate_eve::count();

        return view("backend1.graduate_eve.index", compact('graduatepost', 'graduatepostcount'));
    }


    public function graduate1(){

        $graduatepost = Graduate_eve::orderBy('created_at', 'desc')->get();

        $curriculumpost = Curriculum_eve::orderBy('created_at', 'desc')->get();

        $trimister1post = Trimister1_eve::orderBy('created_at', 'desc')->get();

        $trimister2post = Trimister2_eve::orderBy('created_at', 'desc')->get();

        $trimister3post = Trimister3_eve::orderBy('created_at', 'desc')->get();

        $trimister4post = Trimister4_eve::orderBy('created_at', 'desc')->get();

        $trimister5post = Trimister5_eve::orderBy('created_at', 'desc')->get();

        $trimister6post = Trimister6_eve::orderBy('created_at', 'desc')->get();

        $trimister7post = Trimister7_eve::orderBy('created_at', 'desc')->get();

        $trimister8post = Trimister8_eve::orderBy('created_at', 'desc')->get();

        $marketingpost = Marketing_eve::orderBy('created_at', 'desc')->get();

        $financepost = Finance_eve::orderBy('created_at', 'desc')->get();

        $hrmpost = HRM_eve::orderBy('created_at', 'desc')->get();

        $generalmgmtpost = GeneralManagement_eve::orderBy('created_at', 'desc')->get();

        $mgmtsciencepost = ManagementScience_eve::orderBy('created_at', 'desc')->get();

        $concentrationpost = Concentration_eve::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = Mbaelectivetitle_eve::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = Mbaelective_eve::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = Mbaevaluategradetitle_eve::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = Mbaevaluategrade_eve::orderBy('created_at', 'asc')->get();

        return view("mbaEve", [
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
    public function create(Graduate_eve $post)
    {
        return view("backend1.graduate_eve.create", compact('post'));
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

        $request->user()->post38()->create($request->all());
        return redirect('/backend1/graduate_eve')->with('message', 'Your graduate program was created successfully!');
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
        $post = Graduate_eve::findOrFail($id);
        return view("backend1.graduate_eve.edit", compact('post'));
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
        $post = Graduate_eve::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate_eve')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Graduate_eve::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate_eve')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
