@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Vacancy</div>
                            <div class="pt-5">



                                    <a class="pull-left btn btn-sm btn-primary" href="{{route('createmsg')}}">Add Message</a>


                                    </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="pt-3">
                                    @if(session()->has('delete'))
                                    <div class="alert alert-danger col-md-12">
                                        {{ session()->get('delete') }}
                                    </div>
                                @endif
                            </div>

                                    <div class="panel-body">

                                        <div class="row">
                                            @foreach ($chairmanmsg as $post)
                                                <div class="col-sm-6 col-md-4 pt-4">
                                                    <div class="card p-3">
                                                        <div class="caption">
                                                        <h3>Message</h3>
                                                        <img src="{{asset('upload/' . $post->image)}}" class="img-fluid" alt="">
                                                        <p class="pt-3">
                                                            <a href="{{route('editmsg',['chairmanmsg'=>$post])}}" class="btn btn-sm btn-warning" role="button">Edit</a>
                                                        
                                                        </p>
                                                        </div>

                                                    </div>
                                                </div>

                                            @endforeach
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>




@include('backend.layout.footer')

@endsection
