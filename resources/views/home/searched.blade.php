@extends('layouts.frontbase')

@section('title', 'Search: ' . $searchQuery)

@section('content')



    <!-- Page Content -->
    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('assets/images/heading-6-1920x500.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>searching for:</h4>
                        <h2>{{ $searchQuery }}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="products">

        <div class="container">

            <div class="row">
                @if ($searchedP->isEmpty())
                    <div class="col-md-12">
                        <h1>No results found for '{{ $searchQuery }}' </h1>
                    </div>
                @else
                @foreach($searchedP as $rs)
                    <div class="col-md-4">
                        <div class="product-item">

                            <img src="{{Storage::url($rs->image)}}"  alt="">
                            <div class="down-content">
                                <h4>{{$rs->title}}</h4>

                                <h6><small>from</small> {{$rs->price}}$ <small>per weekend</small></h6>

                                <p>{{$rs->description}}</p>

                                <small>
                                    <strong title="passegengers"><i class="fa fa-user"></i> 5</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="luggages"><i class="fa fa-briefcase"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="doors"><i class="fa fa-sign-out"></i> 4</strong> &nbsp;&nbsp;&nbsp;&nbsp;
                                    <strong title="transmission"><i class="fa fa-cog"></i> A</strong>
                                </small>

                                <span>
                                <a href="{{route('detail',['pid'=>$rs->id])}}"  target="_blank">More details</a>
                            </span>
                            </div>
                        </div>
                    </div>
                @endforeach
                @endif
            </div>

        </div>

    </div>

@endsection
