@extends('layouts.app')
@section('page_title', 'Home')

@section('content')
    <!-- Hero Section Start -->
    <div class="hero hero-bg-image hero-video bg-section">
        <!-- Video Start -->
        <div class="hero-bg-video">
            <!-- Selfhosted Video Start -->
            <!-- <video autoplay muted loop id="myVideo"><source src="images/hero-bg-video.mp4" type="video/mp4"></video> -->
            <video autoplay muted loop id="myVideo">
                <source src="https://demo.awaikenthemes.com/assets/videos/dispnsary-video.mp4" type="video/mp4">
            </video>

            <!-- Selfhosted Video End -->

            <!-- Youtube Video Start -->
            <!-- <div id="herovideo" class="player" data-property="{videoURL:'74DWwSxsVSs',containment:'.hero-video', showControls:false, autoPlay:true, loop:true, vol:0, mute:false, startAt:0,  stopAt:296, opacity:1, addRaster:true, quality:'large', optimizeDisplay:true}"></div> -->
            <!-- Youtube Video End -->
        </div>
        <!-- Video End -->
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <!-- Hero Content Start -->
                    <div class="hero-content">
                        <!-- Section Title Start -->
                        <div class="section-title dark-section">
                            <h3 class="wow fadeInUp">your health our priority</h3>
                            <h1 class="text-anime-style-3" data-cursor="-opaque">Expert medical care you can rely on</h1>
                            {{-- <p class="wow fadeInUp" data-wow-delay="0.2s">Experience healthcare you can trust. Our dedicated team provides compassionate, high-quality care.</p> --}}
                        </div>
                        <!-- Section Title End -->

                        <!-- Hero Buttons Start -->
                        <div class="hero-btn wow fadeInUp" data-wow-delay="0.4s">
                            <a href="book-appointment.html" class="btn-default">book a appointment</a>
                            <a href="{{ url('about') }}" class="btn-default">about us</a>
                        </div>
                        <!-- Hero Buttons End -->

                        {{-- <!-- Google Rating Start -->
                        <div class="google-rating wow fadeInUp" data-wow-delay="0.75s">
                            <ul>
                               <li>Google Rating <span>5.0</span></li>
                               <li>
                                   <i class="fa-solid fa-star"></i>
                                   <i class="fa-solid fa-star"></i>
                                   <i class="fa-solid fa-star"></i>
                                   <i class="fa-solid fa-star"></i>
                                   <i class="fa-solid fa-star"></i>
                               </li>
                               <li>based on 500 reviews</li>
                            </ul>   
                       </div>
                       <!-- Google Rating End --> --}}
                    </div>
                    <!-- Hero Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Hero Section End -->

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
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Our team of skilled professionals is committed to
                                providing personalized, compassionate care. With a focus.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Us Body Start -->
                        <div class="about-us-body">
                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp">
                                <div class="icon-box">

                                    <img src="{{ asset('assets/images/icon-about-info-1.svg') }}" alt="">

                                </div>
                                <div class="about-info-item-content">
                                    <h3>patient-centered care</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures
                                        personalized.</p>
                                </div>
                            </div>
                            <!-- About Info Item End -->

                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp" data-wow-delay="0.25s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-about-info-2.svg') }}" alt="">
                                </div>
                                <div class="about-info-item-content">
                                    <h3>specialist doctors</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures
                                        personalized.</p>
                                </div>
                            </div>
                            <!-- About Info Item End -->

                            <!-- About Info Item Start -->
                            <div class="about-info-item wow fadeInUp" data-wow-delay="0.5s">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-about-info-3.svg') }}" alt="">
                                </div>
                                <div class="about-info-item-content">
                                    <h3>24 hours service</h3>
                                    <p>Putting you at the heart of everything we do. Our patient-centered approach ensures
                                        personalized.</p>
                                </div>
                            </div>
                            <!-- About Info Item End -->
                        </div>
                        <!-- About Us Body End -->

                        <!-- About Us Button Start -->
                        <div class="about-us-btn wow fadeInUp" data-wow-delay="0.75s">
                            <a href="about.html" class="btn-default">view more about us</a>
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
                                <img src="{{ asset('assets/images/about-img-1.jpg') }}" alt="">
                            </figure>
                        </div>
                        <!-- About Image 1 End -->

                        <!-- About Image 2 Start -->
                        <div class="about-img-2">
                            <figure class="image-anime">
                                <img src="{{ asset('assets/images/about-img-2.jpg') }}" alt="">
                                <h3>Professionals Team</h3>
                            </figure>
                        </div>
                        <!-- About Image 2 End -->

                        <!-- Company Timing Start -->
                        <div class="company-timing">
                            <h3>Opening hours</h3>
                            <ul>
                                <li><span>Mon To Fri</span> 09:30 - 07:30</li>
                                <li><span>Saturday</span> Closed</li>
                                <li><span>Sunday</span> Closed</li>
                            </ul>

                            <figure>
                                <i class="glyphicon glyphicon-time"></i>
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

    <!-- Our Service Section Start -->
    <div class="our-services bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our services</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Solution Provider for Medical Devices and
                            Implants​</h2>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp">
                        <!-- Service Header Start -->
                        <div class="service-header">
                            <!-- Service Item Box Start -->
                            <div class="service-item-box">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-1.svg') }}" alt="">
                                </div>
                                <div class="service-item-content">
                                    <h3>
                                        Unparalleled Expertise</h3>
                                </div>
                            </div>
                            <!-- Service Item Box End -->

                            <!-- Service Readmore Start -->
                            <div class="service-readmore">
                                <a href="service-single.html"><img src="images/arrow-dark.svg" alt=""></a>
                            </div>
                            <!-- Service Readmore End -->
                        </div>
                        <!-- Service Header End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>Experts with extensive knowledge of medical devices and implants make up our team. We are
                                aware of how important these instruments are to patient care.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-img-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.25s">
                        <!-- Service Header Start -->
                        <div class="service-header">
                            <!-- Service Item Box Start -->
                            <div class="service-item-box">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-2.svg') }}" alt="">
                                </div>
                                <div class="service-item-content">
                                    <h3>Trusted Partnerships</h3>
                                </div>
                            </div>
                            <!-- Service Item Box End -->

                            <!-- Service Readmore Start -->
                            <div class="service-readmore">
                                <a href="service-single.html"><img src="images/arrow-dark.svg" alt=""></a>
                            </div>
                            <!-- Service Readmore End -->
                        </div>
                        <!-- Service Header End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>We guarantee that you will only receive the best thanks to our solid partnerships with
                                well-known international brands like Natus, Baxter, Terumo, and Biocomposites.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-img-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Service Item Start -->
                    <div class="service-item wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Service Header Start -->
                        <div class="service-header">
                            <!-- Service Item Box Start -->
                            <div class="service-item-box">
                                <div class="icon-box">
                                    <img src="{{ asset('assets/images/icon-service-3.svg') }}" alt="">
                                </div>
                                <div class="service-item-content">
                                    <h3>Customer-Centric Approach</h3>
                                </div>
                            </div>
                            <!-- Service Item Box End -->

                            <!-- Service Readmore Start -->
                            <div class="service-readmore">
                                <a href="service-single.html"><img src="images/arrow-dark.svg" alt=""></a>
                            </div>
                            <!-- Service Readmore End -->
                        </div>
                        <!-- Service Header End -->

                        <!-- Service Body Start -->
                        <div class="service-body">
                            <p>At the center of everything we do are your needs. To deliver specialized solutions that
                                improve your practice and patient outcomes, we collaborate closely with you.</p>
                        </div>
                        <!-- Service Body End -->

                        <!-- Service Image Start -->
                        <div class="service-image">
                            <a href="service-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/service-img-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Service Image End -->
                    </div>
                    <!-- Service Item End -->
                </div>

                <div class="col-lg-12">
                    <!-- More Services Content Start -->
                    <div class="more-service-content">
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Porwal Group: Channel Partner in medical equipment
                            and implant technology, committed to improving healthcare outcomes.​</p>
                        <a href="services.html" class="btn-default wow fadeInUp" data-wow-delay="0.5s">view all
                            services</a>
                    </div>
                    <!-- More Services Content End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Service Section End -->

    <!-- Intro Video Section Start -->
    <div class="intro-video">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-7">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">why choose us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Why Choose Porwal Group?</h2>
                        {{-- <div class="list-group"> --}}
                        <p class="list-group-item wow fadeInUp" data-wow-delay="0.25s">
                            <i class="bi bi-star-fill me-2"></i>At Porwal Group, we work with you to provide excellent
                            healthcare—we're not just a supplier. Here's what makes us unique:
                        </p>
                        {{-- <ul>
                                <li>PD is being run by team ofprofessionals.</li>
                                <li>We are a trusted name for corporate and leading hospitals in MP & CG.</li>
                                <li>Complete solution provider for super specialty medical devices in MP & CG region.</li>
                                <li>Acquiring leadership in supporting genuine & technology driven product portfolios.</li>
                            </ul> --}}

                        {{-- </div> --}}

                        <p class="wow fadeInUp" data-wow-delay="0.25s"> <span class="flex font-weight-bolder">Unmatched
                                Quality: </span> We provide premium implants and medical gear from reputable manufacturers.
                        </p>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Expertise: Our team’s vast knowledge and experience
                            will help you make decisions.</p>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Nationwide Reach: We guarantee access to
                            high-quality healthcare solutions by being present in every region of India. Client-focused</p>
                    </div>
                    <!-- Section Title End -->
                </div>

                <div class="col-lg-5">
                    <!-- Why Choose List Start -->
                    <div class="why-choose-list wow fadeInUp">
                        <p class="list-group-item wow fadeInUp" data-wow-delay="0.25s">
                            <i class="bi bi-star me-2"></i> At Porwal Group, Our one and only goal is to equip medical
                            professionals with the most cutting-edge and dependable implants and devices. Our steadfast
                            commitment to quality, innovation, and client satisfaction has allowed us to become a dominant
                            force in the medical equipment supply sector.
                        </p>
                        <br>
                        <p class="list-group-item wow fadeInUp" data-wow-delay="0.25s">
                            <i class="bi bi-star me-2"></i>We cordially encourage you to peruse our vast selection of
                            HYSTEROSCOPY apparatus, VENTILATORS, CAUTERY equipment, LAPAROSCOPY systems, and other items.
                            Join forces with Porwal Group, and we can jointly influence the direction of healthcare.
                        </p>

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
                                <video autoplay muted loop id="myVideo">
                                    <source src="https://demo.awaikenthemes.com/assets/videos/dispnsary-video.mp4"
                                        type="video/mp4">
                                </video>
                            </figure>
                        </div>
                        <!-- Intro Image End -->

                        <!-- Video Play Button Start -->
                        <div class="video-play-button">
                            <a href="https://www.youtube.com/watch?v=Y-x0efG1seA" class="popup-video"
                                data-cursor-text="Play"><img src="{{ asset('assets/images/icon-play.svg') }}"
                                    alt="video"></a>
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

    {{-- <!-- We Work Section Start -->
    <div class="we-work bg-section">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">how we work</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Discover Our All-Inclusive
                            Medical Solutions
                        </h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Look at our extensive selection of implants and medical equipment built for the best possible healthcare delivery.</p>
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
                                    <img src="{{asset('assets/images/work-step-img-1.jpg')}} alt="">
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
    <!-- We Work Section End --> --}}



    <!-- Our Facility Section Start -->
    <div class="our-facility bg-section">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">about us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Professionals dedicated to your health</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our team of skilled professionals is committed to
                            providing personalized, compassionate care. With a focus.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-facility-1.svg') }}" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>modern equipment</h3>
                            <p>Our mission is to deliver modern equipment that ensures efficiency, reliability, and superior
                                performance for.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp" data-wow-delay="0.25s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-facility-2.svg') }}" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>highly qualified doctor</h3>
                            <p>We ensure patient care through highly qualified doctors, offering expertise, trust, and
                                personalized attention.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-lg-3 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-facility-3.svg') }}" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>Medical Solution</h3>
                            <p>Companies like Medtronic, DePuy Synthes, and Terumo offer a wide range of high-quality
                                medical devices and implants. </p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>
                <div class="col-lg-3 col-md-6">
                    <!-- Facility Item Start -->
                    <div class="our-facility-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('assets/images/icon-facility-3.svg') }}" alt="">
                        </div>

                        <div class="our-facility-content">
                            <h3>Consultation</h3>
                            <p>Their products are backed by advanced research, innovation,
                                and trusted reliability.</p>
                        </div>
                    </div>
                    <!-- Facility Item End -->
                </div>

                <div class="col-md-12">
                    <!-- Our facility Footer Start -->
                    <div class="our-facility-footer wow fadeInUp" data-wow-delay="0.75s">
                        <p><span>free</span>Let's make something great work together. <a href="contact.html">get free
                                quote</a></p>
                    </div>
                    <!-- Our facility Footer End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Facility Section End -->


    <!-- Our Excellence Section Start -->
    <div class="our-excellence">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our numbers</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Live Saved</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Entire Nationwide Protection, Supplying Superior
                            Medical Solutions to Every Indian Region</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Excellence Counter Box Start -->
                    <div class="excellence-counter-boxes">
                        <!-- Excellence Counter Item Start -->
                        <div class="excellence-counter-item">
                            <h2><span class="counter">85</span>%</h2>
                            <p>Of our members start with moderate to serve symptom</p>
                        </div>
                        <!-- Excellence Counter Item End -->

                        <!-- Excellence Counter Item Start -->
                        <div class="excellence-counter-item">
                            <h2><span class="counter">72</span>%</h2>
                            <p>Of our members start with moderate to serve symptom</p>
                        </div>
                        <!-- Excellence Counter Item End -->

                        <!-- Excellence Counter Item Start -->
                        <div class="excellence-counter-item">
                            <h2><span class="counter">95</span>%</h2>
                            <p>Of our members start with moderate to serve symptom</p>
                        </div>
                        <!-- Excellence Counter Item End -->

                        <!-- Excellence Counter Item Start -->
                        <div class="excellence-counter-item">
                            <h2><span class="counter">76</span>%</h2>
                            <p>Of our members start with moderate to serve symptom</p>
                        </div>
                        <!-- Excellence Counter Item End -->
                    </div>
                    <!-- Excellence Counter Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Excellence Section End -->
    {{-- <!-- Our Faqs Section Start -->
    <div class="our-faqs bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="our-faqs-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">frequently asked questions</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Helping you understand healthcare</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Here to make your experience as seamless as
                                possible—explore answers to common questions about our services, policies, and patient care.
                            </p>
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
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                    What should I bring to my first appointment?
                                </button>
                            </h2>
                            <div id="collapse1" class="accordion-collapse collapse show" aria-labelledby="heading1"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current
                                        medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.2s">
                            <h2 class="accordion-header" id="heading2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                    How do I schedule an appointment?
                                </button>
                            </h2>
                            <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current
                                        medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.4s">
                            <h2 class="accordion-header" id="heading3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                    What insurance plan do you accept?
                                </button>
                            </h2>
                            <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current
                                        medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.6s">
                            <h2 class="accordion-header" id="heading4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                    Can I get a prescription refill without an appointment?
                                </button>
                            </h2>
                            <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>For your first visit, please bring a valid ID, your insurance card, any current
                                        medications or a list of them, and any relevant medical records</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="0.8s">
                            <h2 class="accordion-header" id="heading5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                    What should I expect during my first visit?
                                </button>
                            </h2>
                            <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, you can conveniently request prescription refills through our user-friendly
                                        online portal or mobile app.</p>
                                </div>
                            </div>
                        </div>
                        <!-- FAQ Item End -->

                        <!-- FAQ Item Start -->
                        <div class="accordion-item wow fadeInUp" data-wow-delay="1s">
                            <h2 class="accordion-header" id="heading6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                    How are treatment plans customized for individual needs?
                                </button>
                            </h2>
                            <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                                data-bs-parent="#faqaccordion">
                                <div class="accordion-body">
                                    <p>Yes, you can conveniently request prescription refills through our user-friendly
                                        online portal or mobile app.</p>
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
    <!-- Our Faqs Section End --> --}}

    {{-- <!-- Our Team Section Start -->
    <div class="our-team">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">team members</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Compassionate experts you can trust</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Our team brings together a wealth of experience,
                            passion, and a dedication to excellence in patient care.</p>
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
    <!-- Our Team Section End --> --}}

    {{-- <!-- Our Health Section Start -->
    <div class="our-health">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">our numbers</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Health is wealth, and the medical field</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">Excellence in healthcare is our standard, and our
                            numbers back it up. From patient satisfaction rates to successful treatment outcomes.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Our Health Boxes Start -->
                    <div class="our-health-boxes">
                        <!-- Our Health Item Start -->
                        <div class="our-health-item health-box-1">
                            <div class="health-item-content">
                                <img src="images/icon-health-item-1.svg" alt="">
                                <h3>Your Health, Our Priority in Wellcare</h3>
                                <a href="#" class="btn-default">read more</a>
                            </div>
                            <div class="health-item-image">
                                <img src="images/health-item-img-1.png" alt="">
                            </div>
                        </div>
                        <!-- Our Health Item End -->

                        <!-- Our Health Item Start -->
                        <div class="our-health-image health-box-2">
                            <figure class="image-anime reveal">
                                <img src="images/health-item-img-2.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Our Health Item End -->

                        <!-- Our Health Item Start -->
                        <div class="our-health-image health-box-3">
                            <figure class="image-anime reveal">
                                <img src="images/health-item-img-3.jpg" alt="">
                            </figure>
                        </div>
                        <!-- Our Health Item End -->

                        <!-- Our Health Item Start -->
                        <div class="our-health-item health-box-4">
                            <div class="health-item-content">
                                <img src="images/icon-health-item-2.svg" alt="">
                                <h3><span class="counter">58</span>M+ Happy Clients</h3>
                            </div>
                            <div class="happy-client-images">
                                <div class="happy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="images/happy-client-img-1.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="happy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="images/happy-client-img-2.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="happy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="images/happy-client-img-3.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="happy-client-img">
                                    <figure class="image-anime reveal">
                                        <img src="images/happy-client-img-4.jpg" alt="">
                                    </figure>
                                </div>
                                <div class="happy-client-img add-more">
                                    <figure>
                                        <a href="#"><i class="fa-solid fa-plus"></i></a>
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <!-- Our Health Item End -->

                        <!-- Our Health Item Start -->
                        <div class="our-health-item health-box-5">
                            <div class="health-item-content">
                                <h3>Healing Starts Here Caring for You Always</h3>
                                <a href="#" class="learn-btn">learn more</a>
                            </div>
                            <div class="health-item-image">
                                <img src="images/health-item-img-4.png" alt="">
                            </div>
                        </div>
                        <!-- Our Health Item End -->
                    </div>
                    <!-- Our Health Boxes End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Our Health Section End --> --}}

    <!-- CTA Section Start -->
    <div class="cta-section bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-3 col-6 order-lg-1 order-md-1 order-2">
                    <!-- CTA Box img 1 Start -->
                    <div class="cta-img-1">
                        <img src="{{ asset('assets/images/cta-img-1.png') }}" alt="">
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
                        <img src="{{ asset('assets/images/cta-img-2.png') }}" alt="">
                    </div>
                    <!-- CTA Box img 2 End -->
                </div>
            </div>
        </div>
    </div>
    <!-- CTA Section End -->

    <!-- Our Testimonial Start -->
    <div class="our-testimonial">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title mw-100">
                        <h3 class="wow fadeInUp">Testimonials</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Channel Partner of Pioneers In The Industry
                        </h2>
                        <p class="wow fadeInUp " data-wow-delay="0.25s">Porwal Group is a channel partner ,who works with
                            well known medical devices and implants companies like Medtronic, DePuy Synthes (companies of
                            gohnson gohnson), Baxter,, Terumo, Genworks, Pentax Medical, Belmont Medical, Natus,
                            Biocomposites ,an extensive and high-quality range of medical devices and implants, supported by
                            the state-of-the-art research, ingenuity, and dependability that these industry titans stand
                            for. We are dedicated to working together to improve patient outcomes and raise the bar for
                            healthcare standards. View our portfolio to feel the confidence that results from a
                            collaboration based on quality and reliability.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- Testimonial Slider Start -->
                    <div class="testimonial-slider">
                        <div class="swiper ">
                            <div class="swiper-wrapper" data-cursor-text="Drag">
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                            <i class="fa-solid fa-star"></i>
                                        </div>

                                        <div class="testimonial-content">
                                            <p>My first appointment, but the staff was so welcoming. They took the time to
                                                listen to my concerns and made sure I felt comfortable.</p>
                                        </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-1.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> TERUMO</h3>
                                                <p>ANGIOPLASTY</p>
                                                <ul>
                                                    <li>Stents</li>
                                                    <li>Catheters</li>
                                                    <li>Ballons</li>
                                                    <li>Assessories</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-2.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> MEDTRONIC</h3>
                                                <p>MEUROVASCULAR PROCEDURE</p>
                                                <ul>
                                                    <li>ANEURYSM COIL, GUIDEWIRE, MICRO CATHETERS</li>
                                                    <li>AVM EMBOLIZATION LIQUID, GUIDWIRE AND CAHETERS</li>
                                                    <li>MECHANICAL THROMBECTOMY STENT, ASPIRATION CATHETERS</li>
                                                    <li>FLOW DIVERTER</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->
                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-3.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> MEDTRONIC</h3>
                                                <p>LAPAROSCOPIC</p>
                                                <ul>
                                                    <li>HERNIA MASHES</li>
                                                    <li>TRACKERS</li>
                                                    <li>BRIARTRIC PROCEDURE HAROWARE</li>
                                                    <li>SUTURE</li>
                                                    <li>STAPLERS</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-4.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> MEDTRONIC EV3</h3>
                                                <p>CAROTID PROCEDURE</p>
                                                <ul>
                                                    <li>CAROTID STENT</li>
                                                    <li>ACCESSORIES</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-5.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> BAXTER</h3>
                                                <p>CAPD/APD</p>
                                                <ul>
                                                    <li>DIALYSIS FLUID
                                                    </li>
                                                    <li>ALL ACCESSORIES</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-6.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> DEPUY SYNTHES</h3>
                                                <p>TOTAL HIP REPLACEMENT</p>
                                                <ul>
                                                    <li>DURALOC MOP</li>
                                                    <li>PINNACLE COP</li>
                                                    <li>SOLUTION</li>
                                                    <li>BIPOLAR</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Testimonial Slide End -->

                                <!-- Testimonial Slide Start -->
                                <div class="swiper-slide">
                                    <div class="testimonial-item">

                                        {{-- <div class="testimonial-rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                    </div>

                                    <div class="testimonial-content">
                                        <p>My first appointment, but the staff was so welcoming. They took the time to
                                            listen to my concerns and made sure I felt comfortable.</p>
                                    </div> --}}

                                        <div class="testimonial-footer ">
                                            <div class="author-image">
                                                <figure class="image-anime">
                                                    <img src="{{ asset('assets/images/partner-7.jpg') }}" alt=""
                                                        width="80px">
                                                </figure>
                                            </div>
                                            <div class="author-content">
                                                <h3> TERUMO</h3>
                                                <p>ANGIOPLASTY</p>
                                                <ul>
                                                    <li>Stents</li>
                                                    <li>Catheters</li>
                                                    <li>Ballons</li>
                                                    <li>Assessories</li>
                                                </ul>
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
    {{-- 
    <!-- Latest News Section Start -->
    <div class="latest-news">
        <div class="container">
            <div class="row section-row align-items-center">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">latest news</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Health updates you need to know</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.2s">Get the latest information on health topics,
                            wellness tips, and advancements in patient care.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-1.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="blog-single.html">by joseph</a></li>
                                    <li>december 3, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Research Breakthrough in Heart Disease Treatment</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">Read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.2s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-2.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="blog-single.html">by joseph</a></li>
                                    <li>december 1, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Advanced Medical Solutions for Every Patient's Needs</a>
                                </h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">Read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>

                <div class="col-lg-4 col-md-6">
                    <!-- Post Item Start -->
                    <div class="post-item wow fadeInUp" data-wow-delay="0.4s">
                        <!-- Post Featured Image Start-->
                        <div class="post-featured-image">
                            <a href="blog-single.html" data-cursor-text="View">
                                <figure class="image-anime">
                                    <img src="images/post-3.jpg" alt="">
                                </figure>
                            </a>
                        </div>
                        <!-- Post Featured Image End -->

                        <!-- Post Item Body Start -->
                        <div class="post-item-body">
                            <!-- Post Item Tag Start -->
                            <div class="post-item-meta">
                                <ul>
                                    <li><a href="blog-single.html">by joseph</a></li>
                                    <li>november 30, 2024</li>
                                </ul>
                            </div>
                            <!-- Post Item Tag End -->

                            <!-- Post Item Content Start -->
                            <div class="post-item-content">
                                <h2><a href="blog-single.html">Your Trusted Partner in Comprehensive Medical Care</a></h2>
                            </div>
                            <!-- Post Item Content End -->

                            <!-- Post Item Button Start-->
                            <div class="post-item-btn">
                                <a href="blog-single.html" class="readmore-btn">Read more</a>
                            </div>
                            <!-- Post Item Button End-->
                        </div>
                        <!-- Post Item Body End -->
                    </div>
                    <!-- Post Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Latest News Section End --> --}}



@endsection
