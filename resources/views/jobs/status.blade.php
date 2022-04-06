@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-0">Job status | Update job status</h5>
    </div>
    <hr>
    <br>
    <br>
<div class="d-flex justify-content-center">
    <div class="col-md-5 col-sm-5">
        <div class="card">
            <div class="card-header" style="background-color: forestgreen; color: yellow;">Status | Update status. </div>
            <div class="card-body">
                {!! Form::open(['action' => ['AdminController@jobStatus', $jobs->id], 'method' => 'POST']) !!}
                <div class="form-group row">
                    {!! Form::label('name','Job Name :',['class'=>'col-md-4 col-sm-4 col-form-label text-right font-weight-bold']) !!}
                    {!! Form::text('job_name', $jobs->job_name,['class' => 'form-control-plaintext col-md-8 col-sm-8 ', 'readonly']) !!}
                </div>
                {{ Form::hidden('id'), $jobs->id }}
                <div class="form-group row">
                    {!! Form::label('name','Employer :',['class'=>'col-md-4 col-sm-4 col-form-label text-right font-weight-bold']) !!}
                    {!! Form::text('job_name', $jobs->by,['class' => 'form-control-plaintext col-md-8 col-sm-8 ', 'readonly']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('name','Job Location :',['class'=>'col-md-4 col-sm-4 col-form-label text-right font-weight-bold']) !!}
                    {!! Form::text('job_name', $jobs->location,['class' => 'form-control-plaintext col-md-8 col-sm-8 ', 'readonly']) !!}
                </div>
                <div class="form-group row">
                    {!! Form::label('name','Status :',['class'=>'col-md-4 col-sm-4 col-form-label text-right font-weight-bold']) !!}
                    {!! Form::select('status',['0'=>'Job undone', '1'=>'Job done'], $jobs->status, ['class' => 'col-md-6 col-sm-6 form-control form-control-sm']) !!}
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">

                        <button onclick="return confirm('Are you sure you want to change job status?')"
                                class="submit-btn" type="submit" title="change status">@fas('save') status</button>

            </div>
        </div>
    </div>
</div>
</div>
    @endsection
