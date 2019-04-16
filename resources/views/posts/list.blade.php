@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> List of Users</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="pt-3">
                                        @if(session()->has('success'))
                                        <div class="alert alert-success col-md-12">
                                            {{ session()->get('success') }}
                                        </div>
                                    @endif
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">


                                            <table class="table table-bordered">
                                                    <thead>
                                                      <tr>
                                                        <th>Name</th>
                                                        <th>Email</th>
                                                        <th>Role</th>
                                                      </tr>
                                                    </thead>
                                                    @foreach($post as $post)
                                                    <tbody>
                                                      <tr>
                                                      <td>{{$post->name}}</td>
                                                        <td>{{$post->email}}</td>
                                                      <td>{{$post->roles->first()->name}}</td></td>
                                                      </tr>
                                                    </tbody>
                                                    @endforeach
                                                  </table>


                                    <div class="panel-body">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@include('backend.layout.footer')

@endsection
