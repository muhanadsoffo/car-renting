@extends('layouts.adminbase')

@section('title', 'User Actions')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Users List</h1>
            <h3><a href="{{route('admin.adduserindex')}}"class="badge badge-pill badge-secondary" >Create New User</a></h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Users List</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Password</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th scope="row">{{$rs->id}}</th>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->password}}</td>
                            <td><a href="{{route('admin.edituser',['id'=>$rs])}}"class="btn btn-success btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.deleteuser',['id'=>$rs])}}"class="btn btn-danger btn-sm">Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>









        </div>
    </div>
@endsection
