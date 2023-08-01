@extends('layouts.frontend')

@section('content')

<!DOCTYPE html>
<html>
    <head>
        <title>Home-Sorophine Fitness Hub</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" href="images/logo.png" type="image/png">
        <style>
           .dropdown-item{
               color:#fff;
           }
        </style>
        <!--//Smartsupp Live Chat script -->
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
    <!--<h2>Hi, {{session('user')}}</h2>-->

        <main>
                  <!-- Bannersection-->
         <section class="bannerSection">
            <div id="carouselIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
               <ol class="carousel-indicators">
                   <li class="active" data-target="#carouselIndicators" data-slide-to="0"></li>
                   <li  data-target="#carouselIndicators" data-slide-to="1"></li>
                   <li  data-target="#carouselIndicators" data-slide-to="2"></li>

               </ol>

               <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img class="d-block w-100 bannerImage img-fliud"  alt="First Slide" src="images/banner2.jpg">
                  </div>

                  <div class="carousel-item">
                    <img class="d-block w-100 bannerImage img-fliud"  alt="Second Slide" src="images/banner1.jpg">
                 </div>

                 <div class="carousel-item">
                    <img class="d-block w-100 bannerImage img-fliud"  alt="Third Slide" src="images/banner4.jpg">
                 </div>

               </div>

               <a class="carousel-control-prev" href="#carouselIndicators" role="button" data-slide="prev">
                   <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                   <span class="sr-only">Previous</span>
               </a>

               <a class="carousel-control-next" href="#carouselIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
              </a>

            </div>
         </section>
         <!--end banner section-->

         <!--MARKETING SECTION-->
         <section class="marketingSection">
             <h2 class="text-center mt-5">
                 <strong>This is what we offer</strong>
                 
             </h2>
             <center>
                 <div class="border"></div>
                 <p class="py-3">
                    We offer a variety of fitness classes at different levels, staff the facility with experienced instructors, both online and physical, reasonable operation hours and provide strength and cardio equipment that is safe and up-to-date.
           
                 <div class="row mt-5 marketingRow">
                    <div class="col md-4">
                    <i class="fa fas fa-hands-helping fa-3x"></i>
                        <h4 class="mt-4">
                             <strong>Brighter Future</strong>
                        </h4>
                            <div class="border"></div>
                            <p>
                                We help you improve your health and reduce the risk of developing diseases like cardiovascular diseases, giving you immediate and long-term health benefits and improve the quality of your life.                     </p>
                    </div>

                    
                    <div class="col md-4">
                        <i class="fa fas fa-people-carry fa-3x"></i>
                            <h4 class="mt-4">
                                 <strong>Qualified Trainers</strong>
                            </h4>
                                <div class="border"></div>

                                <p>
                                    Our personal trainers are all qualified and registered. They work with clients health and allied health proffessions, discuss goals, access fitness level and design a program to keep you motivated.
                                </p>
                        </div>

                        <div class="col md-4">
                            <i class="fa fas fa-book fa-3x"></i>
                                <h4 class="mt-4">
                                     <strong>State-of-the-art Facilities</strong>
                                </h4>
                                    <div class="border"></div>

                                    <p>
                                        Our personal trainers are all qualified and registered. They work with clients health and allied health proffessions, discuss goals, access fitness level and design a program to keep you motivated.
                                    </p>
                            </div>
                 </div> 
                </center> 
         </section>

         <!--achievementspot section-->
         <section class="achievementSpot bg-light">
             <h2 class="text-center mt-5">Our Excellence</h2>
             <center>
             <div class="border" style="background: purple;
             height: 4px !important;
             width: 40px;
             height: 3px;
             margin: 10px 0px;
         "></div>
             <br>
              <div class="row achievementSpotRow">
                     <div class="col md-5">
                         <img src="images/pillar5.jpg" alt="fitness hub" class="img-fluid">
                    </div>

                     <div class="col md-7">
                         <h5 class="ml-4 py-3">Cardio Kickboxing</h5>
                    <p>
                        Also called boxing aerobics, cardio-kickboxing is a hybrid of boxing, martial arts and aerobic dance that offers a high-intensity, aggression-releasing workout without the mind-numbing boredom that comewith some gym bound activities. We offer basic training info before you start throwing punches! This high energy workout challenges the beginner and elite athlete alike. Build stamina, improve coordination and flexibilty, burn calories as you huild lean muscleswith fun and challenging workout.
                       
                    <br><br>

                    <span>
                        <strong>
                            <i class="fas fa-calendar-alt"></i>&nbsp;Awarded on: 18th December 2012
                        </strong>
                    </span>
                </p>
                     


                     </div>

                 </div>
             </center>

         </section>
         <!--end of achievement section-->

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
         <!--end of member section-->
         <!--news section-->
         <section class="newsSection bg-light">
             <center>
                 <h2 class="text-center">Latest News</h2>
                 <div class="border"></div>
                 <div class="row newsSectionRow mt-5">
                     
                    <div class="col-md-4">
                        <div class="card newsCard">
                            <div class="card-header">
                                <img src="images/card4.jpg">
                            </div>
                            
                            <div class="card-body">
                                <span id="newsDate">17th August 2021</span>&nbsp;
                                <span class="poster">By Noel</span>
                                <hr>
                                <h5 class py-3>
                                    <strong>Sorophine fitness HUb</strong>
                                </h5>
                                <p>
                                    We are patnering with other famous Fitness hubs for our third anniversary to provide you with the best workout experience of a lifetime. Dont miss out.
                       
                                            </p>
                                
                            </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card newsCard">
                                <div class="card-header">
                                    <img src="images/card5.jpg">
                                </div>
                                
                                <div class="card-body">
                                    <span id="newsDate">17th September 2021</span>&nbsp;
                                    <span class="poster">By Noel</span>
                                    <hr>
                                    <h5 class py-3>
                                        <strong>Workout Challenges</strong>
                                    </h5>
                                    <p>
                                        We have a 30 day workout challenge just for you. Its online and free, designed by trainer noelle.This is very ideal if you dont have time to go to gym.                               
                                    </p>
                                </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="card newsCard">
                                    <div class="card-header">
                                        <img src="images/card6.jpg">
                                    </div>
                                    
                                    <div class="card-body">
                                        <span id="newsDate">17th October 2021</span>&nbsp;
                                        <span class="poster">By Noel</span>
                                        <hr>
                                        <h5 class py-3>
                                            <strong>Bootcamp</strong>
                                        </h5>
                                        <p>
                                            Tone up and refresh with Sorophine Hub Bootcamp. Get your body on track or push your body to the next level. We are always here for you whether online or                                    </p>
                                        
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <a href="pages/news.html">
                                    <button class="btn btn-ig btn-default site-btn">
                                        <i class="fa fa-eye"></i>&nbsp;
                                        View More                                       
                                    </button>
                                </a>             
             </center>
         </section>
         <!--end of news section-->           
        </main>
         </body>
</html>

@endsection
