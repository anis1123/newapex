@extends('backend.layout.app')


@section('content')

@include('backend.layout.header')

@include('backend.layout.sidebar')

<div class="dashboard-wrapper pt-5">
        <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header"> Add faculty</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif

                                <div class="panel panel-default">
                                    <div class="panel-heading">

                                            <div class="pt-3">
                                                    @if(session()->has('success'))
                                                    <div class="alert alert-success col-md-12">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                            </div>


                                    <div class="panel-body ">

                                        <div class="col-md-7">
        <form action="{{route('updatealumini',['alumini'=>$alumini])}}" method="GET">



        <div class="form-group"><label for="user">Name:</label><br>
        <input id="name" name="name" class="form-control" type="text" placeholder="Full Name" value="{{$alumini->name }}"></div>
        <div class="form-group"><label for="Email">Email:</label><br>
        <input id="email" class="form-control" name="email" type="email" placeholder="Email" value="{{$alumini->email }}" ></div>


            <div class="row pl-3">
        <div class="form-group"><label for="program">Program:</label><br>
        <select name="program" class="form-control">
        <option class="form-option" value="">Program</option>
        <option class="form-option" value="BBA"<?php if ($alumini['program']=='BBA'){echo 'selected="selected"';}?>>BBA</option>
        <option class="form-option" value="BBA-TT" <?php if ($alumini['program']=='BBA-TT'){echo 'selected="selected"';}?>>BBA-TT</option>
        <option class="form-option" value="BBA-BI" <?php if ($alumini['program']=='BBA-BI'){echo 'selected="selected"';}?>>BBA-BI</option>
        <option class="form-option" value="BCIS" <?php if ($alumini['program']=='BCIS'){echo 'selected="selected"';}?>>BCIS</option>
        <option class="form-option" value="MBA" <?php if ($alumini['program']=='MBA'){echo 'selected="selected"';}?>>MBA</option>
        <option class="form-option" value="MBA-EP" <?php if ($alumini['program']=='MBA-EP'){echo 'selected="selected"';}?>>MBA Evening</option>
        </select></div>
        <div class="form-group pl-1"><label for="year">Year:</label><br>
        <select name="year" class=" form-control">
        <option value="">Year</option>
        <option value="2017" <?php if ($alumini['year']=='2017'){echo 'selected="selected"';}?>>2017</option>
        <option value="2016"<?php if ($alumini['year']=='2016'){echo 'selected="selected"';}?>>2016</option>
        <option value="2015"<?php if ($alumini['year']=='2015'){echo 'selected="selected"';}?>>2015</option>
        <option value="2014"<?php if ($alumini['year']=='2014'){echo 'selected="selected"';}?>>2014</option>
        <option value="2013"<?php if ($alumini['year']=='2013'){echo 'selected="selected"';}?>>2013</option>
        <option value="2012"<?php if ($alumini['year']=='2012'){echo 'selected="selected"';}?>>2012</option>
        <option value="2011"<?php if ($alumini['year']=='2011'){echo 'selected="selected"';}?>>2011</option>
        <option value="2010"<?php if ($alumini['year']=='2010'){echo 'selected="selected"';}?>>2010</option>
        <option value="2009"<?php if ($alumini['year']=='2009'){echo 'selected="selected"';}?>>2009</option>
        <option value="2008"<?php if ($alumini['year']=='2008'){echo 'selected="selected"';}?>>2008</option>
        <option value="2007"<?php if ($alumini['year']=='2007'){echo 'selected="selected"';}?>>2007</option>
        <option value="2006"<?php if ($alumini['year']=='2006'){echo 'selected="selected"';}?>>2006</option>
        <option value="2005"<?php if ($alumini['year']=='2005'){echo 'selected="selected"';}?>>2005</option>
        <option value="2004"<?php if ($alumini['year']=='2004'){echo 'selected="selected"';}?>>2004</option>
        <option value="2003"<?php if ($alumini['year']=='2003'){echo 'selected="selected"';}?>>2003</option>
        <option value="2002"<?php if ($alumini['year']=='2002'){echo 'selected="selected"';}?>>2002</option>
        <option value="2001"<?php if ($alumini['year']=='2001'){echo 'selected="selected"';}?>>2001</option>
        <option value="2000"<?php if ($alumini['year']=='2000'){echo 'selected="selected"';}?>>2000</option>
        </select></div>
    </div>

        <div class="form-group"><label for="occupation">Occupation:</label><br>
        <input id="occupation" class="form-control" name="occupation" type="text" value="{{$alumini->occupation }}" placeholder="Occupation"></div>
        <div class="form-group"><label for="sector">Sector:</label><br>
        <input id="sector" class="form-control" name="sector" type="text" placeholder="Sector" value="{{$alumini->sector }}"></div>
        <div class="form-group"><label for="phone">Contact Number:</label><br>
        <input id="phone" class="form-control" name="phone" type="number" placeholder="Contact number" value="{{$alumini->phone }}"></div>
        <p></p><br>
        <input class=" btn btn-dark" class="form-control" name="add" type="submit" value="Register"></form>
        </div></div></div></div></div>
    </div>
    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@include('backend.layout.footer')

@endsection
