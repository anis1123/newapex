<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BiGraduate;
use App\Curriculum_bi;
use App\Semister1_bi;
use App\Semister2_bi;
use App\Semister3_bi;
use App\Semister4_bi;
use App\Semister5_bi;
use App\Semister6_bi;
use App\Semister7_bi;
use App\Semister8_bi;
use App\Concentration_bi;
use App\Bielectivetitle;
use App\Bielective;
use App\Bievaluategradetitle;
use App\Bievaluategrade;

class Graduate_BBABIController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $graduatepost = BiGraduate::latest()->paginate($this->limit);
        $graduatepostcount = BiGraduate::count();

        return view("backend1.graduate_bi.index", compact('graduatepost', 'graduatepostcount'));
    }


    public function graduate1(){

        $graduatepost = BiGraduate::orderBy('created_at', 'desc')->get();

        $curriculumpost = Curriculum_bi::orderBy('created_at', 'desc')->get();

        $trimister1post = Semister1_bi::orderBy('created_at', 'desc')->get();

        $trimister2post = Semister2_bi::orderBy('created_at', 'desc')->get();

        $trimister3post = Semister3_bi::orderBy('created_at', 'desc')->get();

        $trimister4post = Semister4_bi::orderBy('created_at', 'desc')->get();

        $trimister5post = Semister5_bi::orderBy('created_at', 'desc')->get();

        $trimister6post = Semister6_bi::orderBy('created_at', 'desc')->get();

        $trimister7post = Semister7_bi::orderBy('created_at', 'desc')->get();

        $trimister8post = Semister8_bi::orderBy('created_at', 'desc')->get();

        $concentrationpost = Concentration_bi::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = Bielectivetitle::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = Bielective::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = Bievaluategradetitle::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = Bievaluategrade::orderBy('created_at', 'asc')->get();

        return view("bba-bi", [
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
    public function create(BiGraduate $post)
    {
        return view("backend1.graduate_bi.create", compact('post'));
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

        $request->user()->post79()->create($request->all());
        return redirect('/backend1/graduate_bi')->with('message', 'Your graduate program was created successfully!');
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
        $post = BiGraduate::findOrFail($id);
        return view("backend1.graduate_bi.edit", compact('post'));
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
        $post = BiGraduate::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate_bi')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BiGraduate::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate_bi')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
