<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','WelcomeController@index');


Route::get('/news', [
    'uses' => 'Backend\BlogController1@post1',

]);

Route::get('/blog','WelcomeController@blog');

Route::get('/faculty',function(){
    return view('inside');
});


Route::get('/mba', [
    'uses' => 'Backend\GraduateController@graduate1',
]);

Route::get('/mba-evening', [
    'uses' => 'Backend\Graduate_EveController@graduate1',
]);

Route::get('/bcis', [
    'uses' => 'Backend\Graduate_BCISController@graduate1',
]);

Route::get('/bba', [
    'uses' => 'Backend\Graduate_BBAController@graduate1',
]);

Route::get('/bba-tt', [
    'uses' => 'Backend\Graduate_TTController@graduate1',
]);

Route::get('/bba-bi', [
    'uses' => 'Backend\Graduate_BBABIController@graduate1',
]);



Route::get('/{post}', 'PostController@edit')
->name('edit_post')
->middleware('can:update-post,post');



// homepage--Routes


Route::get('/{post}',  [
    'uses' => 'Backend\BlogController1@show',
    'as' => 'blog.show'
]);









Route::get('admin',function(){
    return view('backend.index');
});




Route::get('hello',function(){
    return view('hello');
});






Route::get('terminate',[
    'middleware' => 'terminate',
    'uses' => 'RoleController@index'
]);


Route::resource('/backend1/blog', 'Backend\BlogController1', [
    'names' => [
        'create' => 'backend1.blog.create',
        'index' => 'backend1.blog.index',
        'edit' => 'backend1.blog.edit',
        'destroy' => 'backend1.blog.destroy',
        'store' => 'backend1.blog.store',
        'update' => 'backend1.blog.update',


    ]

]);

Route::resource('/backend1/heighlights', 'Backend\HighlightsController', [
    'names' => [
        'create' => 'backend1.heighlights.create',
        'index' => 'backend1.heighlights.index',
        'edit' => 'backend1.heighlights.edit',
        'destroy' => 'backend1.heighlights.destroy',
        'store' => 'backend1.heighlights.store',
        'update' => 'backend1.heighlights.update',


    ]

]);

Route::resource('/backend1/news', 'Backend\NewsController', [
    'names' => [
        'index' => 'backend1.news.index',
        'edit' => 'backend1.news.edit',
        'destroy' => 'backend1.news.destroy',
        'create' => 'backend1.news.create',
        'store' => 'backend1.news.store',
        'update' => 'backend1.news.update',
    ]


]);

Route::resource('/backend1/upcomingevent', 'Backend\UpcomingEventController', [
    'names' => [
        'index' => 'backend1.upcomingevent.index',
        'edit' => 'backend1.upcomingevent.edit',
        'destroy' => 'backend1.upcomingevent.destroy',
        'create' => 'backend1.upcomingevent.create',
        'store' => 'backend1.upcomingevent.store',
        'update' => 'backend1.upcomingevent.update',
    ]


]);

Route::resource('/backend1/graduate', 'Backend\GraduateController', [
    'names' => [
        'index' => 'backend1.graduate.index',
        'edit' => 'backend1.graduate.edit',
        'destroy' => 'backend1.graduate.destroy',
        'create' => 'backend1.graduate.create',
        'store' => 'backend1.graduate.store',
        'update' => 'backend1.graduate.update',
    ]
]);

Route::resource('/backend1/curriculum', 'Backend\CurriculumController', [
    'names' => [
        'index' => 'backend1.curriculum.index',
        'edit' => 'backend1.curriculum.edit',
        'destroy' => 'backend1.curriculum.destroy',
        'create' => 'backend1.curriculum.create',
        'store' => 'backend1.curriculum.store',
        'update' => 'backend1.curriculum.update',
    ]
]);

Route::resource('/backend1/trimister1', 'Backend\Trimister1Controller', [
    'names' => [
        'index' => 'backend1.trimister1.index',
        'edit' => 'backend1.trimister1.edit',
        'destroy' => 'backend1.trimister1.destroy',
        'create' => 'backend1.trimister1.create',
        'store' => 'backend1.trimister1.store',
        'update' => 'backend1.trimister1.update',
    ]
]);

Route::resource('/backend1/trimister2', 'Backend\Trimister2Controller', [
    'names' => [
        'index' => 'backend1.trimister2.index',
        'edit' => 'backend1.trimister2.edit',
        'destroy' => 'backend1.trimister2.destroy',
        'create' => 'backend1.trimister2.create',
        'store' => 'backend1.trimister2.store',
        'update' => 'backend1.trimister2.update',
    ]
]);

Route::resource('/backend1/trimister3', 'Backend\Trimister3Controller', [
    'names' => [
        'index' => 'backend1.trimister3.index',
        'edit' => 'backend1.trimister3.edit',
        'destroy' => 'backend1.trimister3.destroy',
        'create' => 'backend1.trimister3.create',
        'store' => 'backend1.trimister3.store',
        'update' => 'backend1.trimister3.update',
    ]
]);

Route::resource('/backend1/trimister4', 'Backend\Trimister4Controller', [
    'names' => [
        'index' => 'backend1.trimister4.index',
        'edit' => 'backend1.trimister4.edit',
        'destroy' => 'backend1.trimister4.destroy',
        'create' => 'backend1.trimister4.create',
        'store' => 'backend1.trimister4.store',
        'update' => 'backend1.trimister4.update',
    ]
]);

Route::resource('/backend1/trimister5', 'Backend\Trimister5Controller', [
    'names' => [
        'index' => 'backend1.trimister5.index',
        'edit' => 'backend1.trimister5.edit',
        'destroy' => 'backend1.trimister5.destroy',
        'create' => 'backend1.trimister5.create',
        'store' => 'backend1.trimister5.store',
        'update' => 'backend1.trimister5.update',
    ]
]);

Route::resource('/backend1/trimister6', 'Backend\Trimister6Controller', [
    'names' => [
        'index' => 'backend1.trimister6.index',
        'edit' => 'backend1.trimister6.edit',
        'destroy' => 'backend1.trimister6.destroy',
        'create' => 'backend1.trimister6.create',
        'store' => 'backend1.trimister6.store',
        'update' => 'backend1.trimister6.update',
    ]
]);

Route::resource('/backend1/marketing', 'Backend\MarketingController', [
    'names' => [
        'index' => 'backend1.marketing.index',
        'edit' => 'backend1.marketing.edit',
        'destroy' => 'backend1.marketing.destroy',
        'create' => 'backend1.marketing.create',
        'store' => 'backend1.marketing.store',
        'update' => 'backend1.marketing.update',
    ]
]);

