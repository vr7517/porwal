@extends('layouts.app')
@section('page_title','Home')
    
@section('content')
    <!-- Page Header Start -->
	<div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-3" data-cursor="-opaque">Contact us</h1>
                        {{-- <nav class="wow fadeInUp" data-wow-delay="0.25s">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./">home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">contact us</li>
                            </ol>
                        </nav> --}}
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>	
	</div>
	<!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Contact Us Box Start -->
                    <div class="contact-us-box">
                        
                        <!-- Section Title Start -->
                        <div class="section-title text-center">
                            <h3 class="wow fadeInUp">contact us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Reach out for questions</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">We take the time to understand your individual needs and goals, creating customized treatment plans to help you achieve optimal oral health.</p>
                        </div>
                        <!-- Section Title End -->
                        <!-- Contact Info Box Start -->
                        <div class="contact-info-box">
                            <!-- Contact Info List Start -->
                            <div class="contact-info-list">
                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-phone.svg')}}" alt="">
                                    </div>

                                    <div class="contact-info-content">
                                        <h3>contact details</h3>
                                        <p>+01-787-582-568</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-location.svg')}}" alt="">
                                    </div>

                                    <div class="contact-info-content">
                                        <h3>address</h3>
                                        <p>403, Port Washington Road, Canada</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->

                                <!-- Contact Info Item Start -->
                                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                                    <div class="icon-box">
                                        <img src="{{asset('assets/images/icon-mail.svg')}}" alt="">
                                    </div>

                                    <div class="contact-info-content">
                                        <h3>email us</h3>
                                        <p>info@domain.com</p>
                                    </div>
                                </div>
                                <!-- Contact Info Item End -->
                            </div>
                            <!-- Contact Info List End -->

                            <!-- Contact Social List Start -->
                            <div class="contact-social-list wow fadeInUp" data-wow-delay="0.75s">
                                <span>follow us:</span>
                                    <ul>
                                        <li><a href="#"><i class="bi bi-facebook"></i></a></li>
                                        <li><a href="#"><i class="bi bi-twitter"></i></a></li>
                                        <li><a href="#"><i class="bi bi-linkedin"></i></a></li>
                                        <li><a href="#"><i class="bi bi-pinterest"></i></a></li>
                                    </ul>
                            </div>
                            <!-- Contact Social List End -->
                        </div>
                        <!-- Contact Info Box End -->

                        <!-- Contact Us Form Start -->
                        <div class="contact-us-form">
                            

                            <!-- Contact Form Start -->
                            <div class="contact-form">
                                <form id="contactForm" action="#" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.25s">
                                    <div class="row">
                                        <div class="form-group col-md-12 mb-4">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your Name" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="email" name ="email" class="form-control" id="email" placeholder="Enter Your Email" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-6 mb-4">
                                            <input type="text" name="phone" class="form-control" id="phone" placeholder="Enter Your Number" required>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="form-group col-md-12 mb-5">
                                            <textarea name="message" class="form-control" id="message" rows="4" placeholder="Write Message.."></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>

                                        <div class="col-md-12">
                                            <button type="submit" class="btn-default">submit now</button>
                                            <div id="msgSubmit" class="h3 hidden"></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- Contact Form Start -->
                        </div>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Contact Us Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Google Map Section Start -->
    <div class="google-map">
        <div class="container">
            <div class="row section-row">
                <div class="col-lg-12">
                    <!-- Section Title Start -->
                    <div class="section-title">
                        <h3 class="wow fadeInUp">How to reach us</h3>
                        <h2 class="text-anime-style-3" data-cursor="-opaque">Get in touch with us</h2>
                        <p class="wow fadeInUp" data-wow-delay="0.25s">The goal of our clinic is to deliver compassionate care and exceptional medical services, including general health consultations, specialized treatments, and preventive care. With trusted healthcare practices globally, we ensure your well-being is our priority.</p>
                    </div>
                    <!-- Section Title End -->
                </div>
            </div>

            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d96737.10562045308!2d-74.08535042841811!3d40.739265258395164!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sin!4v1703158537552!5m2!1sen!2sin" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Google Map Section End -->
@endsection