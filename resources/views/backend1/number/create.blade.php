@extends('backend.layout.app')




@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-4">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Welcome<br><small>Add Number</small></div>
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
                                            'route' =>'backend1.number.store',

                                       ]) !!}

                                        <div class="form-group {{ $errors->has('academic') ? 'has-error' : '' }}">
                                            {!! Form::label('academic') !!}
                                            {!! Form::number('academic', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('academic'))
                                                <span class="help-block">{{ $errors->first('academic') }}</span>
                                            @endif
                                        </div>

                                    

                                        <div class="form-group {{ $errors->has('faculty') ? 'has-error' : '' }}">
                                            {!! Form::label('faculty') !!}
                                            {!! Form::number('faculty', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('faculty'))
                                                <span class="help-block">{{ $errors->first('faculty') }}</span>
                                            @endif
                                        </div>


                                        <div class="form-group {{ $errors->has('event') ? 'has-error' : '' }}">
                                            {!! Form::label('event') !!}
                                            {!! Form::number('event', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('event'))
                                                <span class="help-block">{{ $errors->first('event') }}</span>
                                            @endif
                                        </div>


                                        <div class="form-group {{ $errors->has('alumini') ? 'has-error' : '' }}">
                                            {!! Form::label('alumini') !!}
                                            {!! Form::number('alumini', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('alumini'))
                                                <span class="help-block">{{ $errors->first('alumini') }}</span>
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