Route::resource('/backend1/finance', 'Backend\FinanceController', [
    'names' => [
        'index' => 'backend1.finance.index',
        'edit' => 'backend1.finance.edit',
        'destroy' => 'backend1.finance.destroy',
        'create' => 'backend1.finance.create',
        'store' => 'backend1.finance.store',
        'update' => 'backend1.finance.update',
    ]
]);

Route::resource('/backend1/generalmgmt', 'Backend\GeneralmgmtController', [
    'names' => [
        'index' => 'backend1.generalmgmt.index',
        'edit' => 'backend1.generalmgmt.edit',
        'destroy' => 'backend1.generalmgmt.destroy',
        'create' => 'backend1.generalmgmt.create',
        'store' => 'backend1.generalmgmt.store',
        'update' => 'backend1.generalmgmt.update',
    ]
]);

Route::resource('/backend1/hrm', 'Backend\HRMController', [
    'names' => [
        'index' => 'backend1.hrm.index',
        'edit' => 'backend1.hrm.edit',
        'destroy' => 'backend1.hrm.destroy',
        'create' => 'backend1.hrm.create',
        'store' => 'backend1.hrm.store',
        'update' => 'backend1.hrm.update',
    ]
]);

Route::resource('/backend1/mgmtscience', 'Backend\MgmtscienceController', [
    'names' => [
        'index' => 'backend1.mgmtscience.index',
        'edit' => 'backend1.mgmtscience.edit',
        'destroy' => 'backend1.mgmtscience.destroy',
        'create' => 'backend1.mgmtscience.create',
        'store' => 'backend1.mgmtscience.store',
        'update' => 'backend1.mgmtscience.update',
    ]
]);

Route::resource('/backend1/concentration', 'Backend\ConcentrationController', [
    'names' => [
        'index' => 'backend1.concentration.index',
        'edit' => 'backend1.concentration.edit',
        'destroy' => 'backend1.concentration.destroy',
        'create' => 'backend1.concentration.create',
        'store' => 'backend1.concentration.store',
        'update' => 'backend1.concentration.update',
    ]
]);

Route::resource('/backend1/mbaelective', 'Backend\MBAElectiveController', [
    'names' => [
        'index' => 'backend1.mbaelective.index',
        'edit' => 'backend1.mbaelective.edit',
        'destroy' => 'backend1.mbaelective.destroy',
        'create' => 'backend1.mbaelective.create',
        'store' => 'backend1.mbaelective.store',
        'update' => 'backend1.mbaelective.update',
    ]
]);

Route::resource('/backend1/mbaelectivetitle', 'Backend\MBAElectiveTitleController', [
    'names' => [
        'index' => 'backend1.mbaelectivetitle.index',
        'edit' => 'backend1.mbaelectivetitle.edit',
        'destroy' => 'backend1.mbaelectivetitle.destroy',
        'create' => 'backend1.mbaelectivetitle.create',
        'store' => 'backend1.mbaelectivetitle.store',
        'update' => 'backend1.mbaelectivetitle.update',
    ]
]);

Route::resource('/backend1/mbaevaluategrade', 'Backend\MBAEvaluateGradeController', [
    'names' => [
        'index' => 'backend1.mbaevaluategrade.index',
        'edit' => 'backend1.mbaevaluategrade.edit',
        'destroy' => 'backend1.mbaevaluategrade.destroy',
        'create' => 'backend1.mbaevaluategrade.create',
        'store' => 'backend1.mbaevaluategrade.store',
        'update' => 'backend1.mbaevaluategrade.update',
    ]
]);

Route::resource('/backend1/mbaevaluategradetitle', 'Backend\MBAEvaluateGradeTitleController', [
    'names' => [
        'index' => 'backend1.mbaevaluategradetitle.index',
        'edit' => 'backend1.mbaevaluategradetitle.edit',
        'destroy' => 'backend1.mbaevaluategradetitle.destroy',
        'create' => 'backend1.mbaevaluategradetitle.create',
        'store' => 'backend1.mbaevaluategradetitle.store',
        'update' => 'backend1.mbaevaluategradetitle.update',
    ]
]);

Route::resource('/backend1/whychoose', 'Backend\WhychooseController', [
    'names' => [
        'index' => 'backend1.whychoose.index',
        'edit' => 'backend1.whychoose.edit',
        'destroy' => 'backend1.whychoose.destroy',
        'create' => 'backend1.whychoose.create',
        'store' => 'backend1.whychoose.store',
        'update' => 'backend1.whychoose.update',
    ]
]);

Route::resource('/backend1/number', 'Backend\NumberController', [
    'names' => [
        'index' => 'backend1.number.index',
        'edit' => 'backend1.number.edit',
        'destroy' => 'backend1.number.destroy',
        'create' => 'backend1.number.create',
        'store' => 'backend1.number.store',
        'update' => 'backend1.number.update',
    ]
]);

Route::resource('/backend1/graduate_bcis', 'Backend\Graduate_BCISController', [
    'names' => [
        'index' => 'backend1.graduate_bcis.index',
        'edit' => 'backend1.graduate_bcis.edit',
        'destroy' => 'backend1.graduate_bcis.destroy',
        'create' => 'backend1.graduate_bcis.create',
        'store' => 'backend1.graduate_bcis.store',
        'update' => 'backend1.graduate_bcis.update',
    ]
]);

Route::resource('/backend1/curriculum_bcis', 'Backend\Curriculum_BCISController', [
    'names' => [
        'index' => 'backend1.curriculum_bcis.index',
        'edit' => 'backend1.curriculum_bcis.edit',
        'destroy' => 'backend1.curriculum_bcis.destroy',
        'create' => 'backend1.curriculum_bcis.create',
        'store' => 'backend1.curriculum_bcis.store',
        'update' => 'backend1.curriculum_bcis.update',
    ]
]);

Route::resource('/backend1/semister1_bcis', 'Backend\Semister1_BCISController', [
    'names' => [
        'index' => 'backend1.semister1_bcis.index',
        'edit' => 'backend1.semister1_bcis.edit',
        'destroy' => 'backend1.semister1_bcis.destroy',
        'create' => 'backend1.semister1_bcis.create',
        'store' => 'backend1.semister1_bcis.store',
        'update' => 'backend1.semister1_bcis.update',
    ]
]);

Route::resource('/backend1/semister2_bcis', 'Backend\Semister2_BCISController', [
    'names' => [
        'index' => 'backend1.semister2_bcis.index',
        'edit' => 'backend1.semister2_bcis.edit',
        'destroy' => 'backend1.semister2_bcis.destroy',
        'create' => 'backend1.semister2_bcis.create',
        'store' => 'backend1.semister2_bcis.store',
        'update' => 'backend1.semister2_bcis.update',
    ]
]);

