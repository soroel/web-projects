@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Members-Sorophine Fitness Hub</title>
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
    <h2><strong>Members</strong></h2>
    <h6><strong>Home/Members</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->

  <!--STAFF SECTION-->

  <section class="staffSection bg-light">
<center>
    <div class="row staffSectionRow">
        <div class="col-md-12">
            <div class="row bg-light py-4">
                <div class="col-md-4">
                    <center>
                        <img src="../images/staff1.jpg" width="200px" height="200px">
                    </center>
                </div>
                <div class="col-md-8">
                    <blockquote class="textBlockquote">
                        <h5 class="mt-4 mb-2"><strong>Raven Reyes</strong></h5>
                        <p>
                            "We All Have Battle Scars, Finn. Suck It Up And Build A Brace For Yours."             </p>
                        <h6>
                            <strong>
                                Founder
                                <br>
                                Phd Quantum Mechanics, Caltech
                            </strong>
                        </h6>
                    </blockquote>
                </div>
            </div>

            
        </div>
        
        <!--COLUMN TWO-->

        <div class="col-md-6 mt-5 bg-light">
            <div class="row py-4">
                <div class="col-md-4">
                    <center>
                        <img src="../images/staff2.jpg" width="100px" height="160px">
                    </center>
                </div>

                <div class="col-md-8">
                    <blockquote class="textBlockquote">
                        <h5 class="mt-4 mb-2"><strong>Zozibini Tunzi</strong></h5>
                        <p>
                            
                            “Don't allow people who arent' in your shoes to have a say in your life.” “Critics find it easy to judge and criticise other people.” “Don't give the critics space in your life. Don't allow them to bring in their negative energy.”


                        </p>
                        <h6>
                            <strong>
                                Director
                                <br>
                                Phd Gymnastics, Upenn
                            </strong>
                        </h6>
                    </blockquote>
                </div>
               
            </div>

        </div>
        <!--END OF COLUMN TWO-->

        <!--column three-->
        <div class="col-md-6 mt-5 bg-light">
            <div class="row py-4">
                <div class="col-md-4">
                    <center>
                        <img src="../images/staff3.jpg" width="100px" height="160px">
                    </center>
                </div>

                <div class="col-md-8">
                    <blockquote class="textBlockquote">
                        <h5 class="mt-4 mb-2"><strong>Neymar Jr</strong></h5>
                        <p>
                            “The secret is to believe in your dreams; in your potential that you can be like your star, keep searching, keep believing and don't lose faith in yourself.” “There is no pressure when you are making a dream come true.” “There are players that try to imitate others, but at free-kick time it is a personal thing.
                        </p>
                        <h6>
                            <strong>
                                Deputy Director
                                <br>
                                Phd Physical Education, Harvard
                            </strong>
                        </h6>
                    </blockquote>
                </div>
               
            </div>

        </div>
        <!--end of column three-->

        <!--COLUMN FOUR-->

         <div class="col-md-6 mt-5 bg-light">
            <div class="row py-4">
                <div class="col-md-4">
                    <center>
                        <img src="../images/staff4.jpg" width="100px" height="160px">
                    </center>
                </div>

                <div class="col-md-8">
                    <blockquote class="textBlockquote">
                        <h5 class="mt-4 mb-2"><strong>Clerk Griffin</strong></h5>
                        <p>
                            "We Can Let The Bad Things That Happened To Us Define Who We Are. Or We Can Define Who We Are."          </p>
                        <h6>
                            <strong>
                                Proffesor
                                <br>
                                Phd management, Brown University
                            </strong>
                        </h6>
                    </blockquote>
                </div>
               
            </div>

        </div>

        <!--END OF COLUMN FOUR-->

        <!--COLUMN FIVE-->
        <div class="col-md-6 mt-5 bg-light">
            <div class="row py-4">
                <div class="col-md-4">
                    <center>
                        <img src="../images/staff5.jpg" width="100px" height="160px">
                    </center>
                </div>

                <div class="col-md-8">
                    <blockquote class="textBlockquote">
                        <h5 class="mt-4 mb-2"><strong>Betto Perrez</strong></h5>
                        <p>
                            When I stand before God at the end of my life, I would hope that I would not have a single bit of talent left, and could say, ‘I used everything You gave me.'
                        </p>
                        <h6>
                            <strong>
                                Founder of Zumba
                                <br>
                                Phd Physical Education, Dartmouth College
                            </strong>
                        </h6>
                    </blockquote>
                </div>
               
            </div>

        </div>

        <!--END OF COLUMN FIVE-->
    </div>
</center>
  </section>
  <!--END OF STAFF SECTION-->

 

       </main>
        
       

        </body>
</html>

@endsection