@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Office-Sorophine Fitness Hub</title>
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
    <h2><strong>Office</strong></h2>
    <h6><strong>Home/Office</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->
<!--ACCOMPLISHMENT SECTION-->

<section class="achievementSpot bg-light">--
        <h2 class="text-center mt-5">
            <strong>What We do Best</strong>
        </h2>
        <center>
            <div class="border" style="background-color:purple !important;
            height: 4px!important;
            width: 40px!important;
            margin:10px,0px!important;
        "></div>
            <br>
            <div class="row achievementSpotRow">
            <div class="col-md-3">
                <img src="../images/office1.jpg" class="img-fliud img-thumbnail float-left" style="height: 220px;">
            </div>
            <div class="col-md-9">
                <h5 class="ml-4 py-3">
                    <strong>Lifestyle seminars</strong>
                </h5>
                <p class="ml-4">
                   Sorophine Fitness Hub helps its clients to develop and implement healthy lifestyle habits. Our services include personal fitness training, nutrition meal plans, nutriotion and healthy eating,tips to fitting in fitness and creating a workout routine, strategies to stressing less, workout routine,workplace workourt hacks, healthy but-easy recipes, smart snacking ideas,motivation and goal setting, injury prevention and safety guidelines,to tips on striking a work-life balance.<br>
                <span>
                    
                        <i class="fas fa-user-alt"></i> &nbsp;Headed by: Zozibini Tunzi
                    
                </span>
                </p>
            </div>
        </center>
</section>


 <!--seCOND SECTION-->
 <section>
<div class="achievementSpot bg-light">
    <center>
        <br>
            <div class="row achievementSpotRow">
            <div class="col-md-3">
                <img src="../images/office2.jpg" class="img-fliud img-thumbnail float-left" style="height: 220px;">
            </div>
            <div class="col-md-9">
                <h5 class="ml-4 py-3">
                    <strong>Nutrition</strong>
                </h5>
                <p class="ml-4">
                    Are you interested in joining a nutrition seminar but dont know where and how? Sorophine Fitness Hub is just what you need to enroll in.Eating a balnced diet and being physically active are two of the most important things you can do to be and stay healthy at any age.Eating smart and being active have similar eefects on our health. To get this guidelines, enroll now for an improved and better health.some of the benefits include reduced risks of chronic diseases such as diabetes.   <br>
                <span>
                    
                        <i class="fas fa-user-alt"></i> &nbsp;Headed by: Beto Perez
                    
                </span>
                </p>
            </div>
    </center>
</div>
 </section>
 <!--END OF SECOND SECTION-->

 <!--THIRD SECTION-->
 <section>
    <div class="achievementSpot bg-light">
        <center>
            <br>
                <div class="row achievementSpotRow">
                <div class="col-md-3">
                    <img src="../images/office3.jpg" class="img-fliud img-thumbnail float-left" style="height:220px;">
                </div>
                <div class="col-md-9">
                    <h5 class="ml-4 py-3">
                        <strong>Weight loss</strong>
                    </h5>
                    <p class="ml-4">
                    Join our supportive group that comes together to burn fat and create healthy habits with you. Your healthy weight loss success starts here. Find your motivation and go all in. We ae with you all the way. Our members dont just lose weight but they also gain confidence, strength, community, relationships, shared goals and good habits. Get result proven programs and make changes that last.Kick off your weight loss efforts with a two-week detoxification program.Get your coach today.
                        <br>
                    <span>
                        
                            <i class="fas fa-user-alt"></i> &nbsp;Headed by: Beto Perez
                        
                    </span>
                    </p>
                </div>
        </center>
    </div>
     </section>
 <!--end of third section-->
<!--END OF ACCOMPLISHMENT-->
       </main>
        <br>
             

    </body>
</html>

@endsection