@extends('layouts.app')

@section('content')
    <div class="container-form">
        <div class="well">
            <h5 class="h5 mt-2">Create Job | Fill All Fields to Create a Vacancy</h5>
        </div>
        <hr>
        <div class="container d-flex justify-content-center">
            <div class="col-md-10 col-md-3-offset">
                {!! Form::open(['action' => 'JobsController@store', 'method' => 'POST'])!!}
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('name', 'Job Name')}}
                        {{Form::text('name','',['class' => 'form-control text-capitalize', 'placeholder' => 'Name of the Job Being Offered'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('vacancy', 'Vacancies')}}
                        {{Form::number('vacancy','',['class' => 'form-control text-capitalize', 'placeholder' => 'Vacancies Available'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('age', 'Age Range')}}
                        {{Form::text('age','',['class' => 'form-control text-capitalize', 'placeholder' => 'preferred age range e.g 25-45'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('gender', 'Preferred Gender')}}
                        {{Form::select('gender', array('Male' => 'Male', 'Female' => 'Female', 'Male/Female' => 'Male/Female'),'',['class' => 'form-control text-capitalize', 'placeholder' => 'Select Your Gender'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('contract', 'Contract Length')}}
                        {{Form::text('contract','',['class' => 'form-control text-capitalize', 'placeholder' => 'Contract Length E.G 2 months, 1 day'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('location', 'Job Location')}}
                        {{Form::text('location','',['class' => 'form-control text-capitalize', 'placeholder' => 'the location of the job e.g Kitui - town'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('hours', 'Working Hours')}}
                        {{Form::text('hours','',['class' => 'form-control text-capitalize', 'placeholder' => 'working hours e.g 5am - 5pm'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('deadline', 'Application Deadline')}}
                        {{Form::date('deadline','',['class' => 'form-control text-capitalize', 'placeholder' => 'applications should be submitted by;'])}}
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                        {{Form::label('duties', 'Duties')}}
                        {{Form::textArea('duties','',['class' => 'form-control', 'placeholder' => 'Simple Description of The Job', 'rows' => '3'])}}
                    </div>
                    <div class="form-group col-md-6">
                        {{Form::label('salary', 'Salary')}}
                        {{Form::text('salary','',['class' => 'form-control text-capitalize', 'placeholder' => 'Expected Salary e.g ksh. 18,000/month'])}}
                    </div>
                </div>
                <div class="form-group d-flex justify-content-lg-end">
                    <button onclick="return confirm('You are about to uplaod this job')" class="submit-btn" type="submit" title="submit job" >
                        @fas('save') save</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection
