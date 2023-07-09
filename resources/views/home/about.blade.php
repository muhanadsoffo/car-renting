@extends('layouts.frontbase')

@section('title', 'About Us || Car renting')

@section('content')




    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('assets/images/heading-6-1920x500.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>about us</h4>
                        <h2>our company</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="best-features about-features">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>History about our company</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-image">
                        <img src="assets/images/about-1-570x350.jpg" alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="left-content">
                        <h4>When and Where?</h4>
                        <p>Auto Europe's story dates back to 1954, when the company was founded in the USA to assist Americans with car hire while visiting relatives in Europe. Ever since then our business concept has notably developed. Nowadays we are proud to offer our customers a comprehensive service, including car and motorhome hire.</p>
                        <ul class="social-icons">
                            <li><a href="https://www.facebook.com/zuck/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://twitter.com/elonmusk" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/williamhgates" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://wa.me/+905387735880"><i class="fa fa-whatsapp" target="_blank"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="team-members">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <h2>Curious to know more?</h2>
                    </div>

                    <p>We make sure that our customers are well catered for, therefore we cooperate closely with the major international suppliers such as Avis, Budget, Europcar and Hertz, and also a great number of regional suppliers. The customer's satisfaction stands at the core of our business at all times. Our highly-trained reservations team operates from Monday to Sunday to provide you with the best service before, during and after the booking process whilst ensuring that you always receive the lowest price and widest range of vehicles when renting a car with us.</p>


                </div>
            </div>
        </div>
    </div>
@endsection
