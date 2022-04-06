@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-2">Web | Add Slider Photo</h5>
        <hr>
    </div>
    <br>
    <br>
    <br>
        <div class="d-flex justify-content-center">
            <div class="col-md-7 col-sm-7">
                <div class="card">
                    <div class="card-header" style="background-color: green; color: yellow;">Add Slider Item | All Fields are Required.</div>
                    <div class="card-body">
                        {!! Form::open(['action' => 'ManagewebController@store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('title',('Title :'),['class'=>'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::text('title','', ['class' => 'form-control']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('desc',('Description :'), ['class' => 'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::textarea('desc','',['class' => 'form-control', 'rows' => '3']) }}
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 col-sm-4 text-right">
                                    {{ Form::label('photo',('Photo :'), ['class' => 'text-right']) }}
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    {{ Form::File('image', ['class' => 'form-control']) }}
                                </div>
                            </div>
                        <div class="row mb-0 form-group">
                            <div class="col-md-8 offset-md-4">
                                <button class="btn btn-sm btn-success" type="submit">@fas('save') save</button>
                            </div>
                        </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection
