@extends('backend.layout.app')

@include('backend.layout.header')

@include('backend.layout.sidebar')


@section('content')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Vacancy Add</div>

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
                                                <form  role="form" method="POST" action="{{route('chairmanmsg')}}" enctype="multipart/form-data">
                                                        @csrf

                                                        <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
                                                            <label for="message_detail" class="col-md-12 control-label">Chairman's Message</label>

                                                            <div class="col-md-12">
                                                                <textarea type="text" class="form-control" cols="200" rows="1000" name="message_detail" value="{{ old('message_detail') }}" required autofocus></textarea>

                                                                @if ($errors->has('message_detail'))
                                                                    <span class="help-block">
                                                                        <strong>{{ $errors->first('message_detail') }}</strong>
                                                                    </span>
                                                                @endif
                                                            </div>
                                                        </div>

                                                        <div class=" form-group">
                                                            <label for="image" class="col-md-4 control-label">Image</label>

                                                            <div class="col-md-12">
                                                                <input type="file" name="image" >


                                                            </div>
                                                        </div>

                                                        <div class="form-group">
                                                            <div class="col-md-12 col-md-offset-4">
                                                                <button type="submit" class="btn btn-primary">
                                                                    Create
                                                                </button>
                                                                <a href="{{ route('chairman_index') }}" class="btn btn-danger">
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
