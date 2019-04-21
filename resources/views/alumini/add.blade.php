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
        <form action="createalumini" method="GET">



        <div class="form-group"><label for="user">Name:</label><br>
        <input id="name" name="name" class="form-control" type="text" placeholder="Full Name"></div>
        <div class="form-group"><label for="Email">Email:</label><br>
        <input id="email" class="form-control" name="email" type="email" placeholder="Email"></div>


            <div class="row pl-3">
        <div class="form-group"><label for="program">Program:</label><br>
        <select name="program" class="form-control">
        <option class="form-option" value="">Program</option>
        <option class="form-option" value="BBA">BBA</option>
        <option class="form-option" value="BBA-TT">BBA-TT</option>
        <option class="form-option" value="BBA-BI">BBA-BI</option>
        <option class="form-option" value="BCIS">BCIS</option>
        <option class="form-option" value="MBA">MBA</option>
        <option class="form-option" value="MBA-EP">MBA Evening</option>
        </select></div>
        <div class="form-group pl-1"><label for="year">Year:</label><br>
        <select name="year" class=" form-control"><option value="">Year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option></select></div>
    </div>

        <div class="form-group"><label for="occupation">Occupation:</label><br>
        <input id="occupation" class="form-control" name="occupation" type="text" placeholder="Occupation"></div>
        <div class="form-group"><label for="sector">Sector:</label><br>
        <input id="sector" class="form-control" name="sector" type="text" placeholder="Sector"></div>
        <div class="form-group"><label for="phone">Contact Number:</label><br>
        <input id="phone" class="form-control" name="phone" type="number" placeholder="Contact number"></div>
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

</div>
@include('backend.layout.footer')

@endsection
