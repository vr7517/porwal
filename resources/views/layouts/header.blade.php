<div class="header-sticky">
  <nav class="navbar navbar-expand-lg">
    <div class="container">
      <!-- Logo Start -->
      <a class="navbar-brand" href="./">
        <img src="{{asset('assets/images/logo.png')}}" alt="Logo">
      </a>
      <!-- Logo End -->

      <!-- Main Menu Start -->
      <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item "><a class="nav-link" href="{{url('/home')}}">Home</a></li>                                
                            <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>
                            <li class="nav-item"><a class="nav-link" href="services.html">Services</a></li>
                            <li class="nav-item "><a class="nav-link" href="#">Gallery <i class="bi bi-chevron-down"></i></a>
                                <ul>                                        
                                    <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image Gallery</a></li>
                                    <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>
                            <li class="nav-item highlighted-menu"><a class="nav-link" href="book-appointment.html">book appointment</a></li>                             
                        </ul>
                    </div>

                    <!-- Header Button Start-->
                    <div class="header-btn">
                        <a href="book-appointment.html" class="btn-default">book appointment</a>
                    </div>
                    <!-- Header Button End--> 
      </div>
      <!-- Main Menu End -->
      <div class="navbar-toggle"></div>
    </div>
  </nav>
  <div class="responsive-menu"></div>
</div>