@extends('layout.app')


@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle" style="height:200px!important"></div>




</section>
<div class="topic text-center mt-4 ">
    <h5 class="heading">NEWS AND EVENTS</h5>
</div>




<section id="eventcarousel"  class="pt-5">
        <div class="container-fluid pt-2">



     
              <ul class="card-card">
                  @foreach($posts as $post)
                      <div class="card">
                        <div class="card-body">
                          <h4 class="card-title">{!! Str::words($post->title, 7,'......') !!}</h4>
                          <p class="card-text">{!! Str::words($post->body, 25,'......') !!}</p>
                          <p class="card-text">
                                <a href="#" >See More</a><br>
                            <small class="text-muted">Last updated at {!! $post->created_at !!}</small>
                          </p>
                        </div>
                      </div>

                   

                 
                    @endforeach

                    </ul>











              </div>

            </section>




            <section id="side-nav" class="pb-5 pt-2">
                <div class="container-fluid p-0 m-0 pl-4" >
                    <div class="row">
                        <div class="col-md-8 pl-5 pb-5">
                            <div class="images pl-4">

                                <div class="highlights p-0 m-0">
                                        <hr>
                              <h4 class="text-center p-0 m-0">Highlights</h4>
                              <hr>
                            </div>


                            <ul class="image-event pt-4 ">
                              @foreach($highlightPosts as $post)
                                <li class="col-md-2 p-0">
                                    <div class="card">
                                    <img class="card-img-top" src="{{asset('assets/images/'. $post->image)}}" alt="Card image cap">
                                    <div class="card-body">
                                      <h5 class="card-title">{!! Str::words($post->title, 7,'......') !!}</h5>
                                      <p class="card-text"> {!! Str::words($post->body, 25,'......') !!} </p>
                                    </div>
                                    <div class="card-footer">
                                      <small class="text-muted">Last updated at {!! $post->created_at !!}</small>
                                    </div>
                                  </div>
                                </li>
                              @endforeach
                            </ul>


                                </div>
                        </div>

                        <div class="newsevent pt-4 col-md-4 p-0 m-0 pl-5" >

                                {{-- <div class="card text-center">
                    <div class="card-header">
                    News And Events
                    </div>
                    <div class="card-body">
                    <h5 class="card-title">Title</h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni ea rerum reiciendis doloribus qui iure dolores, itaque animi quaerat culpa! Iusto sint optio et, non cum quaerat accusantium quia iure.</p>
                    <a href="#">See More</a>
                    </div>
                    <div class="card-footer text-muted">
                    2 days ago
                    </div> --}}





                    <div class="row ">



                            <div class="clearfix visible-sm visible-xs">
                              &nbsp;
                            </div>
                            <div class="">
                              <ul class="nav nav-pills" role="tablist">
                                <li class="active">
                                  <a data-toggle="tab" href="#tab1" role="tab">Events</a>
                                </li>
                                <li class="active">
                                  <a data-toggle="tab" href="#tab2" role="tab">News</a>
                                </li>
                              </ul>
                            </div>
                          </div><!-- / row -->

                          <div class="tab-content">
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




                            <div class="tab-pane fade" id="tab2">
                              <div class="row">
                                <div class="col-md-9">

                                  @foreach($newsposts as $post)
                                    <div class="blogPost--small">
                                      <div class="media">
                                        <span class="pull-left"><a href="#"><span class="date"> {{ $post->created_at }} </span></a></span>
                                        <div class="media-body">
                                          <h4 class="media-heading">
                                            <a href="#">{!! $post->title !!}</a>
                                          </h4>
                                          <p>
                                            {!! $post->body !!}
                                          </p>
                                        </div>
                                      </div>

                                    </div><!-- / blogPost -->
                                  @endforeach


                                </div><!-- / .col-md-6 -->



                            </div>
                          </div>
                    </div>








                        </div>

                    </div>
                </div>

            </section>

<section id="newscarousel" class="pt-5">

        <ul class="newscarousel ">
            @foreach($highlightPosts as $post)
              <li class="col-md-2 p-0">
                  <div class="card">
                  <img class="card-img-top" src="{{asset('assets/images/'. $post->image)}}" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">{!! Str::words($post->title, 7,'......') !!}</h5>
                    <p class="card-text"> {!! Str::words($post->body, 7,'......') !!} </p>
                  </div>
                  <div class="card-footer">
                    <small class="text-muted">Last updated at {!! $post->created_at !!}</small>
                  </div>
                </div>
              </li>
            @endforeach



        </ul>
</section>


<section id="social" class="pt-1">

    <div class="container-fluid p-0 m-0 pt-3">
        <hr class="">
            <h4 class="text-center">Social Links</h4>
            <hr>
        <div class="row p-4 px-5">
            <div class="col-md-6 embed-responsive embed-responsive-16by9">
                    <iframe width="600" height="390"
                    src="https://www.youtube.com/embed/tgbNymZ7vqY" class="embed-responsive-item p-3 pl-5"  frameborder="0" scrolling="yes" allowtransparency="true">
                    </iframe>
            </div>
            <div class="col-md-6 pr-5 embed-responsive embed-responsive-16by9">
                    <iframe src="http://instagram.com/p/a1wDZKopa2/embed" width="600" height="400" frameborder="0" scrolling="yes" allowtransparency="true" class="embed-responsive-item p-3 pr-5" ></iframe>
            </div>

        </div>
        <hr>
    </div>



</section>
@endsection
