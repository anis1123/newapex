@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">News & Events<br><small>Update Heighlight</small></div>
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
                                            'route' =>['backend1.heighlights.update', $post->id],
                                            'files' => TRUE

                                       ]) !!}


                                       <div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
                                            {!! Form::label('title') !!}
                                            {!! Form::text('title', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('title'))
                                                <span class="help-block">{{ $errors->first('title') }}</span>
                                            @endif
                                        </div>

                                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
                                            {!! Form::label('body') !!}
                                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('body'))
                                                <span class="help-block">{{ $errors->first('body') }}</span>
                                            @endif
                                        </div>


                                        <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}">
                                            {!! Form::label('image', 'HeighLight Image') !!}
                                            {!! Form::file('image') !!}

                                            @if($errors->has('image'))
                                                <span class="help-block">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>


                                        <hr>

                                        {!! Form::submit('Update HeighLight', ['class' => 'btn btn-primary']) !!}

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