Route::resource('/backend1/semister3_bcis', 'Backend\Semister3_BCISController', [
    'names' => [
        'index' => 'backend1.semister3_bcis.index',
        'edit' => 'backend1.semister3_bcis.edit',
        'destroy' => 'backend1.semister3_bcis.destroy',
        'create' => 'backend1.semister3_bcis.create',
        'store' => 'backend1.semister3_bcis.store',
        'update' => 'backend1.semister3_bcis.update',
    ]
]);

Route::resource('/backend1/semister4_bcis', 'Backend\Semister4_BCISController', [
    'names' => [
        'index' => 'backend1.semister4_bcis.index',
        'edit' => 'backend1.semister4_bcis.edit',
        'destroy' => 'backend1.semister4_bcis.destroy',
        'create' => 'backend1.semister4_bcis.create',
        'store' => 'backend1.semister4_bcis.store',
        'update' => 'backend1.semister4_bcis.update',
    ]
]);

Route::resource('/backend1/semister5_bcis', 'Backend\Semister5_BCISController', [
    'names' => [
        'index' => 'backend1.semister5_bcis.index',
        'edit' => 'backend1.semister5_bcis.edit',
        'destroy' => 'backend1.semister5_bcis.destroy',
        'create' => 'backend1.semister5_bcis.create',
        'store' => 'backend1.semister5_bcis.store',
        'update' => 'backend1.semister5_bcis.update',
    ]
]);

Route::resource('/backend1/semister6_bcis', 'Backend\Semister6_BCISController', [
    'names' => [
        'index' => 'backend1.semister6_bcis.index',
        'edit' => 'backend1.semister6_bcis.edit',
        'destroy' => 'backend1.semister6_bcis.destroy',
        'create' => 'backend1.semister6_bcis.create',
        'store' => 'backend1.semister6_bcis.store',
        'update' => 'backend1.semister6_bcis.update',
    ]
]);

Route::resource('/backend1/semister7_bcis', 'Backend\Semister7_BCISController', [
    'names' => [
        'index' => 'backend1.semister7_bcis.index',
        'edit' => 'backend1.semister7_bcis.edit',
        'destroy' => 'backend1.semister7_bcis.destroy',
        'create' => 'backend1.semister7_bcis.create',
        'store' => 'backend1.semister7_bcis.store',
        'update' => 'backend1.semister7_bcis.update',
    ]
]);

Route::resource('/backend1/semister8_bcis', 'Backend\Semister8_BCISController', [
    'names' => [
        'index' => 'backend1.semister8_bcis.index',
        'edit' => 'backend1.semister8_bcis.edit',
        'destroy' => 'backend1.semister8_bcis.destroy',
        'create' => 'backend1.semister8_bcis.create',
        'store' => 'backend1.semister8_bcis.store',
        'update' => 'backend1.semister8_bcis.update',
    ]
]);

Route::resource('/backend1/concentration_bcis', 'Backend\Concentration_BCISController', [
    'names' => [
        'index' => 'backend1.concentration_bcis.index',
        'edit' => 'backend1.concentration_bcis.edit',
        'destroy' => 'backend1.concentration_bcis.destroy',
        'create' => 'backend1.concentration_bcis.create',
        'store' => 'backend1.concentration_bcis.store',
        'update' => 'backend1.concentration_bcis.update',
    ]
]);

Route::resource('/backend1/marketing_bcis', 'Backend\Marketing_BCISController', [
    'names' => [
        'index' => 'backend1.marketing_bcis.index',
        'edit' => 'backend1.marketing_bcis.edit',
        'destroy' => 'backend1.marketing_bcis.destroy',
        'create' => 'backend1.marketing_bcis.create',
        'store' => 'backend1.marketing_bcis.store',
        'update' => 'backend1.marketing_bcis.update',
    ]
]);

Route::resource('/backend1/bciselectivetitle', 'Backend\BcisElectiveTitleController', [
    'names' => [
        'index' => 'backend1.bciselectivetitle.index',
        'edit' => 'backend1.bciselectivetitle.edit',
        'destroy' => 'backend1.bciselectivetitle.destroy',
        'create' => 'backend1.bciselectivetitle.create',
        'store' => 'backend1.bciselectivetitle.store',
        'update' => 'backend1.bciselectivetitle.update',
    ]
]);

Route::resource('/backend1/bciselective', 'Backend\BcisElectiveController', [
    'names' => [
        'index' => 'backend1.bciselective.index',
        'edit' => 'backend1.bciselective.edit',
        'destroy' => 'backend1.bciselective.destroy',
        'create' => 'backend1.bciselective.create',
        'store' => 'backend1.bciselective.store',
        'update' => 'backend1.bciselective.update',
    ]
]);

Route::resource('/backend1/bcisevaluategradetitle', 'Backend\BcisEvaluateGradeTitleController', [
    'names' => [
        'index' => 'backend1.bcisevaluategradetitle.index',
        'edit' => 'backend1.bcisevaluategradetitle.edit',
        'destroy' => 'backend1.bcisevaluategradetitle.destroy',
        'create' => 'backend1.bcisevaluategradetitle.create',
        'store' => 'backend1.bcisevaluategradetitle.store',
        'update' => 'backend1.bcisevaluategradetitle.update',
    ]
]);

Route::resource('/backend1/bcisevaluategrade', 'Backend\BcisEvaluateGradeController', [
    'names' => [
        'index' => 'backend1.bcisevaluategrade.index',
        'edit' => 'backend1.bcisevaluategrade.edit',
        'destroy' => 'backend1.bcisevaluategrade.destroy',
        'create' => 'backend1.bcisevaluategrade.create',
        'store' => 'backend1.bcisevaluategrade.store',
        'update' => 'backend1.bcisevaluategrade.update',
    ]
]);

Route::resource('/backend1/graduate_eve', 'Backend\Graduate_EveController', [
    'names' => [
        'index' => 'backend1.graduate_eve.index',
        'edit' => 'backend1.graduate_eve.edit',
        'destroy' => 'backend1.graduate_eve.destroy',
        'create' => 'backend1.graduate_eve.create',
        'store' => 'backend1.graduate_eve.store',
        'update' => 'backend1.graduate_eve.update',
    ]
]);

Route::resource('/backend1/curriculum_eve', 'Backend\Curriculum_EveController', [
    'names' => [
        'index' => 'backend1.curriculum_eve.index',
        'edit' => 'backend1.curriculum_eve.edit',
        'destroy' => 'backend1.curriculum_eve.destroy',
        'create' => 'backend1.curriculum_eve.create',
        'store' => 'backend1.curriculum_eve.store',
        'update' => 'backend1.curriculum_eve.update',
    ]
]);

