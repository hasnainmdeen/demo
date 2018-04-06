<!DOCTYPE html>



<html lang="en">

<head>

<meta charset="UTF-8">

<title>Travasia - HTML Responsive Template</title>



<!-- Google Fonts -->

<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">

<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet"> 



<!-- Style -->



<meta name="viewport" content="initial-scale=1.0, width=device-width" />

<link rel="stylesheet" type="text/css" href="{{url ('css/bootstrap.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url ('css/font-awesome.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/hover-min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url ('css/animate.css')}}">

<link rel="stylesheet" type="text/css" href="{{url ('css/jquery-ui.css')}}">">

<link href="{{url ('css/YouTubePopUp.css')}}" type="text/css" rel="stylesheet">

<link rel="stylesheet" href="{{url ('css/imagehover.min.css')}}">

<link rel="stylesheet" href="{{url ('css/owl.carousel.css')}}">

<link href="css/jquery.bxslider.css" type="text/css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="{{url('slicknav.min.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/styles.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/responsive.css')}}">

<link rel="stylesheet" type="text/css" href="{{url('css/colors.css')}}">

</head>

<style type="text/css">

    .hotel-hover:hover{   

    color: white;

    background: #2571ad;

    opacity: 0.6;

}

    .image-size{

        height: 20%;

       width: 20%;

    }

    .hotel-border{

        border-color:blue;

        border-style: solid;

        border-width: 1px;

        margin:50px;

        text-align: center;

        h3.font-size:  60   px;

        p.font-size: 28px;

    }

</style>







<body>









<!-- Top Bar -->

<div id="topBar">

    <div class="container">

        <div class="row">

            <div class="col-sm-4">

                <img src="images/hotelone.png" alt="Hotel One">

            </div>

            <div class="col-sm-8 text-right">

                <div class="headerTopBar">

                    <p><i class="fa fa-phone"></i><a href="tel:123-123-1234">123-123-1234</a></p>

                    <p><i class="fa fa-envelope"></i><a href="mailto:info@yourdomain.com">info@yourdomain.com</a></p>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Navigation -->

<div id="navigation">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <nav class="navbar navbar-default">

                    <div class="navbar-header">

                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav"> 

                            <span class="sr-only">Toggle navigation</span> 

                            <span class="icon-bar"></span> 

                            <span class="icon-bar"></span> 

                            <span class="icon-bar"></span> 

                        </button>

                        

                    </div>

                    <div id="main-nav" class="navbar-collapse collapse">

                        <ul id="menu-list" class="list-inline list-unstyled pull-right">

                            <li> <a href="index.html"> Home </a> </li>

                            <li> <a href="accomodation.html"> Accomodation </a> </li>

                            <li> <a href="transport.html"> Transport </a> </li>

                            <li> <a href="packages.html"> Packages </a> </li>

                            <li> <a href="budget.html"> Budget </a> </li>

                            <li> <a href="booking.html"> Booking </a> </li>

                            <li> <a href="places.html"> Places </a> </li>

                            <li> <a href="contact.html"> Contact Us </a> </li>

                        </ul>

                    </div>

                </nav>

            </div>

        </div>

    </div>

</div>









<div id="breadCrumb">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 ">

                <div class="breadCrumbText">

                    <div class="row">

                        <div class="col-sm-6">

                            <h3>Contact Us</h3>

                        </div>

                        <div class="col-sm-6 text-right">

                            <p>

                                <a href="index.html">Home</a>

                                <i class="fa fa-angle-right"></i>

                                <a href="contact.html">Contact Us</a>

                            </p>

                        </div>

                    </div>

                    

                </div>

            </div>

        </div>

    </div>

</div>

@if (Session::has('message'))

    <div class="alert alert-info">{{ Session::get('message') }}</div>

@endif



 @foreach($places as $key => $value)

            <div class="place-border">

            <a style="display:block; text-decoration:none" class="hotel-hover" href="{{ url('places', $value->id) }}">

            <img class="image-size" src="data:image/jpeg;base64,{{ base64_encode($value->Image) }}">

            <h3 style="font-size: 70px;">{{ $value->Name }}</h3>

            <p style="font-size: 25px;">{{ $value->City }}</p>

            <p style="font-size: 25px;">{{ $value->Hours }} Hours </p>

            <p style="font-size: 25px;">{{ $value->Amount }} Rs. </p>

            </a>

        </div>

            @endforeach 





<div id="prefooter">

    <div class="container">

        <div class="row">

            <div class="col-sm-6">

                <div class="prefooterText">

                    <h4><span>CALL: </span><a href="tel:123-123-1234">123-123-1234</a></h4>

                    <p>Travasia - HTML Responsive Template</p>

                </div>

            </div>

            <div class="col-sm-6 text-right">

                <div class="prefooterText">

                    <p>Copyright © 2018 Travasia</p>

                    <p>All Rights Reserved.</p>

                </div>

            </div>

        </div>

    </div>

</div>

<div id="footer">

    <div class="container">

        <div class="row">

            <div class="col-sm-12 text-center">

                <div id="footerText">

                    <ul>

                    

                        <li><a href="accomodation.html">Accomodation</a> <span>| </span></li>

                        <li><a href="transport.html">Transport</a> <span>| </span></li>

                        <li><a href="packages.html">Packages</a> <span>| </span></li>

                        <li><a href="budget.html">Budget</a> <span>| </span></li>

                        <li><a href="booking.html">Booking</a> <span>| </span></li>

                        <li><a href="places.html">Places</a> <span>| </span></li>

                        <li><a href="contact.html">Contact</a></li>

                    

                    </ul>

                </div>

            </div>

        </div>

    </div>

</div>



<!-- Scripts --> 



<script src="{{ url('js/jquery-1.12.3.min.js')}}"></script> 

<script src="{{ url('js/jquery-ui.js')}}"></script> 

<script src="{{url('js/wow.min.js')}}"></script> 

<script src="{{url('js/bootstrap.min.js')}}"></script> 

<script src="{{ url('js/owl.carousel.js')}}"></script> 

<script src="{{ url('js/YouTubePopUp.js')}}"></script> 

<script src="{{url('js/jquery.mixitup.min.js')}}"></script> 

<script src="{{url('js/jquery.counterup.min.js')}}"></script> 

<script src="{{url('js/waypoint.js')}}"></script> 

<script src="{{url('js/jquery.bxslider-rahisified.min.js')}}"></script> 

<script src="{{ url('js/jquery.validate.js')}}"></script> 

<script src="{{url('js/jquery.slicknav.min.js')}}"></script> 

<script src="{{url('js/jquery.fancybox.pack.js')}}"></script> 

<script src="{{url('js/custom.js')}}"></script>

</body>

</html>
