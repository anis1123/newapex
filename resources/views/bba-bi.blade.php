@extends('layout.app')

@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle"></div>




</section>

<div class="topic text-center mt-4 ">
    <h5 class="heading">BBA-BI</h5>
</div>


{{-- <section id="mba">

            <div class="container ">







            <div class="container pb-5">
                    <div class="row mbaplan mt-5 p-0 m-0">
                    <div class="text-center col-md-6 pt-3 part0 part1">



                    </div>



                    <div class="col-md-6 pt-3  part1">
                        </div>

                    </div>
                    </div>
                    </div>





</section> --}}







<div id="responsiveTabsDemo" class="m-5">
        <ul>
            <li><a href="#tab-0">Graduate Program</a></li>
            <li><a href="#tab-1"> Curriculum </a></li>
            <li><a href="#tab-2"> Semister Plan </a></li>
            <li><a href="#tab-3"> Concentration </a></li>
            <li><a href="#tab-4"> Elective</a></li>
            <li><a href="#tab-5"> Evaluation and Grading</a></li>
        </ul>

        @foreach($graduatepost as $post)
            <div id="tab-0" class="p-5">
                 {!! $post->body !!}       
            </div>
        @endforeach

        @foreach($curriculumpost as $post)
        
        <div id="tab-1" class="p-5">
            
           <img class="card-img-top" src="{{asset('assets/images/'. $post->image)}}" alt="Card image cap" height="300" > 
            {!! $post->body !!}
            
        </div>
        @endforeach

        <div id="tab-2" class="p-5">
                        <div class="text-center pt-3 part0">
                                <h4 class="text-center pb-4">Semister Plan BCIS</h4>
                                <div class="row px-4 mx-3">

                                    <div class="col-md-4 p-4">

                                        <div class="trimester p-4">
                                        <table width="100%">
                                            <tr align="left">
                                            <th>Semister I</th>
                                            <th>credits</th>
                                            </tr>
                                            
                                            @foreach($trimister1post as $post)
                                            <tr>
                                                <td align="left">{!! $post->title !!}</td>
                                                <td>	{!! $post->credits !!}</td>
                                            </tr>
                                            @endforeach
                                            

                                        </table>
                                        </div>
                                    </div>


                                    <div class="col-md-4 p-4">

                                        <div class="trimester p-4">
                                        <table width="100%">
                                            <tr align="left">
                                            <th>Semister II</th>
                                            <th>credits</th>
                                            </tr>

                                            @foreach($trimister2post as $post)
                                            <tr>
                                                <td align="left">{!! $post->title !!}</td>
                                                <td>	{!! $post->credits !!}</td>
                                            </tr>
                                            @endforeach
                                            

                                        </table>
                                        </div>
                                    </div>

                                    <div class="col-md-4 p-4">

                                        <div class="trimester p-4">
                                        <table width="100%">
                                            <tr align="left">
                                            <th>Semister III</th>
                                            <th>credits</th>
                                            </tr>
                                            
                                            @foreach($trimister3post as $post)
                                            <tr>
                                                <td align="left">{!! $post->title !!}</td>
                                                <td>	{!! $post->credits !!}</td>
                                            </tr>
                                            @endforeach
                                            

                                        </table>
                                        </div>
                                    </div>

                                    <div class="col-md-4 p-4">

                                            <div class="trimester p-4">
                                            <table width="100%">
                                                <tr align="left">
                                                <th>Semister IV</th>
                                                <th>credits</th>
                                                </tr>
                                                
                                                @foreach($trimister4post as $post)
                                                <tr>
                                                    <td align="left">{!! $post->title !!}</td>
                                                    <td>	{!! $post->credits !!}</td>
                                                </tr>
                                                @endforeach
                                                
                                            </table>
                                            </div>
                                    </div>

                                    <div class="col-md-4 p-4">

                                            <div class="trimester p-4">
                                            <table width="100%">
                                                <tr align="left">
                                                <th>Semister V</th>
                                                <th>credits</th>
                                                </tr>

                                                @foreach($trimister5post as $post)
                                                <tr>
                                                    <td align="left">{!! $post->title !!}</td>
                                                    <td>	{!! $post->credits !!}</td>
                                                </tr>
                                                @endforeach
                                               
                                            </table>
                                            </div>
                                    </div>

                                    <div class="col-md-4 p-4">

                                            <div class="trimester p-4">
                                            <table width="100%">
                                                <tr align="left">
                                                <th>Semister VI</th>
                                                <th>credits</th>
                                                </tr>
                                               
                                                @foreach($trimister6post as $post)
                                                <tr>
                                                    <td align="left">{!! $post->title !!}</td>
                                                    <td>	{!! $post->credits !!}</td>
                                                </tr>
                                                @endforeach
                                               

                                            </table>
                                            </div>
                                    </div>

                                    <div class="col-md-4 p-4">

                                            <div class="trimester p-4">
                                            <table width="100%">
                                                <tr align="left">
                                                <th>Semister VII</th>
                                                <th>credits</th>
                                                </tr>
                                               
                                                @foreach($trimister7post as $post)
                                                <tr>
                                                    <td align="left">{!! $post->title !!}</td>
                                                    <td>	{!! $post->credits !!}</td>
                                                </tr>
                                                @endforeach
                                               

                                            </table>
                                            </div>
                                    </div>


                                    <div class="col-md-4 p-4">

                                            <div class="trimester p-4">
                                            <table width="100%">
                                                <tr align="left">
                                                <th>Semister VIII</th>
                                                <th>credits</th>
                                                </tr>
                                               
                                                @foreach($trimister8post as $post)
                                                <tr>
                                                    <td align="left">{!! $post->title !!}</td>
                                                    <td>	{!! $post->credits !!}</td>
                                                </tr>
                                                @endforeach
                                               

                                            </table>
                                            </div>
                                    </div>


                                </div>
                                    </div>
        </div>

        <div id="tab-3" class="p-5">

                @foreach($concentrationpost as $post)
                <h4 class="pt-3 text-center">{!! $post->title !!}</h4>
                @endforeach

                @foreach($concentrationpost as $post)
                <p class="pt-4 px-5 mx-5">{!! $post->body !!}</p>
                @endforeach

               
        </div> 

        <div id="tab-4" class="p-5">
                
                @foreach($mbaelectiveposttitle as $post)
                <h4 class="text-center pt-3 pb-4">{!! $post->title !!}</h4>
                
                 
                
                <p class="mx-5 px-5">{!! $post->body !!}</p>
                @endforeach

                <div class="px-5 mx-5">
                <table class="table table-bordered">
                        <thead>
                        <tr>
                        <th colspan="2" scope="col">Courses</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($mbaelectivepost as $post)
                        <tr>
                        <td>{!! $post->title !!}</td>
                        <td>{!! $post->credits !!}</td>
                        </tr>
                        @endforeach
                        
                        </tbody>
                        </table>
                </div>

        </div>


        <div id="tab-5" class="p-5">


                        @foreach($mbaevaluateposttitle as $post)
                        <h4 class="pt-3 text-center">{!! $post->title !!}</h4>
                        <p class="pt-4 px-5 mx-5">
                         {!! $post->body !!}
                        </p>
                        @endforeach

                   <div class="px-5 mx-5">
                <table class="table table-bordered">
                <thead>
                <tr>
                <th scope="col">Grade</th>
                <th scope="col">Honor Points(CGPA)</th>
                <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>

                @foreach($mbaevaluatepost as $post)
                <tr>
                <td>{!! $post->grade !!}</td>
                <td align="center">{!! $post->cgpa !!}</td>
                <td class="number">{!! $post->description !!}</td>
                </tr>
                @endforeach
                
                </tbody>
             </table>
                   </div>

        </div>
</div>



    </div>
@endsection