Route::resource('/backend1/trimister1_eve', 'Backend\Trimister1_EveController', [
    'names' => [
        'index' => 'backend1.trimister1_eve.index',
        'edit' => 'backend1.trimister1_eve.edit',
        'destroy' => 'backend1.trimister1_eve.destroy',
        'create' => 'backend1.trimister1_eve.create',
        'store' => 'backend1.trimister1_eve.store',
        'update' => 'backend1.trimister1_eve.update',
    ]
]);

Route::resource('/backend1/trimister2_eve', 'Backend\Trimister2_EveController', [
    'names' => [
        'index' => 'backend1.trimister2_eve.index',
        'edit' => 'backend1.trimister2_eve.edit',
        'destroy' => 'backend1.trimister2_eve.destroy',
        'create' => 'backend1.trimister2_eve.create',
        'store' => 'backend1.trimister2_eve.store',
        'update' => 'backend1.trimister2_eve.update',
    ]
]);

Route::resource('/backend1/trimister3_eve', 'Backend\Trimister3_EveController', [
    'names' => [
        'index' => 'backend1.trimister3_eve.index',
        'edit' => 'backend1.trimister3_eve.edit',
        'destroy' => 'backend1.trimister3_eve.destroy',
        'create' => 'backend1.trimister3_eve.create',
        'store' => 'backend1.trimister3_eve.store',
        'update' => 'backend1.trimister3_eve.update',
    ]
]);

Route::resource('/backend1/trimister4_eve', 'Backend\Trimister4_EveController', [
    'names' => [
        'index' => 'backend1.trimister4_eve.index',
        'edit' => 'backend1.trimister4_eve.edit',
        'destroy' => 'backend1.trimister4_eve.destroy',
        'create' => 'backend1.trimister4_eve.create',
        'store' => 'backend1.trimister4_eve.store',
        'update' => 'backend1.trimister4_eve.update',
    ]
]);

Route::resource('/backend1/trimister5_eve', 'Backend\Trimister5_EveController', [
    'names' => [
        'index' => 'backend1.trimister5_eve.index',
        'edit' => 'backend1.trimister5_eve.edit',
        'destroy' => 'backend1.trimister5_eve.destroy',
        'create' => 'backend1.trimister5_eve.create',
        'store' => 'backend1.trimister5_eve.store',
        'update' => 'backend1.trimister5_eve.update',
    ]
]);

Route::resource('/backend1/trimister6_eve', 'Backend\Trimister6_EveController', [
    'names' => [
        'index' => 'backend1.trimister6_eve.index',
        'edit' => 'backend1.trimister6_eve.edit',
        'destroy' => 'backend1.trimister6_eve.destroy',
        'create' => 'backend1.trimister6_eve.create',
        'store' => 'backend1.trimister6_eve.store',
        'update' => 'backend1.trimister6_eve.update',
    ]
]);

Route::resource('/backend1/trimister7_eve', 'Backend\Trimister7_EveController', [
    'names' => [
        'index' => 'backend1.trimister7_eve.index',
        'edit' => 'backend1.trimister7_eve.edit',
        'destroy' => 'backend1.trimister7_eve.destroy',
        'create' => 'backend1.trimister7_eve.create',
        'store' => 'backend1.trimister7_eve.store',
        'update' => 'backend1.trimister7_eve.update',
    ]
]);

Route::resource('/backend1/trimister8_eve', 'Backend\Trimister8_EveController', [
    'names' => [
        'index' => 'backend1.trimister8_eve.index',
        'edit' => 'backend1.trimister8_eve.edit',
        'destroy' => 'backend1.trimister8_eve.destroy',
        'create' => 'backend1.trimister8_eve.create',
        'store' => 'backend1.trimister8_eve.store',
        'update' => 'backend1.trimister8_eve.update',
    ]
]);

Route::resource('/backend1/concentration_eve', 'Backend\Concentration_EveController', [
    'names' => [
        'index' => 'backend1.concentration_eve.index',
        'edit' => 'backend1.concentration_eve.edit',
        'destroy' => 'backend1.concentration_eve.destroy',
        'create' => 'backend1.concentration_eve.create',
        'store' => 'backend1.concentration_eve.store',
        'update' => 'backend1.concentration_eve.update',
    ]
]);

Route::resource('/backend1/marketing_eve', 'Backend\Marketing_EveController', [
    'names' => [
        'index' => 'backend1.marketing_eve.index',
        'edit' => 'backend1.marketing_eve.edit',
        'destroy' => 'backend1.marketing_eve.destroy',
        'create' => 'backend1.marketing_eve.create',
        'store' => 'backend1.marketing_eve.store',
        'update' => 'backend1.marketing_eve.update',
    ]
]);

Route::resource('/backend1/finance_eve', 'Backend\Finance_EveController', [
    'names' => [
        'index' => 'backend1.finance_eve.index',
        'edit' => 'backend1.finance_eve.edit',
        'destroy' => 'backend1.finance_eve.destroy',
        'create' => 'backend1.finance_eve.create',
        'store' => 'backend1.finance_eve.store',
        'update' => 'backend1.finance_eve.update',
    ]
]);

Route::resource('/backend1/hrm_eve', 'Backend\HRM_EveController', [
    'names' => [
        'index' => 'backend1.hrm_eve.index',
        'edit' => 'backend1.hrm_eve.edit',
        'destroy' => 'backend1.hrm_eve.destroy',
        'create' => 'backend1.hrm_eve.create',
        'store' => 'backend1.hrm_eve.store',
        'update' => 'backend1.hrm_eve.update',
    ]
]);

Route::resource('/backend1/generalmgmt_eve', 'Backend\Generalmgmt_EveController', [
    'names' => [
        'index' => 'backend1.generalmgmt_eve.index',
        'edit' => 'backend1.generalmgmt_eve.edit',
        'destroy' => 'backend1.generalmgmt_eve.destroy',
        'create' => 'backend1.generalmgmt_eve.create',
        'store' => 'backend1.generalmgmt_eve.store',
        'update' => 'backend1.generalmgmt_eve.update',
    ]
]);

Route::resource('/backend1/mgmtscience_eve', 'Backend\Mgmtscience_EveController', [
    'names' => [
        'index' => 'backend1.mgmtscience_eve.index',
        'edit' => 'backend1.mgmtscience_eve.edit',
        'destroy' => 'backend1.mgmtscience_eve.destroy',
        'create' => 'backend1.mgmtscience_eve.create',
        'store' => 'backend1.mgmtscience_eve.store',
        'update' => 'backend1.mgmtscience_eve.update',
    ]
]);

Route::resource('/backend1/mbaelectivetitle_eve', 'Backend\MBAElectiveTitle_EveController', [
    'names' => [
        'index' => 'backend1.mbaelectivetitle_eve.index',
        'edit' => 'backend1.mbaelectivetitle_eve.edit',
        'destroy' => 'backend1.mbaelectivetitle_eve.destroy',
        'create' => 'backend1.mbaelectivetitle_eve.create',
        'store' => 'backend1.mbaelectivetitle_eve.store',
        'update' => 'backend1.mbaelectivetitle_eve.update',
    ]
]);

