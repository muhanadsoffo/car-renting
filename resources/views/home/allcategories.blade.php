@extends('layouts.frontbase')

@section('title', 'Category list')

@section('content')



    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('assets/images/heading-6-1920x500.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>Speedy-Rent</h4>
                        <h2>Categories</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">

        <div class="container">

            <div class="row">
                @foreach($data as $rs)
                    <div class="col-md-4">
                        <div class="product-item">

                            <img src="{{Storage::url($rs->image)}}"  alt="">
                            <div class="down-content">
                                <h4>{{$rs->title}}</h4>

                                <p>{{$rs->description}}</p>


                                <span>
                                <a href="{{route('category',['CategoryTitle'=>$rs->title])}}">More details</a>
                            </span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>

    </div>

@endsection
