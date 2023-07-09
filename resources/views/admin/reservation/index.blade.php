@extends('layouts.adminbase')

@section('title', 'Reservation List')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1>Reservation List</h1>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Reservation List</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">user Id</th>
                        <th scope="col">product Id</th>
                        <th scope="col">Pick up date</th>
                        <th scope="col">Return date</th>
                        <th scope="col">phone</th>
                        <th scope="col">Status</th>
                        <th scope="col">Request date</th>
                        <th scope="col">make Decision</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th>{{$rs->id}}</th>
                            <th>{{$rs->userId}}</th>
                            <th>{{$rs->productId}}</th>
                            <th>{{$rs->picDate}}</th>
                            <th>{{$rs->retDate}}</th>
                            <th>{{$rs->phone}}</th>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td><a href="{{route('admin.reservation.approve',['id'=>$rs])}}"class="btn btn-success btn-sm">edit status</a></td>
                            <td><a href="{{route('admin.reservation.destroy',['id'=>$rs])}}"class="btn btn-danger btn-sm">Delete</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
