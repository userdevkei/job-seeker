@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2">Web | Update Slider Photo</h5>
            <hr>
        </div>
        <br>
        <br>
        <br>
            <div class="d-flex justify-content-center">
                <div class="col-md-7 col-sm-7">
                    <div class="card">
                        <div class="card-header" style="color: orange; background-color: forestgreen; ">Update Slider Item | All Fields are Required.</div>
                        <div class="card-body">
                            {!! Form::open(['action' => ['ManagewebController@update', $data->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('title',('Title :'),['class'=>'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::text('title',$data->title, ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('desc',('Description :'), ['class' => 'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::textarea('desc',$data->description,['class' => 'form-control', 'rows' => '3']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('photo',('Photo :'), ['class' => 'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::File('image',['class' => 'form-control']),$data -> image }}
                                </div>
                            </div>
                            <div class="row mb-0 form-group">
                                <div class="col-md-8 offset-md-4">
                                    {{Form::hidden('_method', 'PUT')}}
                                    <button class="btn btn-sm btn-success" type="submit" title="update user">
                                        @fas('save') update</button>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
