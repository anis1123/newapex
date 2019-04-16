@extends('backend.layout.app')




@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')
<div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                    <div class="pt-3">
                            @if(session()->has('success'))
                            <div class="alert alert-success col-md-12">
                                {{ session()->get('success') }}
                            </div>
                        @endif
                    </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        {{ $post->title }}
                        <a class="btn btn-sm btn-default pull-right" href="{{ route('list_posts') }}">Return</a>
                    </div>

                    <div class="panel-body">
                        {{ $post->body }}
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('backend.layout.footer')

@endsection
