@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>About us-Sorophine Fitness Hub</title>
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
    <h2><strong>About Us</strong></h2>
    <h6><strong>Home/About Us</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->

  <!--CONTENT SECTION-->

  <section class="contentSection bg-light">
      <center>
          <div class="row contentSectionRow">
 
              <div class="col-md-4">
                  <img src="../images/pillar5.jpg" class="img-fluid img-thumbnail">
              </div>

              <div class="col-md-8 mt-5" >
<h3 class="ml-4"><strong>Our Story</strong>
    <div class="border"></div>
</h3>

<h6 class="py-3 ml-4">
    <strong>
        <i class="fas fa-calendar-alt"></i>
        &nbsp;1989 - now
    </strong>
</h6>

<p class="ml-4">
    With the rise of social media there seems to have been a shift in our focus towards the importance of what we look like rather than what we feel like. Sorophine is the founder of Sorophine fitness hub hence the name.
   At Sorophine fitness hub we inspire  people to move from the promise of dramatic weight loss</div>
          </div>
      </center>   

  </section>
  <!--END OF COntent SECTION-->

<!--VALUE SECTION-->
<section class="valueSection bg-light">
<center>
    <h3 class="text-center">
       <strong>Our Values</strong> 
       
    </h3>
    <div class="border"></div>

    <div class="row valueSectionRow">

    <div class="col-md-4">
        <i class="fa fas fa-leaf fa-3x"></i>
        <h4 class="mt-4">
            <strong>Mission</strong>
        </h4>
        <div class="border"></div>
        <p>
       To provide an introduction to new possibilities that will echo through the choices you  make later in life.    
        </p>
</div>

<div class="col-md-4">
    <i class=" fa fas fa-chess-queen fa-3x"></i>
    <h4 class="mt-4">
        <strong>Vision</strong>
        
    </h4>
    <div class="border"></div>
    <p>
       To significantly reflect our attitude towards realistic and maintainable lifestyle changes and choices you make in life.
    </p>
</div>
<!--column three-->

<div class="col-md-4">
    <i class="fa fas fa-chess-king fa-3x"></i>

    <h4 class="mt-4">
        <strong>Motto</strong>
        
    </h4>
    <div class="border"></div>
    <p>
        The first wealth is Health </p>

      </div>
<!--end of column three-->
    </div>
</center>
</section>

<!--END OF VALUE SECTION-->

    <!--member secton-->
    <br><br>
    <section class="memberSection">
        <div class="innerSection">
            <center>
            <div class="row membersRow">
                <div class="col md-4">
                <h4>1200</h4>
                <div class="border"></div>
                <h5>
                    <small>Trainees</small>
                </h5>
               </div>

               <div class="col md-4">
                   <h4>171</h4>
                   <div class="border"></div>
                   <h5>
                       <small>Trainers</small>
                   </h5>
                  </div>

                  <div class="col md-4">
                   <h4>39</h4>
                   <div class="border"></div>
                   <h5>
                       <small>Classes</small>
                   </h5>
                  </div>
              
            </div>
           </center>

        </div>

       
    </section>
    <!--end of member section--><br>
    <!--news section-->
            

       </main>
          
    </body>
</html>

@endsection
