@extends('backend.layout.app')


@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Edit faculty</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                            <div class="pt-3">
                                                    @if(session()->has('success'))
                                                    <div class="alert alert-success col-md-12">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                            </div>


                                    <div class="panel-body ">

                                        <div class="row">
                                                <form  role="form" method="POST" action="{{ route('update_faculty', ['faculty' => $faculty]) }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            <label for="name" class="col-md-12 control-label">Faculty Staff Name</label>

                                                            <div class="col-md-12">
                                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name', $faculty->name )}}" required autofocus>

                                                                @if ($errors->has('name'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('name') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class="form-group{{ $errors->has('post') ? ' has-error' : '' }}">
                                                            <label for="Post" class="col-md-12 control-label">Faculty Staff Post</label>

                                                            <div class="col-md-12">
                                                                
                                                                <select class="form-control"  id="post" name="post" required autofocus>
                                                                      <option class="form-option" value="BBA-TT Program Head"<?php if ($faculty['post']=='BBA-TT Program Head'){echo 'selected="selected"';}?>>BBA-TT Program Head</option>
                                                                      <option class="form-option" value="BBA-BI Program Head"<?php if ($faculty['post']=='BBA-BI Program Head'){echo 'selected="selected"';}?>>BBA-BI Program Head</option>
                                                                      <option class="form-option" value="BBA Program Head"<?php if ($faculty['post']=='BBA Program Head'){echo 'selected="selected"';}?>>BBA Program Head</option>
                                                                      <option class="form-option" value="BCIS Program Head"<?php if ($faculty['post']=='BCIS Program Head'){echo 'selected="selected"';}?>>BCIS Program Head</option>
                                                                      <option class="form-option" value="Full Time Faculty"<?php if ($faculty['post']=='Full Time Faculty'){echo 'selected="selected"';}?>>Full Time Faculty</option>
                                                                      <option class="form-option" value="Administration"<?php if ($faculty['post']=='Administration'){echo 'selected="selected"';}?>>Administration</option>
                                                                      <option class="form-option" value="Examination Department"<?php if ($faculty['post']=='Examination Department'){echo 'selected="selected"';}?>>Examination Department</option>
                                                                      <option class="form-option" value="MIS"<?php if ($faculty['post']=='MIS'){echo 'selected="selected"';}?>>MIS</option>
                                                                      <option class="form-option" value="Apex Career Service"<?php if ($faculty['post']=='Apex Career Service'){echo 'selected="selected"';}?>>Apex Career Service</option>
                                                                      <option class="form-option" value="Lab and Maintenance"<?php if ($faculty['post']=='Lab and Maintenance'){echo 'selected="selected"';}?>>Lab and Maintenance</option>
                                                                      <option class="form-option" value="Accounts"<?php if ($faculty['post']=='Accounts'){echo 'selected="selected"';}?>>Accounts</option>
                                                                      <option class="form-option" value="Finance and Administration"<?php if ($faculty['post']=='Finance and Administration'){echo 'selected="selected"';}?>>Finance and Administration</option>
                                                                      <option class="form-option" value="Server"<?php if ($faculty['post']=='Server'){echo 'selected="selected"';}?>>Server</option>
                                                                      <option class="form-option" value="Library"<?php if ($faculty['post']=='Library'){echo 'selected="selected"';}?>>Library</option>
                                                                      <option class="form-option" value="Chairperson"<?php if ($faculty['post']=='Chairperson'){echo 'selected="selected"';}?>>Chairperson</option>
                                                                      <option class="form-option" value="Faculty Development Advisor"<?php if ($faculty['post']=='Faculty Development Advisor'){echo 'selected="selected"';}?>>Faculty Development Advisor</option>
                                                                      <option class="form-option" value="Principal"<?php if ($faculty['post']=='Principal'){echo 'selected="selected"';}?>>Principal</option>
                                                                      <option class="form-option" value="Vice Principal"<?php if ($faculty['post']=='Vice Principal'){echo 'selected="selected"';}?>>Vice Principal</option>
                                                                      <option class="form-option" value="Director, Student Affairs"<?php if ($faculty['post']=='Director, Student Affairs'){echo 'selected="selected"';}?>>Director, Student Affairs</option>
                                                                      <option class="form-option" value="Director, Academic Affairs"<?php if ($faculty['post']=='Director, Academic Affairs'){echo 'selected="selected"';}?>>Director, Academic Affairs</option>
                                                                      <option class="form-option" value="Head-Communication Department"<?php if ($faculty['post']=='Head-Communication Department'){echo 'selected="selected"';}?>>Head-Communication Department</option>
                                                                      <option class="form-option" value="Associate Director Undergraduate Program"<?php if ($faculty['post']=='Associate Director Undergraduate Program'){echo 'selected="selected"';}?>>Associate Director Undergraduate Program</option>
                                                                      <option class="form-option" value="MBA Evening Program Coordinator"<?php if ($faculty['post']=='MBA Evening Program Coordinator'){echo 'selected="selected"';}?>>MBA Evening Program Coordinator</option>
                                                                      <option class="form-option" value="Associate Director Graduate Program"<?php if ($faculty['post']=='Associate Director Graduate Program'){echo 'selected="selected"';}?>>Associate Director Graduate Program</option>
                                                                      <option class="form-option" value="Head-Apex Career Services"<?php if ($faculty['post']=='Head-Apex Career Services'){echo 'selected="selected"';}?>>Head-Apex Career Services</option>
                                                                      <option class="form-option" value="Visiting Faculty"<?php if ($faculty['post']=='Visiting Faculty'){echo 'selected="selected"';}?>>Visiting Faculty</option>
                                                                </select>
                                                                @if ($errors->has('post'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('post') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>                                                        
                                                        <div class="form-group{{ $errors->has('qualification') ? ' has-error' : '' }}">
                                                            <label for="name" class="col-md-12 control-label">Faculty Staff Qualification</label>

                                                            <div class="col-md-12">
                                                                <input id="qualification" type="text" class="form-control" name="qualification" value="{{ old('qualification',$faculty->qualification) }}" required autofocus>

                                                                @if ($errors->has('qualification'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('qualification') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class=" form-group{{ $errors->has('image') ? ' has-error' : '' }}">
                                                            <label for="image" class="col-md-12 control-label">Image</label>

                                                            <div class="col-md-12">
                                                                <img src="{{asset('upload/' . $faculty->image)}}" class="img-fluid" alt="">
                                                                <input type="file" name="image" id="image" class="form-control" value="{{ old('image',$faculty->image)}}" autofocus>
                                                                
                                                                @if ($errors->has('image'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('image') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>
                                                        <div class=" form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                                                            <label for="bio" class="col-md-12 control-label">Bio</label>

                                                            <div class="col-md-12">
                                                                <input type="text" name="bio" id="bio" class="form-control" maxlength="240" required autofocus value="{{ old('bio', $faculty->bio) }}">
                                                                @if ($errors->has('bio'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('bio') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Edit/Update
                                                                </button>
                                                                <a href="{{ route('facultybackend') }}" class="btn btn-danger">
                                                                    Cancel
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </form>

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
