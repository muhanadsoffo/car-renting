@extends('layouts.adminbase')

@section('title', 'show message:      '.   $data->name)

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Show Page</h1>

            <div class="card">

                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">name</th>
                        <th scope="col">email</th>
                        <th scope="col">subject</th>
                        <th scope="col">message</th>
                        <th scope="col">reply</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$data->name}}</th>
                        <th scope="row">{{$data->email}}</th>
                        <th scope="row">{{$data->subject}}</th>
                        <th scope="row">{{$data->message}}</th>
                        <th scope="row">{{$data->reply}}</th>
                        <td>{{$data->status}}</td>
                        <td>{{$data->created_at}}</td>
                        <td>{{$data->updated_at}}</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
