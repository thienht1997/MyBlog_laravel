@extends('layouts.master')
@section('title')
    Blog tào lao
@endsection
@section('content')
    @can('manage')
       
        <a href="{{route("send_mail")}}" class="btn btn-primary"><button id="send_mail">Send Mail</button></a>
        <script>
            $( document ).ready(function() {
                var day = new Date();
                day.getDay() == 0 ? $('#send-mail').trigger('click') : '';
            });
        </script>
        <div class="coming-soon-area bg-img background-overlay" style="background-image: url(img/bg-img/b9.jpg);">
            <!-- ##### Coming Soon Area Start ##### -->
            <div class="coming-soon-timer text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="coming-soon-content">
                                <div class="sonar-wrapper">
                                    <div class="sonar-emitter">
                                        <div class="sonar-wave">
                                        </div>
                                    </div>
                                </div>
                                <p>our website is coming soon</p>
                            </div>
                            <div id="clock" class="d-flex align-items-center justify-content-between"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ##### Coming Soon Area End ##### -->

            <!-- ##### Contact Area Start ##### -->
            
            <div class="text-center">
                <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
                    Modal Login Form</a>
            </div>

            <div class="contact-area section-padding-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <!-- Contact Form Area -->
                        <div class="col-12 col-md-10 col-lg-9">
                            <div class="contact-form">
                                <h5>Get in Touch</h5>
                                <!-- Contact Form -->
                                <form action="#" method="post">
                                    <div class="row">
                                        <div class="col-12 col-md-6">
                                            <div class="group">
                                                <input type="text" name="name" id="name" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Name</label>
                                            </div>
                                        </div>
                                        <div class="col-12 col-md-6">
                                            <div class="group">
                                                <input type="email" name="email" id="email" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="group">
                                                <input type="text" name="subject" id="subject" required>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="group">
                                                <textarea name="message" id="message" required></textarea>
                                                <span class="highlight"></span>
                                                <span class="bar"></span>
                                                <label>Message</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn original-btn">Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-md-10 col-lg-3">
                            <div class="post-sidebar-area">
                                <!-- Widget Area -->
                                <div class="sidebar-widget-area">
                                    <h5 class="title subscribe-title">Subscribe to my newsletter</h5>
                                    <div class="widget-content">
                                        <form action="#" class="newsletterForm">
                                            <input type="email" name="email" id="subscribesForm"
                                                   placeholder="Your e-mail here">
                                            <button type="submit" class="btn original-btn">Subscribe</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endcan
    <!-- ##### Contact Area End ##### -->
@endsection
