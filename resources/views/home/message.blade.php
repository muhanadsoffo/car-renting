@extends('layouts.frontbase')

@section('title', 'Your messages ')

@section('content')

    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="container">

        <div class="card-header">Welcome to Messages and replies!</div>
        @foreach($message as $rs)
            <div class="card">
                <div class="card-body ">
                    <div class="mb-3">
                        <label  class="form-label" style="color: #00b0ff">Your message:</label>
                        <br>
                        <h5>{{$rs->message}}</h5>
                    </div>
                    <br>
                    <div class="mb-3">
                        <label  class="form-label" style="color: #a40000 ">Admin's reply: </label>
                        <br>
                        <p style="font-size: 25px">{{$rs->reply}}</p>
                        <br>
                        <br>
                        <br>
                        <p style="font-size: 15px; text-align: right ">replied at: {{$rs->updated_at}}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
