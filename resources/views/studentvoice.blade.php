@extends('layout.app')

@section('content')
<div class="overlay"></div>
<section id="home">
    <div class="particle"></div>




</section>

<div class="topic text-center mt-4 ">
    <h5 class="heading">STUDENTS</h5>
</div>










<section id="student" class="px-5">


<div class="container py-5">
<div class="row  px-5 mt-1" style="
box-shadow: 0 0 0.1;
background: #fff;
padding-bottom: 49px;
margin-top:100px
">
<div class="col-md-12">
    <div class="student row pt-5">
        <div class="col-md-4 p-1 m-0">
            <div class="card">
                <div class="overlay-stu"></div>

                <a href="#"><h4>Career Development</h4></a>
            <img src="{{asset('/img/a.jpg')}}" alt="">
            </div>
        </div>
        <div class="col-md-4 p-1 m-0">
            <div class="card">
                    <div class="overlay-stu"></div>
                    <a href="#"><h4>Student Service</h4></a>
                <img src="{{asset('/img/a.jpg')}}" alt="">
            </div>
        </div>
        <div class="col-md-4 p-1 m-0">
            <div class="card">
                    <div class="overlay-stu"></div>
                    <a href=""><h4>Club And Organization</h4></a>
                <img src="{{asset('/img/a.jpg')}}" alt="">
            </div>
        </div>
    </div>
</div>


    </div>

</section>
<div class="container-fluid p-0 m-0">
        <div class="cover-img-stu p-0 m-0">
        <img src="{{asset('img/Cover/cover1.jpg')}}" alt="">
        </div>
    </div>

    <div class="card col-md-6 text-center pt-5" style="
        z-index: 3;
        position: absolute;
        top: 183%;
        left: 100px;
        height:350px;
        border-radius:10px;
        padding: 40px;
        text-align: justify;
    ">
        <h4>Vibrant. Diverse. Global. Transformative.</h4>
        <p  class="pt-4" style="text-align:justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit, error perferendis sint corrupti nobis deleniti accusantium perspiciatis optio! Sit quis id nemo qui quibusdam officia consequatur reprehenderit eum deleniti recusandae?
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Inventore ullam sed, id mollitia cum non! Eum recusandae voluptate maiores, corporis magnam repellendus in asperiores numquam aut, minus accusantium exercitationem adipisci.
        </p>



        <div class="row pt-3 px-5">
        <a href=""><button class="btn" style="box-shadow:none"> About</button></a>
        <a href=""><button class="btn" style="box-shadow:none"> See More</button></a>
    </div>
    </div>
</div>
<div class="container py-5 px-0">
    <h4 class="text-center"><u>Campus Life</u></h4>
    <div class="campuslife row p-0 m-0 p-5">

        <div class="col-md-6 p-2" style="box-shadow:0 0 1px 0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Enim ratione nostrum, distinctio eos facere animi, pariatur perferendis perspiciatis dolore quo rem qui, quas corrupti libero ducimus incidunt! Fugiat, nesciunt sunt?</div>
        <div class="col-md-6 p-2" style="box-shadow:0 0 1px 0">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta exercitationem odit laudantium voluptas alias fugiat, magni ducimus quibusdam. Ipsum eveniet pariatur iste at tempore officia enim iure culpa dolore incidunt.</div>
    </div>

    <div class="campuslife row p-0 m-0 p-5">
            <div class="col-md-6"><img src="{{asset('img/Cover/cover1.jpg')}}" alt="" width="500"></div>
            <div class="col-md-6"><img src="{{asset('img/Cover/cover1.jpg')}}" alt="" width="500"></div>

    </div>


</div>
<style>
        .cover-img-stu{

        }
        .cover-img-stu img{
            width: 100%;
            min-width: 500px;
        }

        .student img{
            height: 380px!important;
        }
        .student .card{
           position: relative;
        }
        .overlay-stu{
            position: absolute;
        top: 0;
        width: 100%;

        left: 0px;
        right: 0;
        background: #000;
        height: 100%;
        opacity: 0.5;
        }
        .student .card h4{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate3d(-50%,-50%,0);
            color: #fff
        }

    </style>


@endsection

