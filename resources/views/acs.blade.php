@extends('layout.app')

@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle"></div>




</section>

<div class="topic text-center mt-4 ">
    <h5 class="heading"> INSIDE APEX</h5>
</div>


<div id="responsiveTabsDemo" class="m-5">
    <ul>
        <li><a href="#tab">Apex Carrier Service</a></li>
        <li><a href="#tabs"> Vacancy </a></li>
        <li><a href="#tabss"> Alumini Update</a></li>

    </ul>
    <div id="tab" class="p-5">




    </div>


    <div id="tabs">
        <section id="discover">
				<div class="container p-1">
					<div class="row">
                        
						<div class="col-md-12">
                            
                            @foreach($vacancy as $post)
            
            <div  >
                <h3>{{$post->vacancy}}</h3>
               <img class="card-img-top" src="{{asset('upload/' . $post->image)}}" alt="Card image cap" height="500" > 
                {!! $post->body !!}
                
            </div>
            @endforeach
                        
                
				</div>
				</div>
                <div class="panel-footer center">{{$vacancy->links()}}</div>
			</section>

    </div>

    <div id="tabss">
        <h4 class="px-5 pt-3 pb-0 text-center ">Alumini</h4>
        <div id="td_uid_3_5cab0bac79311" class="tdc-row px-5 pt-0"><div class="vc_row td_uid_5_5cab0bac7936f_rand  wpb_row td-pb-row px-5"><div class="vc_column td_uid_6_5cab0bac79475_rand  wpb_column vc_column_container td-pb-span12"><div class="wpb_wrapper"><div class="wpb_wrapper wpb_text_column td_block_wrap td_block_wrap vc_column_text td_uid_7_5cab0bac7953b_rand  td-pb-border-top td_block_template_1" data-td-block-uid="td_uid_7_5cab0bac7953b" "=""><div class="td-block-title-wrap"></div><p></p><center><strong>All the Alumni of Apex College are requested to fill in the form down below so that you may be contacted to events organized by our students. Also, the form will be used if the college has to contact you regarding placements. </strong></center><p></p>
        <br>
        <div class="px-5 col-md-10 offset-md-2">
        <form action="createaluminifront" method="GET">



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
</section>
    </div>
</section>



@endsection
