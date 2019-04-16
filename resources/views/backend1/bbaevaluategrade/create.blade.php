@extends('backend.layout.app')




@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">BBA<br><small>Add BBA Evaluate And Grading</small></div>
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
                                            'method' =>'POST',
                                            'route' =>'backend1.bbaevaluategrade.store',

                                       ]) !!}

                                        <div class="form-group {{ $errors->has('grade') ? 'has-error' : '' }}">
                                            {!! Form::label('grade') !!}
                                            {!! Form::text('grade', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('grade'))
                                                <span class="help-block">{{ $errors->first('grade') }}</span>
                                            @endif
                                        </div>

                                    

                                        <div class="form-group {{ $errors->has('cgpa') ? 'has-error' : '' }}">
                                            {!! Form::label('cgpa') !!}
                                            {!! Form::text('cgpa', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('cgpa'))
                                                <span class="help-block">{{ $errors->first('cgpa') }}</span>
                                            @endif
                                        </div>


                                        <div class="form-group {{ $errors->has('description') ? 'has-error' : '' }}">
                                            {!! Form::label('description') !!}
                                            {!! Form::text('description', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('description'))
                                                <span class="help-block">{{ $errors->first('description') }}</span>
                                            @endif
                                        </div>


                                        <hr>

                                        {!! Form::submit('Create', ['class' => 'btn btn-primary']) !!}

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

        $('#title').on('blur', function() {
            var theTitle = this.value.toLowerCase().trim(),
                slugInput = $('#slug'),
                theSlug = theTitle.replace(/&/g, '-and-')
                                  .replace(/[^a-z0-9-]+/g, '-')
                                  .replace(/\-\-+/g, '-')
                                  .replace(/^-+|-+$/g, '');


            slugInput.val(theSlug);
        });
    </script>
@endsection
