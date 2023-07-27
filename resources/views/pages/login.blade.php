@extends('layouts.frontend')

@section('content')
<!DOCTYPE html>
<html>
    <head>
        <title>Register-Sorophine Fitness Hub</title>
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
    <h2><strong>Login</strong></h2>
    <h6><strong>Home/login</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->

  <!--Register-->
<section class="contactSpot bg-white">
    <h2 class="text-center mt-5">
        <strong>Login to Account</strong>

    </h2>
    <center>
        <div class="border"></div>
        <div class="row contactSpotRow">
            <!--column one-->
            <div class="col-md-8">
                <div class="card formItem">
                    <div class="card-body text-left">
                        <form method="POST" action="../php/login.php">
                            <div class="row">

                                        <!--column two-->
         
                            <div class="col-md-12">
                                <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-envelope"></i>

</span>
</div>
<input type="email" name="emailaddress"class="form-control inputField" autofocus="" placeholder="email address">
                                </div>

                            </div>
                   
         <!--end of column two-->      
         
         
         <!--column four-->

         <div class="col-md-12">
            <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fas fa-lock"></i>

</span>
</div>
<input type="password" name="password" class="form-control inputField" autofocus="" placeholder="password">
            </div>

        </div>
<!--end of colomn four-->
<br>
<!--column five-->
<button type="submit" class="btn btn-default btn-lg form-btn">
    <i class="fa fa-paper-plane"></i> Login
</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div> 
<!--end of column one-->
<!--column two-->
<div class="col-md-4">
    <div class="card bg-light contactItem">
        <div class="card-body">
            <h4 class="text-left">Contact Details</h4>
            <hr>
            <!--first row-->
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-home fa-2x mt-2"></i>
                </div>

                <div class="col-md-8">
                    <p>
                        Rosslyn, Lavington
                        <br>
                        <small>Address 232211</small>
                    </p>

                </div>


            </div>
            <!--end of first row-->

            <!--row two-->
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-mobile-alt fa-2x mt-2"></i>
                </div>

                <div class="col-md-8">
                    <p>
                        +254 794824427
                        <br>
                        <small>Mon - Fri 8.00am to 6.00pm</small>
                    </p>

                </div>


            </div>
            <!--end of roww two-->

            <!--roww three-->
            <div class="row">
                <div class="col-md-4">
                    <i class="fas fa-envelope fa-2x mt-2"></i>
                </div>

                <div class="col-md-8">
                    <p>
                        sorophinenoel@gmail.com
    
                        <br>
                        <small>always here to help</small>
                    </p>

                </div>


            </div>

            <!--end of row three-->
        </div>

    </div>
</div>
<!--end of column two-->
        </div>
    </center>

</section>

  <!--end of register-->

  

       </main>
    
    </body>
</html>

@endsection
