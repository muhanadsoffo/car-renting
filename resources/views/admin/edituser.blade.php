@extends('layouts.adminbase')

@section('title', 'Edit User Info')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Edit {{$data->name}} Profile</h1>

            <div class="card">
                <form class="form-horizontal" action="{{route('admin.updateuser',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">User Details</h4>

                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">User Name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$data->name}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email"  value="{{$data->email}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 text-right control-label col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password"  value="{{$data->password}}">
                            </div>
                        </div>

                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </div>
                </form>
            </div>


        </div>








    </div>

@endsection
