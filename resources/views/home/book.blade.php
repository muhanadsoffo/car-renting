@extends('layouts.frontbase')

@section('title', 'Your Reservation ')

@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="card-header">Welcome to Your Reservation section!</div>

        <div class="card">
            <div class="card-body ">
                @if ($reservation)
                    <div class="mb-3">
                        <label class="form-label" style="color: #a40000">Your reserved product:</label>
                        <br>
                        <a href="{{route('detail',['pid'=>$reservation->product->id])}}"> <h5 >{{ $reservation->product->title }}</h5></a>
                    </div>
                    <div class="col-md-8" style="margin-bottom: 100px">
                        <div class="row">
                            <div class="col-md-6">
                            </div>
                            <img src="{{ Storage::url($reservation->product->image) }}" alt="" height="250px">
                        </div>
                    </div>

                    <div class="mb-3">
                        <label  class="form-label" style="color: #a40000 "> reservation status:</label>
                        <br>
                        <p style="font-size: 25px">{{$reservation->status}}!</p>
                        <br>
                        <br>
                        <br>
                        <p style="font-size: 25px">picking up date: {{$reservation->picDate}}</p>
                        <br>
                        <br>
                        <br>
                        <p style="font-size: 25px">returning date: {{$reservation->retDate}}</p>
                        <br>
                        <br>
                        <br>
                        <p style="font-size: 15px ">Note: when approved, visit our office to pick up your car and pay!
                            if you made a reservation and it disappeared after it was on waiting state that means it has been denied for some reason!
                        </p>
                    </div>
            </div>
        </div>
        @else
            <p>No reservation found.</p>
        @endif
    </div>
@endsection
