
@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Published </div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading p-0">


                                        @can('create-post')
                                    <a class="pull-left btn btn-sm btn-primary m-5" href="{{route('create_post')}}">New</a>
                                        @endcan
                                    </div>
                                    <div class="pt-3">
                                            @if(session()->has('delete'))
                                            <div class="alert alert-danger col-md-12">
                                                {{ session()->get('delete') }}
                                            </div>
                                        @endif
                                    </div>

                                    <div  class="panel-body">






                                                        <div class="table-responsive">
                                                                <table class="table">
                                                                  <thead>
                                                                    <tr>

                                                                      <th>Title</th>

                                                                      <th>Date</th>


                                                                      <th>Edit</th>
                                                                      <th>Delete</th>

                                                                    </tr>
                                                                  </thead>
                                                                  @foreach ($posts as $post)
                                                                  <tbody>
                                                                    <tr>

                                                                      <td><a href="{{route('edit_post1',['id'=>$post->id])}}">{{$post->title}}</a></td>
                                                                    <td>{{$post->created_at}}</td>
                                                                      @can('publish-post',$post)


                                                                         <td> <a href="{{route('edit_post1',['id'=>$post->id])}}" class="btn btn-sm btn-primary" role="button"><i class="fa fa-edit"></i></a></td>
                                                                        <td> <a href="{{route('delete_post',['id'=>$post->id])}}" class="btn btn-sm btn-danger" role="button"><i class="fa fa-trash"></i></a></td>



                                                                      @endcan


                                                                    </tr>
                                                                  </tbody>
                                                                  @endforeach
                                                                </table>





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
