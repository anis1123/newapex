@extends('layout.app')

    @section('content')
    <div class="overlay"></div>
    <section id="home">
        <div class="particle"></div>




    </section>



    <div class="topic text-center mt-4 ">
        <h5 class="heading">FACULTY & STAFF</h5>
    </div>






    <section id="faculty" class="pt-5 pb-4">
    <div class="container-fluid">
        <ul class="teacher">
            @if(count($facultyprogram)>0)
            @foreach($facultyprogram as $post)

            <li class="col-md-4 p-0">
                <div class="text">
                    <p>
                        {{$post->bio}}
                     </p>
                </div>
                <div class="photo">
                    <img src="{{asset('upload/' . $post->image)}}" alt="" class="img-fluid">
                    <div class="info">
                        <h4>{{$post->name}}</h4>
                        <h5>{{$post->qualification}}</h5>
                    </div>

                </div>


            </li>

            @endforeach
            @else
                <p>No data found</p>
            @endif
}

        </ul>
    </div>


</section>

<div class="row p-0 m-0 pr-5">

    <div id="responsiveTabsDemo" class="m-5 col-md-8">
            <ul>
            <li><a href="#tab-0">Apex Staffs</a></li>
            <li><a href="#tab-1"> Full Time Faculty </a></li>
            <li><a href="#tab-2"> Visiting Faculty </a></li>
            <li><a href="#tab-3"> Team Apex </a></li>
            </ul>
                <div id="tab-0" >
                    <div class="row m-0">
            <div class="article-member col-md-12 px-5 pt-3">
                <p>
                    Apex constitutes a diversified team of experts among private management colleges in the country. Office staffs are always aspiring for new knowledge and development in their careers and academics of students. Their coordinated efforts on latest teaching pedagogy with efficient administrative support create an effective learning environment in classrooms and beyond.
                </p>
            </div>
            </div>
            <section id="teachers" class="p-5">
<div class="row  px-5">
<div class="col-md-9">
    <div class="image-member row ">
        @if(count($facultyadmin)>0)
        @foreach($facultyadmin as $posts)
            <div class="members ">
                <div class="col m3 p-0 m-1">
                    <img src="{{asset('upload/' . $posts->image)}}" alt="" class="img-fluid">
                    <div class="member-overlay">
                        <br>
                        <h5>{{$posts->name}}</h5>
                        <p>{{$posts->qualification}}</p>
                        <br>
                        <ul class="social-list">
                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

        @else
            <p>No data found</p>
        @endif

    </div>
</div>
</div>
<div>{{ $facultyadmin->links() }}</div>
</section>
                </div>
                 <div id="tab-1" >
                    <div class="row pb-4 m-0">
            <div class="article-member col-md-12 px-5 pt-3">
                <p>
                    We have probably the largest and diversified team of full-time faculty among private management colleges in the country. Our faculty members collaborate as a team to ensure your overall learning and development. Their coordinated emphasis on latest teaching pedagogy such as project work, fieldwork, case study, article review, role play etc. creates an effective learning environment in the classrooms and beyond.

                    Our faculty members take pride in representing Apex College in national and international seminars and conference. They are always striving for excellence, both in their career and in delivering you knowledge. They make your learning experience challenging, and at the same time rewarding. They are passionate teachers and mentors committed to disseminating knowledge and skills, and shaping your behavior for your success in life.
                </p>
            </div>

            <section id="teachers" class="p-5">
<div class="row  px-5">
<div class="col-md-9">
    <div class="image-member row">
        @if(count($facultyfulltime)>0)
        @foreach($facultyfulltime as $posts)
            <div class="members row">
                <div class="col m3 p-0 m-1">
                    <img src="{{asset('upload/' . $posts->image)}}" alt="" class="img-fluid">
                    <div class="member-overlay">
                        <br>
                        <h5>{{$posts->name}}</h5>
                        <p>{{$posts->qualification}}</p>
                        <br>
                        <ul class="social-list">
                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

        @else
            <p>No data found</p>
        @endif

    </div>
</div>
</div>
<div>{{ $facultyfulltime->links() }}</div>
</section>
            </div>

                 </div>
                  <div id="tab-2" >
                    <div class="row pb-4 m-0"> <div class="article-member col-md-12 px-5 pt-3">
                <p>Visiting faculty members with their corporate and social experience add additional flare to enrich your learning process at the college. They are instrumental in bridging the gap between what you learn in classrooms with how it is implemented in the real world. They act as your source of inspiration and a great opportunity to build on networks with corporate houses.

                    Connected with the business world, our part-time faculty members bring the very essence of the real world into classrooms.

                    The combined strength of full-time and part-time faculty members ensures a rich student-faculty ratio and a longer contact hour with students.
                </p>
                  </div>
                </div>
                <section id="teachers" class="p-5">