Route::resource('/backend1/mbaelective_eve', 'Backend\MBAElective_EveController', [
    'names' => [
        'index' => 'backend1.mbaelective_eve.index',
        'edit' => 'backend1.mbaelective_eve.edit',
        'destroy' => 'backend1.mbaelective_eve.destroy',
        'create' => 'backend1.mbaelective_eve.create',
        'store' => 'backend1.mbaelective_eve.store',
        'update' => 'backend1.mbaelective_eve.update',
    ]
]);

Route::resource('/backend1/mbaevaluategradetitle_eve', 'Backend\MBAEvaluateGradeTitle_EveController', [
    'names' => [
        'index' => 'backend1.mbaevaluategradetitle_eve.index',
        'edit' => 'backend1.mbaevaluategradetitle_eve.edit',
        'destroy' => 'backend1.mbaevaluategradetitle_eve.destroy',
        'create' => 'backend1.mbaevaluategradetitle_eve.create',
        'store' => 'backend1.mbaevaluategradetitle_eve.store',
        'update' => 'backend1.mbaevaluategradetitle_eve.update',
    ]
]);

Route::resource('/backend1/mbaevaluategrade_eve', 'Backend\MBAEvaluateGrade_EveController', [
    'names' => [
        'index' => 'backend1.mbaevaluategrade_eve.index',
        'edit' => 'backend1.mbaevaluategrade_eve.edit',
        'destroy' => 'backend1.mbaevaluategrade_eve.destroy',
        'create' => 'backend1.mbaevaluategrade_eve.create',
        'store' => 'backend1.mbaevaluategrade_eve.store',
        'update' => 'backend1.mbaevaluategrade_eve.update',
    ]
]);

Route::resource('/backend1/graduate_bba', 'Backend\Graduate_BBAController', [
    'names' => [
        'index' => 'backend1.graduate_bba.index',
        'edit' => 'backend1.graduate_bba.edit',
        'destroy' => 'backend1.graduate_bba.destroy',
        'create' => 'backend1.graduate_bba.create',
        'store' => 'backend1.graduate_bba.store',
        'update' => 'backend1.graduate_bba.update',
    ]
]);

Route::resource('/backend1/curriculum_bba', 'Backend\Curriculum_BBAController', [
    'names' => [
        'index' => 'backend1.curriculum_bba.index',
        'edit' => 'backend1.curriculum_bba.edit',
        'destroy' => 'backend1.curriculum_bba.destroy',
        'create' => 'backend1.curriculum_bba.create',
        'store' => 'backend1.curriculum_bba.store',
        'update' => 'backend1.curriculum_bba.update',
    ]
]);

Route::resource('/backend1/semister1_bba', 'Backend\Semister1_BBAController', [
    'names' => [
        'index' => 'backend1.semister1_bba.index',
        'edit' => 'backend1.semister1_bba.edit',
        'destroy' => 'backend1.semister1_bba.destroy',
        'create' => 'backend1.semister1_bba.create',
        'store' => 'backend1.semister1_bba.store',
        'update' => 'backend1.semister1_bba.update',
    ]
]);

Route::resource('/backend1/semister2_bba', 'Backend\Semister2_BBAController', [
    'names' => [
        'index' => 'backend1.semister2_bba.index',
        'edit' => 'backend1.semister2_bba.edit',
        'destroy' => 'backend1.semister2_bba.destroy',
        'create' => 'backend1.semister2_bba.create',
        'store' => 'backend1.semister2_bba.store',
        'update' => 'backend1.semister2_bba.update',
    ]
]);

Route::resource('/backend1/semister3_bba', 'Backend\Semister3_BBAController', [
    'names' => [
        'index' => 'backend1.semister3_bba.index',
        'edit' => 'backend1.semister3_bba.edit',
        'destroy' => 'backend1.semister3_bba.destroy',
        'create' => 'backend1.semister3_bba.create',
        'store' => 'backend1.semister3_bba.store',
        'update' => 'backend1.semister3_bba.update',
    ]
]);

Route::resource('/backend1/semister4_bba', 'Backend\Semister4_BBAController', [
    'names' => [
        'index' => 'backend1.semister4_bba.index',
        'edit' => 'backend1.semister4_bba.edit',
        'destroy' => 'backend1.semister4_bba.destroy',
        'create' => 'backend1.semister4_bba.create',
        'store' => 'backend1.semister4_bba.store',
        'update' => 'backend1.semister4_bba.update',
    ]
]);

Route::resource('/backend1/semister5_bba', 'Backend\Semister5_BBAController', [
    'names' => [
        'index' => 'backend1.semister5_bba.index',
        'edit' => 'backend1.semister5_bba.edit',
        'destroy' => 'backend1.semister5_bba.destroy',
        'create' => 'backend1.semister5_bba.create',
        'store' => 'backend1.semister5_bba.store',
        'update' => 'backend1.semister5_bba.update',
    ]
]);

Route::resource('/backend1/semister6_bba', 'Backend\Semister6_BBAController', [
    'names' => [
        'index' => 'backend1.semister6_bba.index',
        'edit' => 'backend1.semister6_bba.edit',
        'destroy' => 'backend1.semister6_bba.destroy',
        'create' => 'backend1.semister6_bba.create',
        'store' => 'backend1.semister6_bba.store',
        'update' => 'backend1.semister6_bba.update',
    ]
]);

Route::resource('/backend1/semister7_bba', 'Backend\Semister7_BBAController', [
    'names' => [
        'index' => 'backend1.semister7_bba.index',
        'edit' => 'backend1.semister7_bba.edit',
        'destroy' => 'backend1.semister7_bba.destroy',
        'create' => 'backend1.semister7_bba.create',
        'store' => 'backend1.semister7_bba.store',
        'update' => 'backend1.semister7_bba.update',
    ]
]);

Route::resource('/backend1/semister8_bba', 'Backend\Semister8_BBAController', [
    'names' => [
        'index' => 'backend1.semister8_bba.index',
        'edit' => 'backend1.semister8_bba.edit',
        'destroy' => 'backend1.semister8_bba.destroy',
        'create' => 'backend1.semister8_bba.create',
        'store' => 'backend1.semister8_bba.store',
        'update' => 'backend1.semister8_bba.update',
    ]
]);

Route::resource('/backend1/concentration_bba', 'Backend\Concentration_BBAController', [
    'names' => [
        'index' => 'backend1.concentration_bba.index',
        'edit' => 'backend1.concentration_bba.edit',
        'destroy' => 'backend1.concentration_bba.destroy',
        'create' => 'backend1.concentration_bba.create',
        'store' => 'backend1.concentration_bba.store',
        'update' => 'backend1.concentration_bba.update',
    ]
]);

