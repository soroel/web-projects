<!DOCTYPE html>
<html>
    <head>
        <title>Register-Sorophine Fitness Hub</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="">
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
        
  <!--BANNER SECTION-->
  <section class="bannerSection bannerPageSection" style="background-image: url('../images/about.jpg');">
<div class="innerBannerPageSection"  style="padding-top:100px;padding-left: 70px;">
    <div class="bannerContent">
    <h2><strong>Register</strong></h2>
    <h6><strong>Home/Register</strong></h6>
</div>
</div>
  </section>
  <!--END OF BANNER SECTION-->

  @auth
<p>You are now logged in!</p>

  @else
<!--Register-->
<section class="contactSpot bg-white">
    <h2 class="text-center mt-5">
        <strong>Create an Account</strong>

    </h2>
    <center>
        <div class="border"></div>
        <div class="row contactSpotRow">
            <!--column one-->
            <div class="col-md-8">
                <div class="card formItem">
                    <div class="card-body text-left">
                        <form method="POST" action="/register">
                            @csrf
                            <div class="row">

                                <!--first column-->
                                <div class="col-md-6">
                                    <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
    <i class="fa fa-user"></i>

</span>
</div>
<input type="text" name="fullname" class="form-control inputField" autofocus="" placeholder="name">
                                    </div>

                                </div>
                                <!--end of first column-->

         <!--column two-->
         
                            <div class="col-md-6">
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
         
         <!--column three-->
         <div class="col-md-12">
            <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-mobile-alt"></i>

</span>
</div>
<input type="number" name="phonenumber" class="form-control inputField" autofocus="" placeholder="phone number">
            </div>

        </div>


         <!--end of column three-->
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

<!--column five-->
<div class="col-md-12">
    <div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fas fa-lock"></i>

</span>
</div>
<input type="password" name="confirm_password" class="form-control inputField" autofocus="" placeholder=" confirm password">
    </div>

</div>
<!--end of column five-->
<button type="submit" class="btn btn-default btn-lg form-btn">
    <i class="fa fa-paper-plane"></i> Register
</button>

                            </div>
                        </form>

                    </div>
                </div>
            </div> 

  @endauth

  
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
        
        <!--FOOTER SECTION-->
        <footer style="background-image: url('../images/links.png');" class="bgimg">
        <div class="footer-main">
            <div class="container">
                <div class="row">

                     <!--column one-->

                    <div class="col-md-4">
                        <div class="footer-widget">
                            <h4>GET IN TOUCH</h4>
                            <P>
                                Monday - Friday: 08:00AM to 5:00PM
                            </P>

                            <p>
                                Saturday:<span>08:00AM to 2:00PM</span>
                            </p>

                             <p>
                                 Sunday:<span> Closed</span>
                             </p>                           
                                  
                             <div class="footer-top-box">
                                 <p>FOLLOW US ON</p>
                                 <ul>
                                     <li>
                                         <a href="#">
                                             <i class="fab fa-facebook" aria-hidden="true"></i>
                                         </a>
                                     </li>

                                     <li>
                                        <a href="#">
                                            <i class="fab fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fab fa-youtube" aria-hidden="true"></i>
                                        </a>
                                    </li>

                                    <li>
                                        <a href="#">
                                            <i class="fab fa-pinterest" aria-hidden="true"></i>
                                        </a>
                                    </li>
                                 </ul>
                             </div>
                        </div>

                    </div>

                    <!--column two-->
                    <div class="col-md-4">
                        <div class="footer-link">
                            <h4>QUICK LINKS</h4>
                            <ul>
                                <li>
                                    <a href="#">COntact Us</a>
                                </li>

                                <li>
                                    <a href="#">Apply</a>
                                </li>

                                <li>
                                    <a href="#">Busines Portfolios</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <!--column three-->
                    <div class="col-md-4">
                        <div class="footer-link-contact">
                            <h4>CONTACT US</h4>
                            <ul>
                                <li>
                                    <p>
                                        <i class="fas fa-map-marker-alt"></i>
                                        Home, ground-floor Nairobi
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <i class="fas fa-phone-square"></i>
                                        Phone: +254 794 824 427
                                    </p>
                                </li>

                                <li>
                                    <p>
                                        <i class="fas fa-envelope-square"></i>
                                        Email: sorophinenoel@gmail.com
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </footer>
        
          
        <!--END OF FOOTER SECTION-->

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    </body>
</html>