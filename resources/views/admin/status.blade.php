@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-0">User subscription | Update subscription status</h5>
        </div>
        <hr>
        <br>
        <br>
        <div class="d-flex justify-content-center">
            <div class="col-md-5 col-sm-5">
                <div class="card">
                    <div class="card-header" style="background-color: forestgreen; color: yellow;">Status | Update subscription status. </div>
                    <div class="card-body">
                        {!! Form::open(['action' => ['AdminController@userStatus', $user->id], 'method' => 'POST']) !!}
                        <div class="form-group row">
                            {!! Form::label('name','User Name :',['class'=>'col-md-5 col-sm-5 col-form-label text-right font-weight-bold']) !!}
                            {!! Form::text('job_name', $user->name,['class' => 'form-control-plaintext col-md-7 col-sm-7 ', 'readonly']) !!}
                        </div>
                        {{ Form::hidden('id'), $user->id }}
                        <div class="form-group row">
                            {!! Form::label('name','User Email :',['class'=>'col-md-5 col-sm-5 col-form-label text-right font-weight-bold']) !!}
                            {!! Form::text('job_name', $user->email,['class' => 'form-control-plaintext col-md-7 col-sm-7 ', 'readonly']) !!}
                        </div>
                        <div class="form-group row">
                            {!! Form::label('name','User Contact :',['class'=>'col-md-5 col-sm-5 col-form-label text-right font-weight-bold']) !!}
                            {!! Form::text('job_name', $user->phone,['class' => 'form-control-plaintext col-md-7 col-sm-7 ', 'readonly']) !!}
                        </div>
                        <div class="form-group row">
                            {!! Form::label('name','Subscription Status :',['class'=>'col-md-5 col-sm-5 col-form-label text-right font-weight-bold']) !!}
                            {!! Form::select('status',['0'=>'Inactive', '1'=>'Active'], $user->status, ['class' => 'col-md-4 col-sm-4 form-control form-control-sm']) !!}
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-7 offset-md-4">
                                <button onclick="return confirm('Are you sure ou want to change the user status?')" class="submit-btn" type="submit" title="update user subscription">
                                    @fas('save') status</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
