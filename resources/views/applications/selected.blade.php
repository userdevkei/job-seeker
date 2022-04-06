@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-2">Applications | Apply for this job.</h5>
    </div>
    <hr>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header font-weight-bold text-capitalize" style="color: yellow; background-color: green;"> {{ $job->job_name }} @ Ksh. {{ $job->salary }}</div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                            <h5 class="font-weight-bold">Employer :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-title">
                                <p class="lead text-capitalize" style="color: lightseagreen !important;"> {{ $job->by }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Vacancies :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead">{{ $job->vacancies }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Preferred Gender :</h5>
                        </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead"> {{ $job->gender }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Preferred age :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead"> {{ $job->age }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Period :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead"> {{ $job->contract }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Located at :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead"> {{ $job->location }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Working Hours :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-subtitle">
                                <p class="lead"> {{ $job->work_hours }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Duties :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-text">
                                <p> {{ $job->duties }} </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-right">
                            <div class="card-title">
                                <h5 class="font-weight-bold">Application Deadline :</h5>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-8">
                            <div class="card-text">
                                <p class="lead">  {{ $diff = Carbon\Carbon::parse($job->app_deadline)->diffForHumans() }} </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <small>Posted on : {{ $job->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 col-sm-5">
                <div class="card">
                    <div class="card-header" style="background-color: green; color: yellow">
                        Applying for : <h7 class="text-capitalize" style="color: yellow;">{{ $job->job_name }}</h7>
                    </div>
                        <div class="card-body">
                            {!! Form::open(['action' => 'ApplicationController@store', 'method' => 'POST']) !!}
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Full Names:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::text('name','',['class' => 'form-control text-capitalize', 'placeholder' => 'enter Full names'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Age:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::number('age','',['class' => 'form-control text-capitalize', 'placeholder' => 'enter your age'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form:: label('name', 'Gender:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::select('gender', array('Male' => 'Male', 'Female' => 'Female'),'',['class' => 'form-control text-capitalize', 'placeholder' => 'Select Your Gender'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'ID Number:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::text('id','',['class' =>  'form-control text-capitalize', 'placeholder' => 'enter your national identification number'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Location:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::text('location','',['class' =>  'form-control text-capitalize', 'placeholder' => 'Your current location'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Phone Number:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::tel('contact','',['class' => 'form-control', 'placeholder' => 'Enter your phone number: 07.....'])}}
                                    </div>
                                </div>
                            </div>
                                    {{ Form::hidden('job', $job->job_name ) }}
                                    {{ Form::hidden('contract', $job->contract ) }}
                                    {{ Form::hidden('job_location', $job->location ) }}
                                    {{ Form::hidden('work_hours', $job->work_hours ) }}
                                    {{ Form::hidden('duties', $job->duties ) }}
                                    {{ Form::hidden('salary', $job->salary ) }}
                                    {{ Form::hidden('user_id', $job->user_id ) }}
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Experience:')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::text('experience', '', ['class' => 'form-control text-capitalize', 'placeholder' => 'How long have you done this kind of job.'])}}
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-sm">
                                <div class="row">
                                    <div class="col-md-4 col-sm-4 text-md-right">
                                        {{Form::label('name', 'Available on :')}}
                                    </div>
                                    <div class="col-md-8 col-sm-8">
                                        {{Form::date('availability', '', ['class' => 'form-control form-control-md text-capitalize', 'placeholder' => ''])}}
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group mb-0">
                                <button onclick="return confirm('You are about to send your application.')"
                                        class="submit-btn offset-md-10" type="submit"
                                        title="apply for the vacancy">
                                    @fas('save') apply</button>
                            </div>
                                    {!! Form::close() !!}
                        </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @endsection