Route::resource('/backend1/marketing_bba', 'Backend\Marketing_BBAController', [
    'names' => [
        'index' => 'backend1.marketing_bba.index',
        'edit' => 'backend1.marketing_bba.edit',
        'destroy' => 'backend1.marketing_bba.destroy',
        'create' => 'backend1.marketing_bba.create',
        'store' => 'backend1.marketing_bba.store',
        'update' => 'backend1.marketing_bba.update',
    ]
]);

Route::resource('/backend1/finance_bba', 'Backend\Finance_BBAController', [
    'names' => [
        'index' => 'backend1.finance_bba.index',
        'edit' => 'backend1.finance_bba.edit',
        'destroy' => 'backend1.finance_bba.destroy',
        'create' => 'backend1.finance_bba.create',
        'store' => 'backend1.finance_bba.store',
        'update' => 'backend1.finance_bba.update',
    ]
]);

Route::resource('/backend1/hrm_bba', 'Backend\HRM_BBAController', [
    'names' => [
        'index' => 'backend1.hrm_bba.index',
        'edit' => 'backend1.hrm_bba.edit',
        'destroy' => 'backend1.hrm_bba.destroy',
        'create' => 'backend1.hrm_bba.create',
        'store' => 'backend1.hrm_bba.store',
        'update' => 'backend1.hrm_bba.update',
    ]
]);

Route::resource('/backend1/generalmgmt_bba', 'Backend\Generalmgmt_BBAController', [
    'names' => [
        'index' => 'backend1.generalmgmt_bba.index',
        'edit' => 'backend1.generalmgmt_bba.edit',
        'destroy' => 'backend1.generalmgmt_bba.destroy',
        'create' => 'backend1.generalmgmt_bba.create',
        'store' => 'backend1.generalmgmt_bba.store',
        'update' => 'backend1.generalmgmt_bba.update',
    ]
]);

Route::resource('/backend1/mgmtscience_bba', 'Backend\Mgmtscience_BBAController', [
    'names' => [
        'index' => 'backend1.mgmtscience_bba.index',
        'edit' => 'backend1.mgmtscience_bba.edit',
        'destroy' => 'backend1.mgmtscience_bba.destroy',
        'create' => 'backend1.mgmtscience_bba.create',
        'store' => 'backend1.mgmtscience_bba.store',
        'update' => 'backend1.mgmtscience_bba.update',
    ]
]);

Route::resource('/backend1/bbaelectivetitle', 'Backend\BbaElectiveTitleController', [
    'names' => [
        'index' => 'backend1.bbaelectivetitle.index',
        'edit' => 'backend1.bbaelectivetitle.edit',
        'destroy' => 'backend1.bbaelectivetitle.destroy',
        'create' => 'backend1.bbaelectivetitle.create',
        'store' => 'backend1.bbaelectivetitle.store',
        'update' => 'backend1.bbaelectivetitle.update',
    ]
]);

Route::resource('/backend1/bbaelective', 'Backend\BbaElectiveController', [
    'names' => [
        'index' => 'backend1.bbaelective.index',
        'edit' => 'backend1.bbaelective.edit',
        'destroy' => 'backend1.bbaelective.destroy',
        'create' => 'backend1.bbaelective.create',
        'store' => 'backend1.bbaelective.store',
        'update' => 'backend1.bbaelective.update',
    ]
]);

Route::resource('/backend1/bbaevaluategradetitle', 'Backend\BbaEvaluateGradeTitleController', [
    'names' => [
        'index' => 'backend1.bbaevaluategradetitle.index',
        'edit' => 'backend1.bbaevaluategradetitle.edit',
        'destroy' => 'backend1.bbaevaluategradetitle.destroy',
        'create' => 'backend1.bbaevaluategradetitle.create',
        'store' => 'backend1.bbaevaluategradetitle.store',
        'update' => 'backend1.bbaevaluategradetitle.update',
    ]
]);

Route::resource('/backend1/bbaevaluategrade', 'Backend\BbaEvaluateGradeController', [
    'names' => [
        'index' => 'backend1.bbaevaluategrade.index',
        'edit' => 'backend1.bbaevaluategrade.edit',
        'destroy' => 'backend1.bbaevaluategrade.destroy',
        'create' => 'backend1.bbaevaluategrade.create',
        'store' => 'backend1.bbaevaluategrade.store',
        'update' => 'backend1.bbaevaluategrade.update',
    ]
]);

Route::resource('/backend1/graduate_bi', 'Backend\Graduate_BBABIController', [
    'names' => [
        'index' => 'backend1.graduate_bi.index',
        'edit' => 'backend1.graduate_bi.edit',
        'destroy' => 'backend1.graduate_bi.destroy',
        'create' => 'backend1.graduate_bi.create',
        'store' => 'backend1.graduate_bi.store',
        'update' => 'backend1.graduate_bi.update',
    ]
]);

Route::resource('/backend1/curriculum_bi', 'Backend\Curriculum_BBABIController', [
    'names' => [
        'index' => 'backend1.curriculum_bi.index',
        'edit' => 'backend1.curriculum_bi.edit',
        'destroy' => 'backend1.curriculum_bi.destroy',
        'create' => 'backend1.curriculum_bi.create',
        'store' => 'backend1.curriculum_bi.store',
        'update' => 'backend1.curriculum_bi.update',
    ]
]);

Route::resource('/backend1/semister1_bi', 'Backend\Semister1_BBABIController', [
    'names' => [
        'index' => 'backend1.semister1_bi.index',
        'edit' => 'backend1.semister1_bi.edit',
        'destroy' => 'backend1.semister1_bi.destroy',
        'create' => 'backend1.semister1_bi.create',
        'store' => 'backend1.semister1_bi.store',
        'update' => 'backend1.semister1_bi.update',
    ]
]);

Route::resource('/backend1/semister2_bi', 'Backend\Semister2_BBABIController', [
    'names' => [
        'index' => 'backend1.semister2_bi.index',
        'edit' => 'backend1.semister2_bi.edit',
        'destroy' => 'backend1.semister2_bi.destroy',
        'create' => 'backend1.semister2_bi.create',
        'store' => 'backend1.semister2_bi.store',
        'update' => 'backend1.semister2_bi.update',
    ]
]);

Route::resource('/backend1/semister3_bi', 'Backend\Semister3_BBABIController', [
    'names' => [
        'index' => 'backend1.semister3_bi.index',
        'edit' => 'backend1.semister3_bi.edit',
        'destroy' => 'backend1.semister3_bi.destroy',
        'create' => 'backend1.semister3_bi.create',
        'store' => 'backend1.semister3_bi.store',
        'update' => 'backend1.semister3_bi.update',
    ]
]);