<div class="row  px-5">
<div class="col-md-9">
    <div class="image-member row pt-4">
        @if(count($facultyvisiting)>0)
        @foreach($facultyvisiting as $posts)
            <div class="members ">
                <div class="col m3 p-0 m-1">
                    <img src="{{asset('upload/' . $posts->image)}}" alt="" class="img-fluid">
                    <div class="member-overlay">
                        <br>
                        <h5>{{$posts->name}}</h5>
                        <p>{{$posts->qualification}}</p>
                        <br>
                        <ul class="social-list">
                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach


        @else
            <p>No data found</p>
        @endif

    </div>
</div>
</div>
<div>{{ $facultyvisiting->links() }}</div>
</section>
                  </div>
                   <div id="tab-3" >
                   <a data-toggle="modal" data-target="#myModal" class="floaticon" id="floaticon">
<i class="fa fa-envelope my-float"></i>
</a>
<div class="label-container" id="floatlabel">
<div class="label-text">Chairman's Message</div>
<i class="fa fa-play label-arrow"></i>
</div>
                        <div class="row pb-4 m-0"><div class="article-member col-md-12 px-5 pt-3">
                <p>
                    A team of competent and experienced academicians and professionals contributes to the Board of Directors at Apex. They are responsible to set future direction for the college. They set vision, mission, goals and strategies for the college.

                    Their passion for, and dedication in, education has significantly contributed to make Apex College one of the best choices among students and faculty member.s
                </p>
            </div>
        </div>
        <section id="teachers" class="p-5">
<div class="row  px-5">
<div class="col-md-9">
    <div class="image-member row pt-4">
        @if(count($facultymain)>0)
        @foreach($facultymain as $posts)
            <div class="members ">
                <div class="col m3 p-0 m-1">
                    <img src="{{asset('upload/' . $posts->image)}}" alt="" class="img-fluid">
                    <div class="member-overlay">
                        <br>
                        <h5>{{$posts->name}}</h5>
                        <p>{{$posts->qualification}}</p>
                        <br>
                        <ul class="social-list">
                            <li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        @endforeach

        @else
            <p>No data found</p>
        @endif

    </div>
</div>

</div>
<div> {{ $facultymain->links() }}</div>
</section>
<!-- The Modal -->





















  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title center">Chairperson's Message</h4>
          <button type="button" class="close" data-dismiss="modal">X</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
            @foreach($chairmanmsg as $post)
            <img src="{{asset('upload/' . $post->image)}}" alt="" class="img-fluid">
            {!! $post->message_detail !!}
            @endforeach

        <div class="modal-footer">
            Minendra P. Rijal, Ph D<br>
Chairperson
        </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>





<section id="side-nav" class="col-md-3 mt-5 " style="background:#fff">
    <div class="row pt-3">



                            <div class="clearfix visible-sm visible-xs">
                              &nbsp;
                            </div>


                            <div class="pl-3" >
                              <ul class="nav nav-pills pl-2" role="tablist" >
                                <li class="active" >
                                  <a data-toggle="tab" class="btn btn-secondary" href="#tab1" role="tab" style="background:none;color:#000;font-weight:500">Events</a>
                                </li>
                                <li class="active" >
                                  <a data-toggle="tab" class="btn btn-secondary"  href="#tab2" role="tab" style="background:none;color:#000;font-weight:500">News</a>
                                </li>
                              </ul>
                            </div>
                          </div><!-- / row -->

                          <div class="tab-content pl-4">
                            <div class="tab-pane active" id="tab1">
                              <div class="row">
                                <div class="col-md-9">

                                  @foreach($upcomingpost as $post)
                                    <div class="media">
                                      <a class="pull-left" href="#"><span class="dateEl">{{ $post->created_at }}</span></a>
                                      <div class="media-body">
                                        <h4 class="media-heading">
                                          <a href="#">{!! $post->title !!}</a>
                                        </h4>
                                        <div class="meta-data">
                                          <span class="date">{{ $post->upcoming_at }}</span>
                                        </div>
                                        <p>
                                          {!! $post->body !!}
                                        </p>
                                      </div><!-- / media-body -->
                                    </div><!-- / media -->
                                  @endforeach
                                </div><!-- / .col-md-6 -->

                              </div><!-- / row -->

                            </div>
</section>





</div>

<script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 500 || document.documentElement.scrollTop > 500) {
    document.getElementById("floaticon").style.display = "block";
    document.getElementById("floatlabel").style.display = "block";
  }
  else {
    document.getElementById("floaticon").style.display = "none";
    document.getElementById("floatlabel").style.display = "none";
  }
}
</script>
@endsection

