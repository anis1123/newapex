@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">BBA-BI<br><small>Edit Semister I Plan</small></div>
                                <!-- <ol class="breadcrumb">
                                    <li>
                                        <a href="{{ url('/home') }}"><i class="fa fa-dashboard"></i>Dashboard</a>
                                    </li>
                                    <li><a href="{{ route('backend1.blog.index') }}">Blog</a></li>
                                    <li class="active">Add new</li>
                                </ol> -->

                                    <!-- making create form -->
                                    <div class="card-body">
                                       {!! Form::model($post, [
                                            'method' =>'PUT',
                                            'route' =>['backend1.semister1_bi.update', $post->id],
                                            'files' => TRUE

                                       ]) !!}


                                       <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            {!! Form::label('title') !!}
                                            {!! Form::text('title', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('title'))
                                                <span class="help-block">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>



                                        <div class="form-group {{ $errors->has('credits') ? 'has-error' : '' }}" >
                                            {!! Form::label('credits') !!}
                                            {!! Form::text('credits', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('credits'))
                                                <span class="help-block">{{ $errors->first('credits') }}</span>
                                            @endif
                                        </div>

                                        





                                        <hr>

                                        {!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

                                       {!! Form::close() !!}
                                    </div>

                        </div>
                    </div>
                </div>
            </div>

</div>
@include('backend.layout.footer')

@endsection

@section('script')
    <script type="text/javascript">
        $('ul.pagination').addClass('no-margin pagination-sm');
    </script>
@endsection

@section('script')
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
