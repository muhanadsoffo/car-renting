@extends('layouts.adminbase')

@section('title', 'replying to '. $userdata->name)

@section('content')

    @include("admin.sidebar")
    <div class="page-wrapper">
        <div class="container-fluid">


            <h1>replying to {{$userdata->name}}</h1>

            <div class="card">
                <form class="form-horizontal" action="{{ route('admin.message.reply', ['id' => $data->id ,'userId'=>$userdata->id]) }}" method="post" >
                    @csrf
                    <div class="card-body">
                        <h4 class="card-title">your reply</h4>

                        <div class="form-group row">
                            <label for="fname" class="col-sm-3 text-right control-label col-form-label">type a message back</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="reply">
                            </div>
                        </div>

                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">send reply</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>


        </div>



    </div>

@endsection
