
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Welcome</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link active" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fas fa-address-book"></i>Blog Posts <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">



                                        <li class="nav-item">
                                            <a class="nav-link" href="/all">All</a>
                                        </li>
                                        <li class="nav-item">
                                                <a class="nav-link" href="/post">Published</a>
                                            </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="/drafts">Draft</a>
                                        </li>


                                    </ul>
                                </div>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fas fa-address-book"></i>Pages <span class="badge badge-success">6</span></a>
                                <div id="submenu-2" class="collapse submenu" style="">
                                    <ul class="nav flex-column">



                                        <li class="nav-item">
                                            <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-1" aria-controls="minisubmenu-1"> News & Events <span class="badge badge-success">6</span></a>
                                            <div id="minisubmenu-1" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.blog.index') }}">All top post</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.heighlights.index') }}" >All Highlights</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.upcomingevent.index') }}">All Upcoming Event</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.news.index') }}" >All News</a>
                                                    </li>

                                                </ul>
                                            </div>    
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-2" aria-controls="minisubmenu-2">Welcome <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-2" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.whychoose.index') }}">Why Choose Apex</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.number.index') }}" >Numbers</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>
                                        


                                    </ul>
                                </div>
                            </li>


                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-address-book"></i>Academics <span class="badge badge-success">6</span></a>
                                <div id="submenu-3" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        @can('see-all')
                                        <li class="nav-item">
                                            <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-3" aria-controls="minisubmenu-3"> MBA <span class="badge badge-success">6</span></a>
                                            <div id="minisubmenu-3" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.graduate.index') }}">Graduate Program</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.curriculum.index') }}" >MBA Curriculum</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister1.index') }}">Trimester I Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister2.index') }}">Trimester II Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister3.index') }}">Trimester III Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister4.index') }}">Trimester IV Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister5.index') }}">Trimester V Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.trimister6.index') }}">Trimester VI Plan MBA</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.concentration.index') }}" >Concentration MBA - Title and Body</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.marketing.index') }}" >Concentration MBA - Marketing</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.finance.index') }}" >Concentration MBA - Finance</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.hrm.index') }}" >Concentration MBA - HRM</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.generalmgmt.index') }}" >Concentration MBA - General Management</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.mgmtscience.index') }}" >Concentration MBA - Management Science</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.mbaelectivetitle.index') }}" >MBA Elective - Title and Body</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.mbaelective.index') }}" >MBA Elective</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.mbaevaluategradetitle.index') }}" >Evaluation And Grading - Title and Body</a>
                                                    </li>

                                                    <li class="nav-item">
                                                        <a class="nav-link" href="{{ route('backend1.mbaevaluategrade.index') }}" >Evaluation And Grading</a>
                                                    </li>

                                                </ul>
                                            </div>    
                                        </li>
                                        
                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-4" aria-controls="minisubmenu-4">MBA Evening <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-4" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.graduate_eve.index') }}">Graduate Program</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.curriculum_eve.index') }}" >MBA-Evening Curriculum</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister1_eve.index') }}">Trimester I Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister2_eve.index') }}">Trimester II Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister3_eve.index') }}">Trimester III Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister4_eve.index') }}">Trimester IV Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister5_eve.index') }}">Trimester V Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister6_eve.index') }}">Trimester VI Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister7_eve.index') }}">Trimester VII Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.trimister8_eve.index') }}">Trimester VIII Plan MBA Evening</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.concentration_eve.index') }}" >Concentration MBA Evening - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.marketing_eve.index') }}" >Concentration MBA Evening - Marketing</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.finance_eve.index') }}" >Concentration MBA Evening - Finance</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.hrm_eve.index') }}" >Concentration MBA Evening - HRM</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.generalmgmt_eve.index') }}" >Concentration MBA Evening - General Management</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mgmtscience_eve.index') }}" >Concentration MBA Evening - Management Science</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mbaelectivetitle_eve.index') }}" >MBA Elective Evening- Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mbaelective_eve.index') }}" >MBA Evening Elective</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mbaevaluategradetitle_eve.index') }}" >Evaluation And Grading - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mbaevaluategrade_eve.index') }}" >Evaluation And Grading</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-5" aria-controls="minisubmenu-5">BCIS <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-5" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.graduate_bcis.index') }}">Graduate Program</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.curriculum_bcis.index') }}" >BCIS Curriculum</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister1_bcis.index') }}">Semister I Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister2_bcis.index') }}">Semister II Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister3_bcis.index') }}">Semister III Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister4_bcis.index') }}">Semister IV Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister5_bcis.index') }}">Semister V Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister6_bcis.index') }}">Semister VI Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister7_bcis.index') }}">Semister VII Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister8_bcis.index') }}">Semister VIII Plan BCIS</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.concentration_bcis.index') }}" >Concentration BCIS - Title and Body</a>
                                                        </li>


                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bciselectivetitle.index') }}" >BCIS Elective - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bciselective.index') }}" >BCIS Elective</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bcisevaluategradetitle.index') }}" >Evaluation And Grading - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bcisevaluategrade.index') }}" >Evaluation And Grading</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-6" aria-controls="minisubmenu-6">BBA <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-6" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.graduate_bba.index') }}">Graduate Program</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.curriculum_bba.index') }}" >BBA Curriculum</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister1_bba.index') }}">Semister I Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister2_bba.index') }}">Semister II Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister3_bba.index') }}">Semister III Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister4_bba.index') }}">Semister IV Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister5_bba.index') }}">Semister V Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister6_bba.index') }}">Semister VI Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister7_bba.index') }}">Semister VII Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister8_bba.index') }}">Semister VIII Plan BBA</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.concentration_bba.index') }}" >Concentration BBA - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.marketing_bba.index') }}" >Concentration BBA - Marketing</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.finance_bba.index') }}" >Concentration BBA - Finance</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.hrm_bba.index') }}" >Concentration BBA - HRM</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.generalmgmt_bba.index') }}" >Concentration BBA - General Management</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.mgmtscience_bba.index') }}" >Concentration BBA - Management Science</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bbaelectivetitle.index') }}" >BBA Elective - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bbaelective.index') }}" >BBA Elective</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bbaevaluategradetitle.index') }}" >Evaluation And Grading - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bbaevaluategrade.index') }}" >Evaluation And Grading</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-7" aria-controls="minisubmenu-7">BBA-BI <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-7" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.graduate_bi.index') }}">Graduate Program</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.curriculum_bi.index') }}" >BBA-BI Curriculum</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister1_bi.index') }}">Semister I Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister2_bi.index') }}">Semister II Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister3_bi.index') }}">Semister III Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister4_bi.index') }}">Semister IV Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister5_bi.index') }}">Semister V Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister6_bi.index') }}">Semister VI Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister7_bi.index') }}">Semister VII Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister8_bi.index') }}">Semister VIII Plan BBA-BI</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.concentration_bi.index') }}" >Concentration BBA-BI - Title and Body</a>
                                                        </li>


                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bielectivetitle.index') }}" >BBA-BI Elective - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bielective.index') }}" >BBA-BI Elective</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bievaluategradetitle.index') }}" >Evaluation And Grading - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.bievaluategrade.index') }}" >Evaluation And Grading</a>
                                                        </li>

                                                    </ul>
                                                </div>
                                        </li>

                                        <li class="nav-item">
                                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#minisubmenu-8" aria-controls="minisubmenu-8">BBA-TT <span class="badge badge-success">6</span></a>
                                                <div id="minisubmenu-8" class="collapse submenu" style="">
                                                    <ul class="nav flex-column">
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.graduate_tt.index') }}">Graduate Program</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.curriculum_tt.index') }}" >BBA-TT Curriculum</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister1_tt.index') }}">Semister I Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister2_tt.index') }}">Semister II Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister3_tt.index') }}">Semister III Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister4_tt.index') }}">Semister IV Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister5_tt.index') }}">Semister V Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister6_tt.index') }}">Semister VI Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister7_tt.index') }}">Semister VII Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.semister8_tt.index') }}">Semister VIII Plan BBA-TT</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.concentration_tt.index') }}" >Concentration BBA-TT - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.marketing_tt.index') }}" >Concentration BBA-TT -Tourism Marketing</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.finance_tt.index') }}" >Concentration BBA-TT - Event Tourism</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.hrm_tt.index') }}" >Concentration BBA-TT - Tour Operations</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.generalmgmt_tt.index') }}" >Concentration BBA-TT - Air Fares and Ticketing</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.ttelectivetitle.index') }}" >BBA-TT Elective - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.ttelective.index') }}" >BBA-TT Elective</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.ttevaluategradetitle.index') }}" >Evaluation And Grading - Title and Body</a>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link" href="{{ route('backend1.ttevaluategrade.index') }}" >Evaluation And Grading</a>
                                                        </li>


                                                    </ul>
                                                </div>
                                        </li>

                                        
                                        @endcan


                                    </ul>
                                </div>
                            </li>


                        

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                <div id="submenu-4" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        @can('see-all')
                                        <li class="nav-item">
                                            <a class="nav-link" href="general">General <span class="badge badge-secondary">New</span></a>
                                        </li>
                                        @endcan


                                    </ul>
                                </div>
                            </li>
                            

                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-user"></i>Users</a>
                                <div id="submenu-5" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            <li class="nav-item">
                                                    <a class="nav-link" href="user">List User</a>
                                                </li>
                                    </ul>
                                </div>
                            </li>
                            
                            <li class="nav-item ">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class=" fas fa-database"></i>Registeration</a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                            @can('see-all')
                                            <li class="nav-item">
                                                    <a class="nav-link" href="register">Register</a>
                                                </li>
                                                @endcan

                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-table"></i>Tables</a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                           <!--<li class="nav-divider">
                                Features
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                <div id="submenu-6" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/login.html">Login</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/404-page.html">404 page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                <div id="submenu-7" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                <div id="submenu-8" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                <div id="submenu-9" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                <div id="submenu-10" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 1</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                            <div id="submenu-11" class="collapse submenu" style="">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 1</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#">Level 2</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#">Level 3</a>
                                        </li>
                                    </ul>
                                </div>
                            </li>-->
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

