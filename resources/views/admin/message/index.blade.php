@extends('layouts.adminbase')

@section('title', 'Message List')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1>Message List</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Messages List</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">subject</th>
                        <th scope="col">message</th>
                        <th scope="col">Status</th>
                        <th scope="col">received at</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                        <th scope="col">reply</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th>{{$rs->id}}</th>
                            <td>{{$rs->name}}</td>
                            <td>{{$rs->email}}</td>
                            <td>{{$rs->subject}}</td>
                            <td>{{$rs->message}}</td>
                            <td>{{$rs->status}}</td>
                            <td>{{$rs->created_at}}</td>
                            <td><a href="{{route('admin.message.destroy',['id'=>$rs])}}"class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{ route('admin.message.show', ['id' => $rs]) }}" class="btn btn-info btn-sm">Show</a></td>
                            <td><a href="{{ route('admin.message.reply', ['id' => $rs, 'userId' => $rs->userId]) }}" class="btn btn-primary btn-sm">Reply</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
