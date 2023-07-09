@extends('layouts.frontbase')

@section('title', 'SpeedyRent || Car renting website')

@section('content')

@include("home.slider")

<div class="latest-products">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>Offers</h2>
                    <a href="{{route('products')}}">view more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach($data as $rs)
            <div class="col-md-4">
                <div class="product-item">
                    <a href="{{route('detail',['pid'=>$rs->id])}}"><img src="{{Storage::url($rs->image)}}"  alt="" ></a>
                    <div class="down-content">
                        <a href="{{route('detail',['pid'=>$rs->id])}}"><h4>{{$rs->title}}</h4></a>
                        <h6><small>from</small> {{$rs->price}}$ <small>per weekend</small></h6>
                        <p>{{$rs->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</div>




<div class="services" style="background-image: url({{ asset('assets/images/other-image-fullscren-1-1920x900.jpg')}});" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>All types of cars</h2>

                    <a href="{{route('allcategories')}}">read more <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            @foreach($category as $rs)
            <div class="col-lg-4 col-md-6">
                <div class="service-item">
                    <a href="{{route('category',['CategoryTitle'=>$rs->title])}}"><img src="{{Storage::url($rs->image)}}" height="200px" alt="" ></a>

                    <div class="down-content">
                        <h4>{{$rs->title}}</h4>

                        <p>{{$rs->description}}</p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>


<div class="best-features">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-heading">
                    <h2>About Us</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="left-content">

                    <p style="font-size: 18px;"><span style=" font-weight: bold;font-size: 20px; color:blue" >Honesty and client satisfaction</span> what matter more to us.
                    Care to know what's behind this company and the foundation of it? Click on the button bellow!</p>

                    <a href="{{route('about')}}" class="filled-button">Read More..</a>
                </div>
            </div>
            <div class="col-md-6">
                <div class="right-image">
                    <img src="{{asset('assets')}}/images/about-1-570x350.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="call-to-action">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="inner-content">
                    <div class="row">
                        <div class="col-md-8">
                            <h4>if you have any questions we are happy to provide our help</h4>
                            <p>Don't hesitate! send us a message and tell us everything in mind, we will be at service !</p>
                        </div>
                        <div class="col-lg-4 col-md-6 text-right">
                            <a href="{{route('contact')}}" class="filled-button">Contact Us</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




@endsection
