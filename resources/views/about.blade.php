@extends('layouts.app')
@section('page_title','About')
    
@section('content')

    <!-- Page Header Start -->
	<div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">About us!</h1>
                        {{-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">about us</li>
                            </ol>
                        </nav> --}}
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>	
	</div>
	<!-- Page Header End -->

    <!-- About Us Section Start -->
    <div class="about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- About Us Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Professionals dedicated to your health</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our team of skilled professionals is committed to providing personalized, compassionate care. With a focus.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-about-info-1.svg" alt="">
                                </div>
                                <div class="about-info-item-content">
                                    <h3>patient-centered care</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures personalized.</p>
                                </div>                                
                            </div>
                            <!-- About Info Item End -->

                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-about-info-2.svg" alt="">
                                </div>
                                <div class="about-info-item-content">
                                    <h3>specialist doctors</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures personalized.</p>
                                </div>                                
                            </div>
                            <!-- About Info Item End -->

                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-about-info-3.svg" alt="">
                                </div>
                                <div class="about-info-item-content">
                                    <h3>24 hours service</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures personalized.</p>
                                </div>                                
                            </div>
                            <!-- About Info Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="contact.html" class="btn-default">contact us</a>
                        </div>
                        <!-- About Us Button End -->
                    </div>
                    <!-- About Us Content End -->
                </div>

                <div class="col-lg-7">
                    <!-- About Us Images Start -->
                    <div class="about-us-images">
                        <!-- About Image 1 Start -->
                        <div class="about-img-1">
                            <figure class="image-anime reveal">
                                <img src="images/about-img-1.jpg" alt="">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime">
                                <img src="images/about-img-2.jpg" alt="">
                                <h3>video call support</h3>
                            </figure>
                        </div>
                        <!-- About Image 2 End -->
    
                        <!-- Company Timing Start -->
                        <div class="company-timing">
                            <h3>Opening hours</h3>
                            <ul>
                                <li><span>Mon To Fri</span> 09:30 - 07:30</li>
                                <li><span>Saturday</span> 10:30 - 5:00</li>
                                <li><span>Sunday</span> Closed</li>
                            </ul>

                            <figure>
                                <i class="fa-solid fa-clock"></i>
                            </figure>
                        </div>
                        <!-- Company Timing End -->
                    </div>
                    <!-- About Us Images End -->
                </div>
            </div>
        </div>
    </div>
    <!-- About Us Section End -->

    <!-- Our Approach Section Start -->
    <div class="our-approach bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <!-- Our Approach Image Start -->
                    <div class="our-approach-img">
                        <figure class="image-anime reveal">
                            <img src="images/our-approach-img.jpg" alt="">
                        </figure>
                    </div>
                    <!-- Our Approach Image End -->
                </div>

                <div class="col-lg-6">
                    <!-- Our Approach Content Start -->
                    <div class="our-approach-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">our approach</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Providing personalized healthcare</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We focus on personalized care to meet your unique needs, combining innovation and compassion for a truly patient-centered approach.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Mission Vision Box Start -->
                        <div class="vision-mission-box tab-content" id="missionvision">
                            <!-- Sidebar Mission Vision Nav start -->
                            <div class="vision-mission-nav">
                                <ul class="nav nav-tabs" id="mvTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="remodeling-tab" data-bs-toggle="tab" data-bs-target="#vision" type="button" role="tab" aria-selected="true"> our vision</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="installation-tab" data-bs-toggle="tab" data-bs-target="#mission" type="button" role="tab" aria-selected="false"> our mission</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="value-tab" data-bs-toggle="tab" data-bs-target="#value" type="button" role="tab" aria-selected="false">our value</button>
                                    </li>
                                </ul>
                            </div>
                            <!-- Sidebar Mission Vision Nav End -->
                            
                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item tab-pane fade show active" id="vision" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-md-6">
                                        <!-- Mission Vision Image Start -->
                                        <div class="vision-mission-img">
                                            <figure  class="image-anime">
                                                <img src="images/mission-image.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Mission Vision Image End -->
                                    </div>

                                    <div class="col-md-6">
                                        <!-- Mission Vision Content Start -->
                                        <div class="vision-mission-content">
                                            <ul>
                                                <li>Quality healthcare for all.</li>
                                                <li>Wellness through innovation.</li>
                                                <li>Compassion at every step.</li>
                                                <li>Building a healthier future.</li>
                                            </ul>
                                        </div>
                                        <!-- Mission Vision Content End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item tab-pane fade" id="mission" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!-- Mission Vision Image Start -->
                                        <div class="vision-mission-img">
                                            <figure  class="image-anime">
                                                <img src="images/mission-image.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Mission Vision Image End -->
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- Mission Vision Content Start -->
                                        <div class="vision-mission-content">
                                            <ul>
                                                <li>Quality healthcare for all.</li>
                                                <li>Wellness through innovation.</li>
                                                <li>Compassion at every step.</li>
                                                <li>Building a healthier future.</li>
                                            </ul>
                                        </div>
                                        <!-- Mission Vision Content End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->

                            <!-- Mission Vision Item Start -->
                            <div class="mission-vision-item tab-pane fade" id="value" role="tabpanel">
                                <div class="row align-items-center">
                                    <div class="col-lg-6">
                                        <!-- Mission Vision Image Start -->
                                        <div class="vision-mission-img">
                                            <figure  class="image-anime">
                                                <img src="images/mission-image.jpg" alt="">
                                            </figure>
                                        </div>
                                        <!-- Mission Vision Image End -->
                                    </div>

                                    <div class="col-lg-6">
                                        <!-- Mission Vision Content Start -->
                                        <div class="vision-mission-content">
                                            <ul>
                                                <li>Quality healthcare for all.</li>
                                                <li>Wellness through innovation.</li>
                                                <li>Compassion at every step.</li>
                                                <li>Building a healthier future.</li>
                                            </ul>
                                        </div>
                                        <!-- Mission Vision Content End -->
                                    </div>
                                </div>
                            </div>
                            <!-- Mission Vision Item End -->
                        </div>
                        <!-- Mission Vision Box End -->
                    </div>
                    <!-- Our Approach Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Approach Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Why patients trust us with their care</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our commitment to excellence, compassion, and personalized treatment has earned the trust of countless patients. Discover what sets our care apart. Discover what sets our care apart.</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp">
                        <ul>
                            <li>We offer flexible hours to fit your busy schedule.</li>
                            <li>Team is committed to making you feel comfortable.</li>
                            <li>We ensure you receive prompt and effective care.</li>
                            <li>Helping you manage your health at every stage of life.</li>
                        </ul>
                    </div>
                    <!-- Why Choose List End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Intro Video Image Start -->
                    <div class="intro-video-box">
                        <!-- Intro Image Start -->
                        <div class="intro-video-image">
                            <figure>
                                <img src="images/intro-video-bg.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Intro Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video" data-cursor-text="Play"><img src="images/icon-play.svg" alt=""></a>
                        </div>
                        <!-- Video Play Button End -->

                        <div class="why-choose-box">
                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-1.svg" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>50+ Expert Doctor</h3>
                                    <p>Our team includes over 50 highly skilled doctors.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-2.svg" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>24/7 Instant Support</h3>
                                    <p>Our team includes over 50 highly skilled doctors.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->

                            <!-- Why Choose Item Start -->
                            <div class="why-choose-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="images/icon-why-choose-3.svg" alt="">
                                </div>
                                <div class="why-choose-item-content">
                                    <h3>Expert Medical Team</h3>
                                    <p>Our team includes over 50 highly skilled doctors.</p>
                                </div>
                            </div>
                            <!-- Why Choose Item End -->
                        </div>
                    </div>
                    <!-- Intro Video Btn End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Intro Video Section End -->

    <!-- We Work Section Start -->
    <div class="we-work bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">how we work</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">We work to achieve better health outcomes</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">We are committed to improving health outcomes through personalized care, innovative treatments, and a focus on prevention.</p>
                    </div>
                    <!-- Section Title End -->
                </div>               
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Work Steps Box Start -->
                    <div class="work-steps-box">
                        <!-- Work Step Item Start -->
                        <div class="work-step-item">
                            <div class="work-step-image">
                                <figure class="image-anime">
                                    <img src="images/work-step-img-1.jpg" alt="">
                                </figure>

                                <div class="work-step-no">
                                    <h3>01</h3>
                                </div>
                            </div>                            
                            <div class="work-step-content">
                                <h3>Create Account</h3>
                                <p>Join our community by creating an account today.</p>
                            </div>
                        </div>
                        <!-- Work Step Item End -->

                        <!-- Work Step Item Start -->
                        <div class="work-step-item">
                            <div class="work-step-image">
                                <figure class="image-anime">
                                    <img src="images/work-step-img-2.jpg" alt="">
                                </figure>

                                <div class="work-step-no">
                                    <h3>02</h3>
                                </div>
                            </div>                            
                            <div class="work-step-content">
                                <h3>search doctor</h3>
                                <p>Join our community by creating an account today.</p>
                            </div>
                        </div>
                        <!-- Work Step Item End -->

                        <!-- Work Step Item Start -->
                        <div class="work-step-item">
                            <div class="work-step-image">
                                <figure class="image-anime">
                                    <img src="images/work-step-img-3.jpg" alt="">
                                </figure>

                                <div class="work-step-no">
                                    <h3>03</h3>
                                </div>
                            </div>
                            <div class="work-step-content">
                                <h3>schedule appointment</h3>
                                <p>Join our community by creating an account today.</p>
                            </div>
                        </div>
                        <!-- Work Step Item End -->

                        <!-- Work Step Item Start -->
                        <div class="work-step-item">
                            <div class="work-step-image">
                                <figure class="image-anime">
                                    <img src="images/work-step-img-4.jpg" alt="">
                                </figure>

                                <div class="work-step-no">
                                    <h3>04</h3>
                                </div>
                            </div>                            
                            <div class="work-step-content">
                                <h3>start consultation</h3>
                                <p>Join our community by creating an account today.</p>
                            </div>
                        </div>
                        <!-- Work Step Item End -->
                    </div>
                    <!-- Work Steps Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- We Work Section End -->

    <!-- Our Team Section Start -->
    <div class="our-team about-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">team members</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Compassionate experts you can trust</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our team brings together a wealth of experience, passion, and a dedication to excellence in patient care.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="doctor-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-1.jpg" alt="">
                                </figure>
                            </a>                           
                        </div>
                        <!-- Team Image End -->

                        <!-- Tema Body Start -->
                        <div class="team-body">
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="doctor-single.html">dr. esther howard</a></h3>
                                <p>ophthalmology</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Tema Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="doctor-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-2.jpg" alt="">
                                </figure>
                            </a>                           
                        </div>
                        <!-- Team Image End -->

                        <!-- Tema Body Start -->
                        <div class="team-body">
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="doctor-single.html">dr. jenny wilson</a></h3>
                                <p>anesthesiology</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Tema Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="doctor-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-3.jpg" alt="">
                                </figure>
                            </a>                           
                        </div>
                        <!-- Team Image End -->

                        <!-- Tema Body Start -->
                        <div class="team-body">
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="doctor-single.html">dr. kristin watson</a></h3>
                                <p>infectious disease</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Tema Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Team Member Item Start -->
                    <div class="team-member-item wow fadeInUp" data-wow-delay="0.6s">
                        <!-- Team Image Start -->
                        <div class="team-image">
                            <a href="doctor-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/team-4.jpg" alt="">
                                </figure>
                            </a>                           
                        </div>
                        <!-- Team Image End -->

                        <!-- Tema Body Start -->
                        <div class="team-body">
                            <!-- Team Social Icon Start -->
                            <div class="team-social-icon">
                                <ul>
                                    <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fa-brands fa-dribbble"></i></a></li>
                                </ul>
                            </div>
                            <!-- Team Social Icon End -->
                            <!-- Team Content Start -->
                            <div class="team-content">
                                <h3><a href="doctor-single.html">dr. arlene mccoy</a></h3>
                                <p>cardiology</p>
                            </div>
                            <!-- Team Content End -->
                        </div>
                        <!-- Tema Body End -->
                    </div>
                    <!-- Team Member Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Team Section End -->

    <!-- Our Facility Section Start -->
    <div class="our-facility bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Professionals dedicated to your health</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our team of skilled professionals is committed to providing personalized, compassionate care. With a focus.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="images/icon-facility-1.svg" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>modern equipment</h3>
                            <p>Our mission is to deliver modern equipment that ensures efficiency, reliability, and superior performance for.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="images/icon-facility-2.svg" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>highly qualified doctor</h3>
                            <p>We ensure patient care through highly qualified doctors, offering expertise, trust, and personalized attention.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="images/icon-facility-1.svg" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>pain - free treatment</h3>
                            <p>Experience pain-free treatment with advanced techniques and compassionate care, ensuring your comfort at every step.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-md-12">
                    <!-- Our facility Footer Start -->
                    <div class="our-facility-footer wow fadeInUp" data-wow-delay="0.75s">
                        <p><span>free</span>Let's make something great work together. <a href="contact.html">get free quote</a></p>
                    </div>
                    <!-- Our facility Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Facility Section End -->

    <!-- CTA Section Start -->
    <div class="cta-section page-cta-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-6 order-lg-1 order-md-1 order-2">
                    <!-- CTA Box img 1 Start -->
                    <div class="cta-img-1">
                        <img src="images/cta-img-1.png" alt="">
                    </div>
                    <!-- CTA Box img 1 End -->
                </div>

                <div class="col-lg-4 col-md-6 order-lg-2 order-md-2 order-1">
                    <!-- CTA Box Content Start -->
                    <div class="cta-box-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Take the first step to better health</h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- CTA Box Button Start -->
                        <div class="cta-box-btn wow fadeInUp" data-wow-delay="0.25s">
                            <a href="book-appointment.html" class="btn-default">Book a appointment now</a>
                        </div>
                        <!-- CTA Box Button End -->
                         
                        <!-- CTA Box Text Start -->
                        <div class="cta-box-text wow fadeInUp" data-wow-delay="0.5s">
                            <p>It only <span>takes 2 minutes</span> to complete</p>
                        </div>
                        <!-- CTA Box Text End -->
                    </div>
                    <!-- CTA Box Content End -->
                </div>

                <div class="col-lg-4 col-md-3 col-6 order-lg-3 order-md-3 order-3">
                    <!-- CTA Box img 2 Start -->
                    <div class="cta-img-2">
                        <img src="images/cta-img-2.png" alt="">
                    </div>
                    <!-- CTA Box img 2 End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">frequently asked questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Helping you understand healthcare</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Here to make your experience as seamless as possible—explore answers to common questions about our services, policies, and patient care.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Faq CTA Box Start -->
                        <div class="faq-cta-box wow fadeInUp" data-wow-delay="0.5s">
                            <div class="icon-box">
                                <img src="images/icon-faq-cta.svg" alt="">
                            </div>
                            <div class="faq-cta-content">
                                <p>We always take care of your smile</p>
                                <h3>24/7 Emergency</h3>
                                <p><a href="tel:659888589">659-888-589</a></p>
                            </div>
                        </div>
                        <!-- Faq CTA Box End -->
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- FAQ Accordion Start -->
                    <div class="faq-accordion" id="faqaccordion">
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp">
                            <h2 class="accordion-header" id="heading1">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What should I bring to my first appointment?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How do I schedule an appointment?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    What insurance plan do you accept?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can I get a prescription refill without an appointment?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    What should I expect during my first visit?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, you can conveniently request prescription refills through our user-friendly online portal or mobile app.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->                    
                    
                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp"  data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    How are treatment plans customized for individual needs?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, you can conveniently request prescription refills through our user-friendly online portal or mobile app.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->
                    </div>
                    <!-- FAQ Accordion End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Faqs Section End -->

    <!-- Our Testimonial Start -->
    <div class="our-testimonial about-us-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">Testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Patient stories of care and recovery</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Discover inspiring stories of recovery and healing from those we've had the privilege to serve.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>My first appointment, but the staff was so welcoming. They took the time to listen to my concerns and made sure I felt comfortable.</p>
                                        </div>

                                        <div class="testimonial-footer">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-1.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>Brooklyn simmons</h3>
                                                <p>orthodontics</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>My first appointment, but the staff was so welcoming. They took the time to listen to my concerns and made sure I felt comfortable.</p>
                                        </div>

                                        <div class="testimonial-footer">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>monika roy</h3>
                                                <p>Dental hygienist</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>My first appointment, but the staff was so welcoming. They took the time to listen to my concerns and made sure I felt comfortable.</p>
                                        </div>

                                        <div class="testimonial-footer">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-3.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>albert flores</h3>
                                                <p>senior dentist</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">
                                        <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>My first appointment, but the staff was so welcoming. They took the time to listen to my concerns and made sure I felt comfortable.</p>
                                        </div>

                                        <div class="testimonial-footer">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="images/author-2.jpg" alt="">
                                                </figure>
                                            </div>            
                                            <div class="author-content">
                                                <h3>monika roy</h3>
                                                <p>Dental hygienist</p>
                                            </div>
                                        </div>                                    
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                            </div>
                            <div class="testimonial-btn">
                                <div class="testimonial-btn-prev"></div>
                                <div class="testimonial-btn-next"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Testimonial Slider End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Testimonial End -->


   

@endsection