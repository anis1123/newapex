<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\BcisGraduate;
use App\Curriculum_bcis;
use App\Semister1_bcis;
use App\Semister2_bcis;
use App\Semister3_bcis;
use App\Semister4_bcis;
use App\Semister5_bcis;
use App\Semister6_bcis;
use App\Semister7_bcis;
use App\Semister8_bcis;
use App\Concentration_bcis;
use App\Bciselectivetitle;
use App\Bciselective;
use App\Bcisevaluategradetitle;
use App\Bcisevaluategrade;

class Graduate_BCISController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    protected $limit = 5;

    public function index()
    {
        $bcis_gra_post = BcisGraduate::latest()->paginate($this->limit);
        $bcis_gra_postcount = BcisGraduate::count();

        return view("backend1.graduate_bcis.index", compact('bcis_gra_post', 'bcis_gra_postcount'));
    }



    public function graduate1(){

        $graduatepost = BcisGraduate::orderBy('created_at', 'desc')->get();

        $curriculumpost = Curriculum_bcis::orderBy('created_at', 'desc')->get();

        $trimister1post = Semister1_bcis::orderBy('created_at', 'desc')->get();

        $trimister2post = Semister2_bcis::orderBy('created_at', 'desc')->get();

        $trimister3post = Semister3_bcis::orderBy('created_at', 'desc')->get();

        $trimister4post = Semister4_bcis::orderBy('created_at', 'desc')->get();

        $trimister5post = Semister5_bcis::orderBy('created_at', 'desc')->get();

        $trimister6post = Semister6_bcis::orderBy('created_at', 'desc')->get();

        $trimister7post = Semister7_bcis::orderBy('created_at', 'desc')->get();

        $trimister8post = Semister8_bcis::orderBy('created_at', 'desc')->get();

        $concentrationpost = Concentration_bcis::orderBy('created_at', 'desc')->get();

        $mbaelectiveposttitle = Bciselectivetitle::orderBy('created_at', 'desc')->get();

        $mbaelectivepost = Bciselective::orderBy('created_at', 'desc')->get();

        $mbaevaluateposttitle = Bcisevaluategradetitle::orderBy('created_at', 'desc')->get();

        $mbaevaluatepost = Bcisevaluategrade::orderBy('created_at', 'asc')->get();

        return view("bcis", [
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
    public function create(BcisGraduate $post)
    {
        return view("backend1.graduate_bcis.create", compact('post'));
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

        $request->user()->post22()->create($request->all());
        return redirect('/backend1/graduate_bcis')->with('message', 'Your graduate program was created successfully!');
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
        $post = BcisGraduate::findOrFail($id);
        return view("backend1.graduate_bcis.edit", compact('post'));
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
        $post = BcisGraduate::findOrFail($id);
        $data = $request->only('body');

        $post->fill($data)->save();
        return redirect('/backend1/graduate_bcis')->with('message', 'Your Graduate Program was updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BcisGraduate::findOrFail($id)->delete();
       
        return redirect('/backend1/graduate_bcis')->with('message', 'Your Graduate Program was deleted successfully!');
    }
}
