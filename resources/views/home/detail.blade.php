@extends('layouts.frontbase')

@section('title', 'More || ' .$data->title)

@section('content')

    <div class="page-heading about-heading header-text" style="background-image: url({{ asset('assets/images/heading-6-1920x500.jpg') }});">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4> Interested in</h4>
                        <h2>THE {{$data->CategoryId}}s?</h2>
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
                        <h2>MORE INFO</h2>
                    </div>

                    <h5></h5>



                    <h5 style="font-size: 30px">{{$data->title}}</h5>
                    <br>
                    <p style="font-size: 20px">{{$data->description}}</p>

                    <br>
                    <br>

                    <h5 style="font-size: 30px">With only {{$data->price}}$ for a week!</h5>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sed voluptate nihil eum consectetur similique? Consectetur, quod, incidunt, harum nisi dolores delectus reprehenderit voluptatem perferendis dicta dolorem non blanditiis ex fugiat. Lorem ipsum dolor sit amet, consectetur adipisicing elit.<br><br>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et, consequuntur, modi mollitia corporis ipsa voluptate corrupti eum ratione ex ea praesentium quibusdam? Aut, in eum facere corrupti necessitatibus perspiciatis quis.</p>

                    <br>
                    <br>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="section-heading">
                                    <h2>liked it already? let's view the pictures then!</h2>
                                </div>
                            </div>
                            <div class="col-md-6" style="margin-bottom: 100px">
                                <div class="right-image">
                                    <img src="{{Storage::url($data->image)}}"  alt="" height="300px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h4>Lorem ipsum dolor sit amet.</h4>

                                </div>
                            </div>

                            @foreach($images as $rs)
                            <div class="col-md-6" style="margin-bottom: 80px">
                                <div class="right-image">
                                    <img src="{{Storage::url($rs->image)}}"  alt="" height="300px">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="left-content">
                                    <h4>{{$rs->title}}</h4>

                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div style="text-align: right;">
                        @auth
                            @if ($reservation)
                                <div style="background-color: #f8d7da; padding: 10px;">
                                    <span style="color: #721c24;">You already have a reservation.</span>
                                </div>
                            @else
                                What are you waiting for?

                                <a href="#" class="filled-button" data-toggle="modal" data-target="#exampleModal"> Book now!</a>
                            @endif
                        @else
                            <a href="{{ route('login') }}" class="filled-button">Log in to book</a>
                        @endauth
                    </div>





                </div>

            </div>

        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Book Now</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="contact-form">
                        <form action="{{ route('reservation') }}" id="contact" method="post">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <label>Product:</label><br>
                                    <label>{{ $data->title }}</label>
                                    <input type="hidden" class="form-control" name="productId" value="{{ $data->id }}" required="" readonly>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label>Pick-up date:</label>
                                        <input type="date" class="form-control" name="picDate" placeholder="Pick-up date/time" required="" min="{{ now()->toDateString() }}" max="{{ now()->addWeek()->toDateString() }}">
                                    </fieldset>
                                </div>
                                <div class="col-md-6">
                                    <fieldset>
                                        <label>Return date:</label>
                                        <input type="date" class="form-control" name="retDate" placeholder="Return date/time" required="" min="{{ now()->addWeek()->toDateString() }}" max="{{ now()->addWeeks(2)->toDateString() }}">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <fieldset>
                                        <label>Phone number:</label>
                                        <input type="text" class="form-control" name="phone" placeholder="Enter phone" required="">
                                    </fieldset>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Book Now</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
