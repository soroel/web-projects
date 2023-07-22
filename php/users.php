<?php
session_start();
if(isset($_SESSION["fullname"])){
    ?>
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

                <header>

                <nav class="navbar navbar-expand-lg navbar-light bg-white menu">
                    <a href="" class="navbar-brand">
                        <img src="../images/logo.png" width="60px" height="70px">Fitness & Health/admin
                    </a>

                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigationBar">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navigationBar">
                        <ul class="navbar-nav ml-auto">

                            <li class="nav-item active">
                                <a href="../index.html" class="nav-link px-3">Home</a>
                            </li>

                        
                            
                            <li  class="nav-item dropdown px-3">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">About us</a>
                            
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="aboutHMV.html"><i class="far fa-paper-plane"></i>&nbsp; History/Mission/Vision</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="staff.html"><i class="far fa-paper-plane"></i>&nbsp; Members</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="accomplishment.html"><i class="far fa-paper-plane"></i>&nbsp; Accomplishments</a>
                            </div>
                            </li>


                            <li  class="nav-item dropdown px-3">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">Classes</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="yoga.html"><i class="far fa-paper-plane"></i>&nbsp;Yoga & meditation</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="gym.html"><i class="far fa-paper-plane"></i>&nbsp; Gym</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/spa.html"><i class="far fa-paper-plane"></i>&nbsp;martial arts</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="zumba.html"><i class="far fa-paper-plane"></i>&nbsp;Zumba</a> 
                                </div>
                            </li>


                            <li class="nav-item">
                                <a href="office.html" class="nav-link px-3">Office</a>
                            </li>

                            <li  class="nav-item dropdown px-3">
                                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">More</a>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="pages/gallery.html"><i class="far fa-paper-plane"></i>&nbsp; Gallery</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="pages/news.html"><i class="far fa-paper-plane"></i>&nbsp; News and events</a>
                                </div>
                            </li>

                           

                            <li class="nav-item lr">
                                <a href="#" class="nav-link">
                    <form method="POST" action="logout.php">
                                    <button type="submit" class="btn btn-lg btn-default lr-btn">
                                        <i class="fa fa-edit">Logout<?php echo$_SESSION["fullname"]?></i>
                                    </button>
                    </form>
                                </a>


                                <a href="#" class="nav-link">
                                    
                                    <button class="btn btn-lg btn-default lr-btn" data-bs-toggle="modal" data-bs-target="#addModal">
                                        <i class="fa fa-edit">Add User</i>
                                    </button>
        
                                </a>

                            </li>



                        </ul>
                    </div>

                </nav>
                </header>

                <main>
        <!--WIDGET-->
                    <section class="iconSection">
                        <div class="icons-bar">
                            <a href="#">
                                <i class="fa fa-address-book"></i>
                                <br>
                                Enrol
                            </a>
                
                            <a href="#">
                                <i class="fa fa-plus"></i>
                                <br>
                                Apply
                            </a>
                
                            <a href="#">
                                <i class="fa fa-file-signature"></i>
                                <br>
                            Join us
                            </a>
                        </div>
                
                        <div class="icons-social">
                            <a href="#" style="background-color: #4267b2;" title="facebook">
                                <i class="fab fa-facebook" aria-hidden="true"></i>
                            </a>
                
                            <a href="#" style="background-color: #1da1f2;" title="facebook">
                                <i class="fab fa-twitter" aria-hidden="true"></i>
                            </a>
                
                            <a href="#" style="background-color: red;" title="facebook">
                                <i class="fab fa-youtube" aria-hidden="true"></i>
                            </a>
                        </div>
                    </section>
                <!--END OF WIDGET-->

                <!--SECTION TABLE-->    
        <section>
        <table class="table table-hover table-bordered table-sm">
                <thead>
                    <tr style="background-color:purple;color:white">
                        <th scope="col">id</th>
                        <th scope="col">Fullname</th>
                        <th scope="col">Email Address</th>
                        <th scope="col">Phonenumber</th>
                        <th scope="col">Password</th>
                        <th scope="col">Confirm Password</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn=mysqli_connect("localhost","root","","schoolweb");
                    $sql="SELECT *FROM `users`";
                    $query=mysqli_query($conn,$sql);
                    while($row=mysqli_fetch_array($query)){
        ?>

        <tr>
            <td>
                <?php echo$row["id"]?>
            </td>

            <td>
                <?php echo$row["fullname"]?>
            </td>

            <td>
                <?php echo$row["emailaddress"]?>
            </td>

            <td>
                <?php echo$row["phonenumber"]?>
            </td>

            <td>
                <?php echo$row["password"]?>
            </td>

            <td>
                <?php echo$row["confirm_password"]?>
            </td>

                    <td>
        <button type="button" class="btn btn-outline-secondary btn-sm" data-bs-toggle="modal" data-bs-target="#viewModal<?php echo$row["id"]?>">View</button>
        <button type="button" class="btn btn-outline-warning btn-sm" data-bs-toggle="modal" data-bs-target="#updateModal<?php echo$row["id"]?>">Update</button>
        <button type="button" class="btn btn-outline-danger btn-sm" data-bs-toggle="modal" data-bs-target="#deleteModal<?php echo$row["id"]?>">Delete</button>
                    </td>



                    <div class="modal fade" id="viewModal<?php echo$row["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">View[ <?php echo$row["fullname"]?>]</h5>
                        
                    </div>
                    <form>
                        <div class="modal-body">
                            

                        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="fullname" value="<?php echo$row["fullname"]?>">
            </div>
        </div>

        
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email address</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="emailaddress" value="<?php echo$row["emailaddress"]?>">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="phone" class="col-sm-2 col-form-label">Phone number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="phonenumber" value="<?php echo$row["phonenumber"]?>">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="text"  name="password" class="form-control" value="<?php echo$row["password"]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
            <input type="text" name="confirm_password" class="form-control" value="<?php echo$row["confirm_password"]?>">
            </div>
        </div>




                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary" style="background-color:purple;border-color:purple">Update</button>
                            </div>
                    </form>
                    </div>
                </div>
                </div>



        <!--MODAL FOR DELETE-->
        <div class="modal fade" id="deleteModal<?php echo$row["id"]?>"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Are you sure you want to delete this record?</h5>
            
            </div>
            <form method="POST" action="deleteData.php">
                    <div class="modal-body">
                This action cannot be undone
                        <input type="text" name="id" value="<?php echo$row["id"]?>" hidden="true">
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close </button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
            </form>
            </div>
        </div>
        </div>


        <!--END OF MODAL FOR DELETE-->

        <!--UPDATE MODAL-->
        <!-- Modal -->
                <div class="modal fade" id="updateModal<?php echo$row["id"]?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Update[<?php echo$row["fullname"]?>]</h5>
                            
                        </div>
                        <form method="POST" action="updateData.php">
        <div class="modal-body">
                            
        <div class="mb-3 row" hidden="true">           
            <label for="email" class="col-sm-2 col-form-label">Id</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="id" value="<?php echo$row["id"]?>">
        </div>
        </div>

        <div class="mb-3 row">
            <label for="name" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="fullname" value="<?php echo$row["fullname"]?>">
            </div>
        </div>

        
        <div class="mb-3 row">
            <label for="email" class="col-sm-2 col-form-label">Email address</label>
            <div class="col-sm-10">
            <input type="email" class="form-control" name="emailaddress" value="<?php echo$row["emailaddress"]?>">
            </div>
        </div>

        


        <div class="mb-3 row">
            <label for="phone" class="col-sm-2 col-form-label">Phone number</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" name="phonenumber" value="<?php echo$row["phonenumber"]?>">
            </div>
        </div>


        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Password</label>
            <div class="col-sm-10">
            <input type="text"  name="password" class="form-control" value="<?php echo$row["password"]?>">
            </div>
        </div>

        <div class="mb-3 row">
            <label for="password" class="col-sm-2 col-form-label">Confirm Password</label>
            <div class="col-sm-10">
            <input type="text" name="confirm_password" class="form-control" value="<?php echo$row["confirm_password"]?>">
            </div>
        </div>

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary" style="background-color:purple;border-color:purple;color:white;">Update</button>
                            </div>
                    </form>
                        </div>
                    </div>
                </div>

        <!--END OF UPDATE MODAL-->
        </tr>
        <?php
                    }

                    
                    
                    ?>
                </tbody>
            </table>
        </section>
        <!--END OF SECTION TABLE-->


        <!--ADD USER MODAL-->
        <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add new user</h5>
                        
                    </div>
                    <form method="POST" action="insertData.php">
                                    <div class="modal-body">
                                    <div class="mb-3 row">
                            <label for="name" class="col-sm-3 col-form-label">Name</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="fullname">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="email" class="col-sm-3 col-form-label">Email address</label>
                            <div class="col-sm-9">
                            <input type="email" class="form-control" name="emailaddress">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone number</label>
                            <div class="col-sm-9">
                            <input type="text" class="form-control" name="phonenumber">
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                            <input type="text"  name="password" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="password" class="col-sm-3 col-form-label">Confirm Password</label>  
                            <div class="col-sm-9">
                            <input type="text" name="confirm_password" class="form-control">
                            </div>
                        </div>

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary" style="background-color:purple;border-colorpurple"> add New user</button>
                                    </div>
                    </form>
                    </div>
                </div>
        </div>
        <!--END OF ADD USER MODAL-->

        <!--news section-->
                    

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

                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>


            </body>
</html>
    <?php
}else{
    ?>
     <script>
        window.alert("you cannot access this page unless you login");
        window.location.href="../pages/login.html"
     </script>
    <?php
}


?>