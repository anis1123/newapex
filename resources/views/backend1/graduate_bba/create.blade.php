@extends('backend.layout.app')




@section('content')
@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">BBA<br><small>Add Graduate Program</small></div>
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
                                            'route' =>'backend1.graduate_bba.store',
                                            'files' => TRUE

                                       ]) !!}


            

                                        <div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}" >
                                            {!! Form::label('body') !!}
                                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}

                                            @if($errors->has('body'))
                                                <span class="help-block">{{ $errors->first('body') }}</span>
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
    </script>
@endsection

@section('script')
 <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection
