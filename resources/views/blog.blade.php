@extends('layout.app')


@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle" style="height:200px!important"></div>




</section>
<div class="topic text-center mt-4 ">
    <h5 class="heading">APEX BLOG</h5>
</div>

<section id="blog" class="pt-5">
<div class="container pb-5">

    <div class="blog mt-5 mb-5 pt-2">
        <div class="row ">

            <div class="col-md-9">
                @foreach ($posts as $post)


                <div class="posts p-5">
                        <div class="blog-header">
                            <h4>{{date('d-m-y',strtotime($post->created_at))}}</h4>

                        </div>


                        <div class="blog-body pt-3 shadow-sm p-4 mb-5 bg-white rounded">
                            <div class="blog-title">
                                <h5>{{$post->title}}</h5>
                            </div>
                            <div class="blog-content pt-3">
                              <P> {!! \Illuminate\Support\Str::words($post->body, 30, '...') !!}</P>
                            </div>
                            <br>
                            <blockquote>
                                    <p class="blog-foot">
                                        <a href="" class="text-danger">Learn more</a> </p>

                                        {{-- {{ route('post.read', ['post_id' => $post->id]) }} --}}
                                    </blockquote>


                            <p class="blog-foot">Posted By <span class="text-danger"> {{$post->name}} </span>at {{Carbon\Carbon::parse($post->created_at)->format('H:i:s')}}</p>


                        </div>

                </div>


                @endforeach
                <nav class="blog-pagination ">
                    {{$posts->links()}}
                    </nav>
            </div>


            <div class="col-md-3 p-5 mt-5">

                <div class="apex">
                    <h4>Apex College</h4>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. At, iusto tenetur! Illum magnam vero cupiditate facere nulla, suscipit perferendis dicta adipisci? Modi harum ad, eligendi placeat amet quae nihil pariatur.</p>
                </div>

                <div class="archive mt-5">
                        <h4>Latest Post</h4>




                    @foreach($link as $archive)
                    <ol class="list-unstyled">
                        <li><a href="" class="archive">{!! \Illuminate\Support\Str::words($archive->title, 6, '...') !!}</a></li>
                    </ol>

                    {{-- {{ route('post.read', ['post_id' => $archive->id]) }} --}}
                @endforeach








                </div>
                <div class="about-me mt-5">
                    <h4>About Us</h4>
                    <div class="row">
                <img src="{{asset('/img/a.jpg')}}" alt="" height="80">



            </div>
                </div>



            </div>

        </div>

    </div>


</div>
</section>





@endsection
