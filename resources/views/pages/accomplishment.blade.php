@extends('layouts.frontend')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <title>About Us-Sorophine Fitness Hub</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../css/style.css">
        <link rel="icon" href="../images/logo.png" type="image/png">
        <style>
           .dropdown-item{
               color:#fff;
           }
        </style>
        <!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = 'f42203c394de6ba657e6528792fd17679e93f2ce';
    window.smartsupp||(function(d) {
      var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
      s=d.getElementsByTagName('script')[0];c=d.createElement('script');
      c.type='text/javascript';c.charset='utf-8';c.async=true;
      c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
    </script>
    </head>
    
    <body>

        

         <main>
            
  <!--BANNER SECTION-->
  <section class="bannerSection bannerPageSection" style="background-image: url('../images/about.jpg');">
<div class="innerBannerPageSection"  style="padding-top:100px;padding-left: 70px;">
    <div class="bannerContent">
    <h2><strong>Accomplishments</strong></h2>
    <h6><strong>Home/Accomplishments</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->
<!--ACCOMPLISHMENT SECTION-->
<section class="achievementSpot bg-light">  
<center>            
    <h2 class="text-center mt-5">
        <strong>Hall of Fame</strong>
    </h2>
            <div class="border"  style="background-color:purple !important;
            height: 4px!important;
            width: 40px!important;
            margin:10px,0px!important;
        "></div>
<br>
            <div class="row achievementSpotRow">
            <div class="col-md-3">
                <img src="../images/trophy2.jpg" class="img-fliud img-thumbnail float-left" style="height: 200px;width: 600px;">
            </div>
            <div class="col-md-9">
                <h5 class="ml-4 py-3">
                    <strong>Pilates</strong>
                </h5>
                <p class="ml-4">
         Experience a unique and transformative approach to pilates that will leave you feeling not just stronger, longer and leaner but also relieved.With our well recognized and experienced personal trainers we give our clients the best workout experiences.Our fitness and health hub gives you the best guidelines   
                <br>
                <span style="color: purple !important;">
                    <strong>
                        <i class="fas fa-calendar-alt"></i> &nbsp;Awarded on: 12th April 2020
                    </strong>
                </span>
                </p>
            </div>
        </center>
</section>
<br>

 <!--seCOND SECTION-->
 <section>
<div class="achievementSpot bg-light">
    <center>
        <div class="row achievementSpotRow">
            <div class="col-md-9">
                <h5 class="ml-4 py-3">
                    <strong>
                        Functional fitness competition
                    </strong>
                </h5>
<p class="ml-4">
        Launched in 2020 with just fifty competitors, functional fitness club is organized into beginner,intermediate and advanced categoties with junior and masters divisons in each catering for athletes of all levels. Our club got the first position in all categories earning us a lot of prizes. This is why we continue to give you the best.

        <br>
        <span style="color: purple !important";>
            <strong>
                <i class="fas fa-calendar-alt"></i>&nbsp;Awared on:14th June, 2020
            </strong>
        </span>
</p>
            </div>
<div class="col-md-3">
<img src="../images/trophy.jpg" class="img-fliud img-thumbnail float-right" style="height: 200px;width: 600px;">
</div>
        </div>
    </center>
</div>
 </section>
 <!--END OF SECOND SECTION-->
<!--END OF ACCOMPLISHMENT-->
       </main>
        <br>
        
    </body>
</html>

@endsection