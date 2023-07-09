@extends('layouts.adminbase')

@section('title', 'Image List')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">
            <h1>{{$product->title}}</h1>
            <div class="card">
                <form class="form-horizontal" action="{{route('admin.image.store',['pid'=>$product->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">


                        <div class="form-group row">
                            <label for="title" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title"  placeholder="Title">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                            <div class="col-md-9">
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="validatedCustomFile" required="" name="image">
                                    <label class="custom-file-label" for="validatedCustomFile">Choose image...</label>
                                    <div class="invalid-feedback">Example invalid custom file feedback</div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="border-top">
                        <div class="card-body">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
            <h1>Image List</h1>
            <div class="card">
                <div class="card-body">
                </div>
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Title</th>
                        <th scope="col">Image</th>

                    </tr>
                    </thead>
                    <tbody>
                    @foreach($images as $rs)
                        <tr>
                            <th>{{$rs->id}}</th>
                            <td>{{$rs->title}}</td>
                            <td> <img src="{{Storage::url($rs->image)}}" style="height: 80px" alt=""></td>
                            <td><a href="{{route('admin.image.destroy',['pid'=>$product->id,'id'=>$rs->id])}}" class="btn btn-danger btn-sm">Delete</a></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <h3><a href="{{route('admin.product.index')}}"class="badge badge-pill badge-secondary" >return to product page</a></h3>
        </div>
    </div>
@endsection
