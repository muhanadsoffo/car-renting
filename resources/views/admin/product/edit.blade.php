@extends('layouts.adminbase')

@section('title', 'Edit Product')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Edit {{$data->title}}</h1>

            <div class="card">
                <form class="form-horizontal" action="{{route('admin.product.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">product Elements</h4>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="title" value="{{$data->title}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">Category Group</label>
                            <div class="col-sm-9">
                        <select name="CategoryId" class="select2 form-control custom-select select2-hidden-accessible"  style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                            <option data-select2-id="3" >{{$data->CategoryId}}</option>
                            @foreach($datalist as $rs)
                                <option >{{$rs->title}}</option>
                            @endforeach
                        </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-vump-container"><span class="select2-selection__rendered" id="select2-vump-container" role="textbox" aria-readonly="true" title="Select"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                        </div>
                        </div>
                        <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Keywords</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="keywords"  value="{{$data->keywords}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="description"  value="{{$data->description}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Details</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" name="detail"  value="{{$data->detail}}">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="lname" class="col-sm-3 text-right control-label col-form-label">Price</label>
                                <div class="col-sm-9">
                                    <input type="number" class="form-control" name="price"  value="{{$data->price}}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="image" class="col-sm-3 text-right control-label col-form-label">Image</label>
                                <div class="col-md-9">
                                    <div class="custom-file">
                                        <input type="file" class="custom-file-input" id="validatedCustomFile"  name="image" >
                                        <label class="custom-file-label" for="validatedCustomFile" >Choose image...</label>
                                        <div class="invalid-feedback">Example invalid custom file feedback</div>

                                    </div>
                                </div>
                            </div>

                            <div class="form-group row" >
                                <label for="cono1" class="col-sm-3 text-right control-label col-form-label">status</label>
                                <div class="col-md-9" data-select2-id="11">
                                    <select name="status" class="select2 form-control custom-select select2-hidden-accessible"  style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">


                                        <option  data-select2-id="20">{{$data->status}}</option>
                                        <option  data-select2-id="20">true</option>
                                        <option  data-select2-id="20">false</option>




                                    </select><span class="select2 select2-container select2-container--default select2-container--below select2-container--focus" dir="ltr" data-select2-id="2" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-vump-container"><span class="select2-selection__rendered" id="select2-vump-container" role="textbox" aria-readonly="true" title="Select"></span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
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
