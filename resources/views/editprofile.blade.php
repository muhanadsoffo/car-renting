@extends('layouts.frontbase')

@section('title', 'Change Name || Car renting')

@section('content')
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="card">
        <div class="card-header">Update Profile</div>
        <div class="card-body">
            <form action="{{route('updateProfile')}}" id="edit_profile_form" method="post">
                @csrf
                @if(session()->has('success'))
                    <div class="alert alert-success">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" value=""  class="form-control" id="name"  placeholder="Enter new  Username">

                    <span class="text-danger">{{$errors->first('name')}}</span>

                </div>


                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>

    </div>
@endsection
