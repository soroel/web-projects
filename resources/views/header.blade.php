<header>

    <nav class="navbar navbar-expand-lg navbar-light bg-white menu">
        <a href="" class="navbar-brand">
            <img src="images/logo.png" width="60px" height="70px">Fitness & Health
        </a>

        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navigationBar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navigationBar">
          <ul class="navbar-nav ml-auto">

             <li class="nav-item">
                 <a href="/" class="nav-link px-3" style="color: purple;">Home</a>
             </li>

            
             
             <li  class="nav-item dropdown px-3">
                 <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown">About us</a>
                 
                 <div class="dropdown-menu">
                    <a class="dropdown-item" href="/pages.about"><i class="far fa-paper-plane"></i>&nbsp; History/Mission/Vision</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pages.staff"><i class="far fa-paper-plane"></i>&nbsp; Members</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pages.accomplishment"><i class="far fa-paper-plane"></i>&nbsp; Accomplishments</a>
                 </div>
              </li>


             <li  class="nav-item dropdown px-3">
                 <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown">Classes</a>
                 <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{url('/pages.yoga')}}"><i class="far fa-paper-plane"></i>&nbsp;Yoga & meditation</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pages.gym"><i class="far fa-paper-plane"></i>&nbsp; Gym</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item"  href="/pages.martial"><i class="far fa-paper-plane"></i>&nbsp;Martial arts</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="{{url('/pages.zumba')}}"><i class="far fa-paper-plane"></i>&nbsp;Zumba</a> 
                 </div>
              </li>

             

              <li class="nav-item">
                 <a href="/pages.office" class="nav-link px-3">Office</a>
             </li>

             <li  class="nav-item dropdown px-3">
                 <a class="nav-link dropdown-toggle" href="/" data-toggle="dropdown">More</a>
                 <div class="dropdown-menu">
                    
                    <a class="dropdown-item" href="/pages.news"><i class="far fa-paper-plane"></i>&nbsp; News and events</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pages.contact"><i class="far fa-paper-plane"></i>&nbsp; Contact us</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="/pages.faq"><i class="far fa-paper-plane"></i>&nbsp; FAQ</a>
                    <div class="dropdown-divider"></div>


                 
                     </div>
              </li>

             

             <li class="nav-item lr">
                 <a href="/pages.login" class="nav-link">
                     <button class="btn btn-lg btn-default lr-btn">
                         <i class="fa fa-lock">Login</i>
                     </button>
                 </a>

                 <a href="/register" class="nav-link">
                     <button class="btn btn-lg btn-default lr-btn">
                         <i class="fa fa-edit">Enrol</i>
                     </button>
                 </a>

             </li>



          </ul>
        </div>

    </nav>
 </header>