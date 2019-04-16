@extends('backend.layout.app')




@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">BBA-TT<br><small>Graduate Program</small></div>
                                <!-- <ol class="breadcrumb">
                                    <li>
                                        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li><a href="{{ route('backend1.blog.index') }}">Blog</a></li>
                                    <li class="active">All Posts</li>
                                </ol> -->

                                <div class="card-header">
                                    <div class="pull-left">
                                        <a href="{{ route('backend1.graduate_tt.create') }}" class="btn btn-primary">Add Graduate Program</a>
                                    </div>
                                </div>
                                    <div class="card-body">
                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (! $graduatepost->count())
                                                <div class="alert alert-danger">
                                                    <strong> No record found</strong>
                                                </div>
                                            @else
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <td width="80">Action</td>
                                                        <td>Body</td>
                                                        <td width>Date</td>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($graduatepost as $post)
                                                        <tr>
                                                            <td>
                                                            {!! Form::open(['method' => 'DELETE', 'route' => ['backend1.graduate_tt.destroy', $post->id]]) !!}
                                                                <a href="{{ route('backend1.graduate_tt.edit', $post->id) }}" class="btn btn-xs btn-default">
                                                                    <i class="fa fa-edit"></i>
                                                                </a>

                                                                <button type="submit" class="btn btn-xs btn-danger">
                                                                    <i class="fa fa-times"></i>
                                                                </button>
                                                                {!! Form::close() !!}
                                                            </td>

                                                            <td>{!! Str::words($post->body, 10,'......') !!}</td>


                                                            <td>
                                                                <abbr title="{{ $post->dateFormatted(true) }}">{{ $post->dateFormatted() }}</abbr>

                                                            </td>

                                                        </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>
                                        @endif
                                    </div>

                            <div class="card-footer clearfix">
                                <div class="pull-left">
                                    {{ $graduatepost->render() }}
                                </div>
                            </div>
                             <div class="pull-right">
                                <strong>Total: </strong><small>{{ $graduatepostcount }} {{ str_plural('Item', $graduatepostcount) }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
<!-- @include('backend.layout.footer') -->

@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection
