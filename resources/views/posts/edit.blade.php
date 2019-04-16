@extends('backend.layout.app')



@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')



                <div class="dashboard-wrapper pt-5">
                        <div class="container-fluid">
                                <div class="row justify-content-center">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header"> Edit</div>

                                            <div class="card-body">
                                                @if (session('status'))
                                                    <div class="alert alert-success" role="alert">
                                                        {{ session('status') }}
                                                    </div>
                                                @endif
                                                <div class="container">
                                                        <div class="row">

                <div class="panel panel-default">
                        <div class="pt-3">
                                @if(session()->has('success'))
                                <div class="alert alert-success col-md-12">
                                    {{ session()->get('success') }}
                                </div>
                            @endif
                        </div>

                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ route('update_post', ['post' => $post->id]) }}">
                            {{ csrf_field() }}

                            <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                <label for="title" class="col-md-12 control-label">Title</label>

                                <div class="col-md-12">
                                    <input id="title" type="text" class="form-control" name="title" value="{{ old('title', $post->title) }}" required autofocus>

                                    @if ($errors->has('title'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('title') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
                                <label for="body" class="col-md-4 control-label">Body</label>

                                <div class="col-md-12">
                                    <textarea name="body" id="body" cols="90" rows="10" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                                    @if ($errors->has('body'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('body') }}</strong>
                                        </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        Update
                                    </button>
                                    @can('publish-post')
                                    <a href="{{ route('publish_post', ['post' => $post->id]) }}" class="btn btn-primary">
                                        Publish
                                    </a>
                                    @endcan
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

@include('backend.layout.footer')

@endsection
