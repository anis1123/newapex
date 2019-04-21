@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Add faculty</div>

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
                                                <form  role="form" method="POST" action="{{ route('add_faculty') }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                            <label for="name" class="col-md-12 control-label">Faculty Staff Name</label>

                                                            <div class="col-md-12">
                                                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

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
                                                                <select class="form-control"  id="post" type="text" name="post" value="{{ old('post') }}" required autofocus>
                                                                      <option class="form-option" value=" ">Select One Post</option>  
                                                                      <option class="form-option" value="BBA-TT Program Head">BBA-TT Program Head</option>
                                                                      <option class="form-option" value="BBA-BI Program Head">BBA-BI Program Head</option>
                                                                      <option class="form-option" value="BBA Program Head">BBA Program Head</option>
                                                                      <option class="form-option" value="BCIS Program Head">BCIS Program Head</option>
                                                                      <option class="form-option" value="Full Time Faculty">Full Time Faculty</option>
                                                                      <option class="form-option" value="Administration">Administration</option>
                                                                      <option class="form-option" value="Examination Department">Examination Department</option>
                                                                      <option class="form-option" value="MIS">MIS</option>
                                                                      <option class="form-option" value="Apex Career Service">Apex Career Service</option>
                                                                      <option class="form-option" value="Lab and Maintenance">Lab and Maintenance</option>
                                                                      <option class="form-option" value="Accounts">Accounts</option>
                                                                      <option class="form-option" value="Finance and Administration">Finance and Administration</option>
                                                                      <option class="form-option" value="Server">Server</option>
                                                                      <option class="form-option" value="Library">Library</option>
                                                                      <option class="form-option" value="Chairperson">Chairperson</option>
                                                                      <option class="form-option" value="Faculty Development Advisor">Faculty Development Advisor</option>
                                                                      <option class="form-option" value="Principal">Principal</option>
                                                                      <option class="form-option" value="Vice Principal">Vice Principal</option>
                                                                      <option class="form-option" value="Director, Student Affairs">Director, Student Affairs</option>
                                                                      <option class="form-option" value="Director, Academic Affairs">Director, Academic Affairs</option>
                                                                      <option class="form-option" value="Head-Communication Department">Head-Communication Department</option>
                                                                      <option class="form-option" value="Associate Director Undergraduate Program">Associate Director Undergraduate Program</option>
                                                                      <option class="form-option" value="MBA Evening Program Coordinator">MBA Evening Program Coordinator</option>
                                                                      <option class="form-option" value="Associate Director Graduate Program">Associate Director Graduate Program</option>
                                                                      <option class="form-option" value="Head-Apex Career Services">Head-Apex Career Services</option>
                                                                      <option class="form-option" value="Visiting Faculty">Visiting Faculty</option>

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
                                                                <input id="qualification" type="text" class="form-control" name="qualification" value="{{ old('qualification') }}" required autofocus>

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
                                                                <input type="file" name="image" id="image" class="form-control" value="{{ old('image') }}" required autofocus>
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
                                                                <input type="text" name="bio" id="bio" class="form-control" maxlength="240" required autofocus value="{{ old('bio') }}">
                                                                @if ($errors->has('bio'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('bio') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Create
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
