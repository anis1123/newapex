@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Posts</div>

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
                                                <form  role="form" method="POST" action="{{ route('store_post') }}">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label for="title" class="col-md-12 control-label">Title</label>

                                                            <div class="col-md-12">
                                                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                                                @if ($errors->has('title'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('title') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class=" form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                                            <label for="body" class="col-md-4 control-label">Body</label>

                                                            <div class="col-md-12">
                                                                <textarea name="body" id="body" cols="200" rows="1000" class="form-control" required>{{ old('body') }}</textarea>
                                                                @if ($errors->has('body'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('body') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class="form-group">
<<<<<<< HEAD
                                                            <div class="col-md-6 pt-4">
=======
                                                            <div class="col-md-6 col-md-offset-4">
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e
                                                                <button type="submit" class="btn btn-primary">
                                                                    Create
                                                                </button>
                                                                <a href="{{ route('list_posts') }}" class="btn btn-danger">
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
<<<<<<< HEAD

=======
@include('backend.layout.footer')
>>>>>>> 662bf1ce9fd0fb74e79475202b9a3e050553352e

@endsection
