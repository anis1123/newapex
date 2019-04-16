@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Home Page(Page-4)</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading">




                                    <div class="panel-body ">



                                            @if(session()->has('success'))
                                            <div id="myAlert" class="alert alert-success col-md-12">
                                                {{ session()->get('success') }}
                                            </div>
                                        @endif

                                        <div class="row">
                                                <form  role="form" method="POST" action="{{ route('store_element') }}" enctype="multipart/form-data">
                                                        {{ csrf_field() }}

                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label for="title" class="col-md-12 control-label">Title</label>

                                                            <div class="col-md-12">
                                                                <input id="title" type="text" class="form-control" name="title-general" value="{{ old('title') }}" required autofocus>

                                                                @if ($errors->has('title'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('title') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class=" form-group">
                                                            <label for="images" class="col-md-4 control-label">Image</label>

                                                            <div class="col-md-12">
                                                                <input type="file" name="images" >


                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Create
                                                                </button>
                                                                <a href="{{ route('list-general') }}" class="btn btn-danger">
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


<script>
        function showAlert(){
  $("#myAlert").addClass("in")
}
        </script>
@include('backend.layout.footer')

@endsection