Route::resource('/backend1/semister4_bi', 'Backend\Semister4_BBABIController', [
    'names' => [
        'index' => 'backend1.semister4_bi.index',
        'edit' => 'backend1.semister4_bi.edit',
        'destroy' => 'backend1.semister4_bi.destroy',
        'create' => 'backend1.semister4_bi.create',
        'store' => 'backend1.semister4_bi.store',
        'update' => 'backend1.semister4_bi.update',
    ]
]);

Route::resource('/backend1/semister5_bi', 'Backend\Semister5_BBABIController', [
    'names' => [
        'index' => 'backend1.semister5_bi.index',
        'edit' => 'backend1.semister5_bi.edit',
        'destroy' => 'backend1.semister5_bi.destroy',
        'create' => 'backend1.semister5_bi.create',
        'store' => 'backend1.semister5_bi.store',
        'update' => 'backend1.semister5_bi.update',
    ]
]);

Route::resource('/backend1/semister6_bi', 'Backend\Semister6_BBABIController', [
    'names' => [
        'index' => 'backend1.semister6_bi.index',
        'edit' => 'backend1.semister6_bi.edit',
        'destroy' => 'backend1.semister6_bi.destroy',
        'create' => 'backend1.semister6_bi.create',
        'store' => 'backend1.semister6_bi.store',
        'update' => 'backend1.semister6_bi.update',
    ]
]);

Route::resource('/backend1/semister7_bi', 'Backend\Semister7_BBABIController', [
    'names' => [
        'index' => 'backend1.semister7_bi.index',
        'edit' => 'backend1.semister7_bi.edit',
        'destroy' => 'backend1.semister7_bi.destroy',
        'create' => 'backend1.semister7_bi.create',
        'store' => 'backend1.semister7_bi.store',
        'update' => 'backend1.semister7_bi.update',
    ]
]);

Route::resource('/backend1/semister8_bi', 'Backend\Semister8_BBABIController', [
    'names' => [
        'index' => 'backend1.semister8_bi.index',
        'edit' => 'backend1.semister8_bi.edit',
        'destroy' => 'backend1.semister8_bi.destroy',
        'create' => 'backend1.semister8_bi.create',
        'store' => 'backend1.semister8_bi.store',
        'update' => 'backend1.semister8_bi.update',
    ]
]);

Route::resource('/backend1/concentration_bi', 'Backend\Concentration_BBABIController', [
    'names' => [
        'index' => 'backend1.concentration_bi.index',
        'edit' => 'backend1.concentration_bi.edit',
        'destroy' => 'backend1.concentration_bi.destroy',
        'create' => 'backend1.concentration_bi.create',
        'store' => 'backend1.concentration_bi.store',
        'update' => 'backend1.concentration_bi.update',
    ]
]);

Route::resource('/backend1/bielectivetitle', 'Backend\BiElectiveTitleController', [
    'names' => [
        'index' => 'backend1.bielectivetitle.index',
        'edit' => 'backend1.bielectivetitle.edit',
        'destroy' => 'backend1.bielectivetitle.destroy',
        'create' => 'backend1.bielectivetitle.create',
        'store' => 'backend1.bielectivetitle.store',
        'update' => 'backend1.bielectivetitle.update',
    ]
]);

Route::resource('/backend1/bielective', 'Backend\BiElectiveController', [
    'names' => [
        'index' => 'backend1.bielective.index',
        'edit' => 'backend1.bielective.edit',
        'destroy' => 'backend1.bielective.destroy',
        'create' => 'backend1.bielective.create',
        'store' => 'backend1.bielective.store',
        'update' => 'backend1.bielective.update',
    ]
]);

Route::resource('/backend1/bievaluategradetitle', 'Backend\BiEvaluateGradeTitleController', [
    'names' => [
        'index' => 'backend1.bievaluategradetitle.index',
        'edit' => 'backend1.bievaluategradetitle.edit',
        'destroy' => 'backend1.bievaluategradetitle.destroy',
        'create' => 'backend1.bievaluategradetitle.create',
        'store' => 'backend1.bievaluategradetitle.store',
        'update' => 'backend1.bievaluategradetitle.update',
    ]
]);

Route::resource('/backend1/bievaluategrade', 'Backend\BiEvaluateGradeController', [
    'names' => [
        'index' => 'backend1.bievaluategrade.index',
        'edit' => 'backend1.bievaluategrade.edit',
        'destroy' => 'backend1.bievaluategrade.destroy',
        'create' => 'backend1.bievaluategrade.create',
        'store' => 'backend1.bievaluategrade.store',
        'update' => 'backend1.bievaluategrade.update',
    ]
]);

Route::resource('/backend1/marketing_tt', 'Backend\Marketing_TTController', [
    'names' => [
        'index' => 'backend1.marketing_tt.index',
        'edit' => 'backend1.marketing_tt.edit',
        'destroy' => 'backend1.marketing_tt.destroy',
        'create' => 'backend1.marketing_tt.create',
        'store' => 'backend1.marketing_tt.store',
        'update' => 'backend1.marketing_tt.update',
    ]
]);

Route::resource('/backend1/finance_tt', 'Backend\Finance_TTController', [
    'names' => [
        'index' => 'backend1.finance_tt.index',
        'edit' => 'backend1.finance_tt.edit',
        'destroy' => 'backend1.finance_tt.destroy',
        'create' => 'backend1.finance_tt.create',
        'store' => 'backend1.finance_tt.store',
        'update' => 'backend1.finance_tt.update',
    ]
]);

Route::resource('/backend1/hrm_tt', 'Backend\HRM_TTController', [
    'names' => [
        'index' => 'backend1.hrm_tt.index',
        'edit' => 'backend1.hrm_tt.edit',
        'destroy' => 'backend1.hrm_tt.destroy',
        'create' => 'backend1.hrm_tt.create',
        'store' => 'backend1.hrm_tt.store',
        'update' => 'backend1.hrm_tt.update',
    ]
]);

Route::resource('/backend1/generalmgmt_tt', 'Backend\GeneralManagement_TTController', [
    'names' => [
        'index' => 'backend1.generalmgmt_tt.index',
        'edit' => 'backend1.generalmgmt_tt.edit',
        'destroy' => 'backend1.generalmgmt_tt.destroy',
        'create' => 'backend1.generalmgmt_tt.create',
        'store' => 'backend1.generalmgmt_tt.store',
        'update' => 'backend1.generalmgmt_tt.update',
    ]
]);

Route::resource('/backend1/graduate_tt', 'Backend\Graduate_TTController', [
    'names' => [
        'index' => 'backend1.graduate_tt.index',
        'edit' => 'backend1.graduate_tt.edit',
        'destroy' => 'backend1.graduate_tt.destroy',
        'create' => 'backend1.graduate_tt.create',
        'store' => 'backend1.graduate_tt.store',
        'update' => 'backend1.graduate_tt.update',
    ]
]);

Route::resource('/backend1/curriculum_tt', 'Backend\Curriculum_TTController', [
    'names' => [
        'index' => 'backend1.curriculum_tt.index',
        'edit' => 'backend1.curriculum_tt.edit',
        'destroy' => 'backend1.curriculum_tt.destroy',
        'create' => 'backend1.curriculum_tt.create',
        'store' => 'backend1.curriculum_tt.store',
        'update' => 'backend1.curriculum_tt.update',
    ]
]);

Route::resource('/backend1/semister1_tt', 'Backend\Semister1_TTController', [
    'names' => [
        'index' => 'backend1.semister1_tt.index',
        'edit' => 'backend1.semister1_tt.edit',
        'destroy' => 'backend1.semister1_tt.destroy',
        'create' => 'backend1.semister1_tt.create',
        'store' => 'backend1.semister1_tt.store',
        'update' => 'backend1.semister1_tt.update',
    ]
]);

Route::resource('/backend1/semister2_tt', 'Backend\Semister2_TTController', [
    'names' => [
        'index' => 'backend1.semister2_tt.index',
        'edit' => 'backend1.semister2_tt.edit',
        'destroy' => 'backend1.semister2_tt.destroy',
        'create' => 'backend1.semister2_tt.create',
        'store' => 'backend1.semister2_tt.store',
        'update' => 'backend1.semister2_tt.update',
    ]
]);

Route::resource('/backend1/semister3_tt', 'Backend\Semister3_TTController', [
    'names' => [
        'index' => 'backend1.semister3_tt.index',
        'edit' => 'backend1.semister3_tt.edit',
        'destroy' => 'backend1.semister3_tt.destroy',
        'create' => 'backend1.semister3_tt.create',
        'store' => 'backend1.semister3_tt.store',
        'update' => 'backend1.semister3_tt.update',
    ]
]);

Route::resource('/backend1/semister4_tt', 'Backend\Semister4_TTController', [
    'names' => [
        'index' => 'backend1.semister4_tt.index',
        'edit' => 'backend1.semister4_tt.edit',
        'destroy' => 'backend1.semister4_tt.destroy',
        'create' => 'backend1.semister4_tt.create',
        'store' => 'backend1.semister4_tt.store',
        'update' => 'backend1.semister4_tt.update',
    ]
]);

Route::resource('/backend1/semister5_tt', 'Backend\Semister5_TTController', [
    'names' => [
        'index' => 'backend1.semister5_tt.index',
        'edit' => 'backend1.semister5_tt.edit',
        'destroy' => 'backend1.semister5_tt.destroy',
        'create' => 'backend1.semister5_tt.create',
        'store' => 'backend1.semister5_tt.store',
        'update' => 'backend1.semister5_tt.update',
    ]
]);

Route::resource('/backend1/semister6_tt', 'Backend\Semister6_TTController', [
    'names' => [
        'index' => 'backend1.semister6_tt.index',
        'edit' => 'backend1.semister6_tt.edit',
        'destroy' => 'backend1.semister6_tt.destroy',
        'create' => 'backend1.semister6_tt.create',
        'store' => 'backend1.semister6_tt.store',
        'update' => 'backend1.semister6_tt.update',
    ]
]);

Route::resource('/backend1/semister7_tt', 'Backend\Semister7_TTController', [
    'names' => [
        'index' => 'backend1.semister7_tt.index',
        'edit' => 'backend1.semister7_tt.edit',
        'destroy' => 'backend1.semister7_tt.destroy',
        'create' => 'backend1.semister7_tt.create',
        'store' => 'backend1.semister7_tt.store',
        'update' => 'backend1.semister7_tt.update',
    ]
]);

Route::resource('/backend1/semister8_tt', 'Backend\Semister8_TTController', [
    'names' => [
        'index' => 'backend1.semister8_tt.index',
        'edit' => 'backend1.semister8_tt.edit',
        'destroy' => 'backend1.semister8_tt.destroy',
        'create' => 'backend1.semister8_tt.create',
        'store' => 'backend1.semister8_tt.store',
        'update' => 'backend1.semister8_tt.update',
    ]
]);

Route::resource('/backend1/concentration_tt', 'Backend\Concentration_TTController', [
    'names' => [
        'index' => 'backend1.concentration_tt.index',
        'edit' => 'backend1.concentration_tt.edit',
        'destroy' => 'backend1.concentration_tt.destroy',
        'create' => 'backend1.concentration_tt.create',
        'store' => 'backend1.concentration_tt.store',
        'update' => 'backend1.concentration_tt.update',
    ]
]);

Route::resource('/backend1/ttelectivetitle', 'Backend\TtElectiveTitleController', [
    'names' => [
        'index' => 'backend1.ttelectivetitle.index',
        'edit' => 'backend1.ttelectivetitle.edit',
        'destroy' => 'backend1.ttelectivetitle.destroy',
        'create' => 'backend1.ttelectivetitle.create',
        'store' => 'backend1.ttelectivetitle.store',
        'update' => 'backend1.ttelectivetitle.update',
    ]
]);

Route::resource('/backend1/ttelective', 'Backend\TtElectiveController', [
    'names' => [
        'index' => 'backend1.ttelective.index',
        'edit' => 'backend1.ttelective.edit',
        'destroy' => 'backend1.ttelective.destroy',
        'create' => 'backend1.ttelective.create',
        'store' => 'backend1.ttelective.store',
        'update' => 'backend1.ttelective.update',
    ]
]);

Route::resource('/backend1/ttevaluategradetitle', 'Backend\TtEvaluateGradeTitleController', [
    'names' => [
        'index' => 'backend1.ttevaluategradetitle.index',
        'edit' => 'backend1.ttevaluategradetitle.edit',
        'destroy' => 'backend1.ttevaluategradetitle.destroy',
        'create' => 'backend1.ttevaluategradetitle.create',
        'store' => 'backend1.ttevaluategradetitle.store',
        'update' => 'backend1.ttevaluategradetitle.update',
    ]
]);

Route::resource('/backend1/ttevaluategrade', 'Backend\TtEvaluateGradeController', [
    'names' => [
        'index' => 'backend1.ttevaluategrade.index',
        'edit' => 'backend1.ttevaluategrade.edit',
        'destroy' => 'backend1.ttevaluategrade.destroy',
        'create' => 'backend1.ttevaluategrade.create',
        'store' => 'backend1.ttevaluategrade.store',
        'update' => 'backend1.ttevaluategrade.update',
    ]
]);










