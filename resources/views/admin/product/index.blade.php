@extends('layouts.adminbase')

@section('title', 'Product List')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1>Product List</h1>
            <h3><a href="{{route('admin.product.create')}}"class="badge badge-pill badge-secondary" >Add New product</a></h3>
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title m-b-0">Product List</h5>
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Category Name</th>
                        <th scope="col">Title</th>
                        <th scope="col">Keywords</th>
                        <th scope="col">Description</th>
                        <th scope="col">detail</th>
                        <th scope="col">Price</th>
                        <th scope="col">Image</th>
                        <th scope="col" >Gallery</th>
                        <th scope="col">Status</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                        <th scope="col">Show</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $rs)
                        <tr>
                            <th>{{$rs->id}}</th>
                            <th>{{$rs->CategoryId}}</th>
                            <td>{{$rs->title}}</td>
                            <td>{{$rs->keywords}}</td>
                            <td>{{$rs->description}}</td>
                            <td>{{$rs->detail}}</td>
                            <td>{{$rs->price}}</td>
                            <td> <img src="{{Storage::url($rs->image)}}" style="height: 80px" alt=""></td>
                            <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}">
                                    <i class="m-r-10 mdi mdi-folder-multiple-image" ></i>
                                </a>
                            </td>
                            <td>{{$rs->status}}</td>
                            <td><a href="{{route('admin.product.edit',['id'=>$rs])}}"class="btn btn-success btn-sm">Edit</a></td>
                            <td><a href="{{route('admin.product.destroy',['id'=>$rs])}}"class="btn btn-danger btn-sm">Delete</a></td>
                            <td><a href="{{route('admin.product.show',['id'=>$rs])}}"class="btn btn-info btn-sm">Show</a></td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>

    </div>
@endsection
