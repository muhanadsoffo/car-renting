@extends('layouts.adminbase')

@section('title', 'show Category: '. $data->title)

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Show Page</h1>

            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">{{$data->title}} Report</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">Description</th>
                        <th scope="col">image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>

                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">{{$data->id}}</th>
                        <td>{{$data->title}}</td>
                        <td>{{$data->keywords}}</td>
                        <td>{{$data->description}}</td>
                        <td>
                            <img src="{{Storage::url($data->image)}}" style="height: 80px" alt="">
                            </td>
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
