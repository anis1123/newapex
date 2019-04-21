@extends('backend.layout.app')




@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">Faculty</div>
                                
                                <div class="card-header">
                                    <div class="pull-left">
                                        <a href="facultyadd" class="btn btn-primary">Add Faculty</a>
                                    </div>
                                </div>
                                    <div class="card-body">
                                        @if(session('message'))
                                            <div class="alert alert-success">
                                                {{ session('message') }}
                                            </div>
                                        @endif
                                        @if (! $faculty->count())
                                                <div class="alert alert-danger">
                                                    <strong> No record found</strong>
                                                </div>
                                            @else
                                            
                                                
                                                    @foreach($faculty as $post)
                                                    <div class="col-sm-6 col-md-4 pt-4">
                                                    <div class="card p-3">
                                                        <div class="caption">
                                                        <h3>{{$post->name}}</h3>

                                                        <img src="{{asset('upload/' . $post->image)}}" class="img-fluid" alt="">
                                            
                                                        <p class="pt-3">

                                                      
                                                            
                                                             <a href="{{route('faculty_edit',['faculty'=>$post])}}" class="btn btn-sm btn-warning" role="button"  >Edit</a>
                                                             <a href="{{route('faculty_delete',['faculty'=>$post->id])}}" class="btn btn-sm btn-danger" role="button"  style="color:white" >Delete</a>
                                                             </p>
                                                             

                                                        </div>

                                                    </div>
                                                
                                                 
                                                 </div>
                                                        
                                                    @endforeach
                                                
                                        @endif
                                    </div>

                            <div class="card-footer clearfix">
                                    {{$faculty->links()}}
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
