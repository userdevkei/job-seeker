@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2 text-capitalize text-center">Fill in the form to make an application.</h5>
        </div>
        <hr>
        <div class="container d-flex justify-content-center">
            <div class="col-sm-8">
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
                            {{Form::label('name', 'Phone Number:')}}
                        </div>
                        <div class="col-md-8 col-sm-8">
                            {{Form::tel('contact','',['class' => 'form-control text-capitalize', 'placeholder' => 'enter phone number'])}}
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 text-md-right">
                            {!! Form::label('name', 'Applying For:') !!}
                        </div>
                        <div class="col-md-8 col-sm-8">
                                {{ $job_name }}
                        </div>
                    </div>
                </div>
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
                            {{Form::label('name', 'Availability :')}}
                        </div>
                        <div class="col-md-8 col-sm-8">
                            {{Form::date('availability', '', ['class' => 'form-control form-control-md text-capitalize', 'placeholder' => ''])}}
                            <small class="text-info">date when you can start work. eg. 05/06/2019</small>
                        </div>
                    </div>
                </div>
                <div class="form-group col-sm d-flex justify-content-end">
                    <button onclick="return confirm('You are about to send your application.')" type="submit" class="submit-btn">@fas('save')</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
