@extends('layouts.adminbase')

@section('title', 'Approve')

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>Approving to {{$data->product->title}}</h1>

            <div class="card">
                <form class="form-horizontal" action="{{route('admin.reservation.update',['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group row" >
                            <label for="cono1" class="col-sm-3 text-right control-label col-form-label">status</label>
                            <div class="col-md-9" data-select2-id="11">
                                <select name="status" class="select2 form-control custom-select select2-hidden-accessible"  style="width: 100%; height:36px;" data-select2-id="1" tabindex="-1" aria-hidden="true">


                                    <option  data-select2-id="20">{{$data->status}}</option>
                                    <option  data-select2-id="20">Approved</option>
                                    <option  data-select2-id="20">waiting for approval</option>

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
    </div>

@endsection
