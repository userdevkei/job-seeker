@extends('layouts.app')

@section('content')
    <header>
        <div class="slider">
            <div class="img">
                <div class="text-ontop">
                    <div class="slider-text">
                    <h1 class="slider-tittle">
                        Welcome to Jobfinder | The Kenya's number 1 informal job ads platform.
                    </h1>
                    <h1 class="ontop-text">
                        We connect job seekers in the informal job sector with a wide variety of employers across the country. Everytime a job is posted by an employer it will be available for for job seekers to apply.
                    </h1>
                        <h1 class="slider-text-text">
                            To learn more on how to use JobFinder click the button below.
                        </h1>
                        <a class="read-more" style="text-decoration: none !important; color: white;" href=" {{ url('/how-to-use-jobfinder') }}">
                            How to use JobFinder @fas('angle-double-right')
                        </a>

                    </div>
                </div>
                <img src="{{ asset('img/img.jpg') }}">
            </div>
        </div>
    </header>
    <section class="jobs" id="jobs">
        <h1 class="job-header">TOP JOBS</h1>
        <hr>
        <div class="job-container">
            @if(count($jobs)>0)
                @foreach($jobs as $job)
        <a href="{{ route('applications.show', $job->id) }}">
            <div class="job-card" title="{{ $job->duties }}">
            <h1 class="job-title">@fas('briefcase') {{ $job->job_name }} | ({{ $job->vacancies }} position(s))</h1>
            <h1 class="job-preference">Prefer : {{ $job->user_name }} {{ $job->gender }} | {{ $job->age }}</h1>
            <h1 class="job-location">{{ $job->location }} | {{ $job->contract }} | {{ $job->work_hours }} | {{ $job->salary }}</h1>
            <div class="card-div">
                <div class="job-right">
                    <div>
                        <h1 class="job-deadline">
                            Application expires: <br> {{ $diff = Carbon\Carbon::parse($job->app_deadline)->diffForHumans() }}
                        </h1>

                        <small style="padding-top: -5px; color: yellow; font-size: 70%;">
                            posted : {{ $diff = Carbon\carbon::parse($job->created_at)->diffForHumans() }}
                        </small>
                    </div>
                </div>
                <div class="job-left">
                    <h1 class="job-duties">{{ $job->duties }}</h1>
                </div>
            </div>
        </div>
        </a>
                @endforeach
            @else
                <p class="animated">wait for new jobs to be updated soon</p>
            @endif
                <a class="more-jobs" href="{{ route('topjobs.index') }}">load more jobs..</a>
        </div>
    </section>
    <section class="about-us" id="about-us">
        <h1 class="job-header">About JobFinder</h1>
        <hr>
        <div class="about-img">
            <div class="about-img-text">
                <div class="about-img-ontop-text">
                    <div class="about-img-p-div">
                    <h1 class="about-img-p-header">Why use this platform?</h1>
                    <p class="about-img-p">
                        As a jobseeker the system helps you find for both unskilled and semiskilled jobs within your locality. After finding a suitable                         job allows you to apply for a job at no cost and relax wait to hear from your potential employer.
                    </p>
                    <p class="about-img-p">
                        As a potential employer, the system allows your create an account. The account enables you to post jobs you are offering to this                        platform, where jobseekers can apply your jobs from.
                    </p>
                    <p class="about-img-p">
                        This system enables you to get potential employees from wide range semi&unskilled fields.
                    </p>
                </div>
                </div>
            </div>
            <img src="{{ asset('/img/jobless.jpg') }}">
        </div>
    </section>
    <section class="contact-support" id="support">
        <h1 class="job-header">Talk to JobFinder</h1>
        <hr>
        <div class="divider">
            <div class="phone">
               <div class="fa">@fas('phone-volume')</div>
                <h1 class="fa-text">
                    Call us on : +254 711 111 111 <br>
                    or <br> 020 23 456 65<br> Email us at : jobfinder@gmail.com
                </h1>
            </div>
            <div class="support-form">
                {!! Form::open(['action' => 'MessageController@store', 'method' => 'POST'])!!}
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 text-md-right">
                        {{ Form::label('Name:') }}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        {{ Form::text('name','',['class'=>'form-control', 'Placeholder' => 'Type your name here']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 text-md-right">
                        {{ Form::label('Email Address:') }}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        {{ Form::email('email','',['class'=>'form-control', 'Placeholder' => 'Type your email address here ( optional )']) }}
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-4 col-sm-4 text-md-right">
                        {{ Form::label('Subject:') }}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        {{ Form::text('subject','',['class'=>'form-control', 'Placeholder' => 'Subject of the message']) }}
                    </div>
                </div>
                <div class="form-group row">

                    <div class="col-md-4 col-sm-4 text-md-right">
                        {{ Form::label('Message:') }}
                    </div>
                    <div class="col-md-8 col-sm-8">
                        {{ Form::textarea('message','',['class'=>'form-control', 'rows' => 3, 'Placeholder' => 'Type your name here']) }}
                    </div>
                </div>
                <div class="form-group row mb-0">
                    <div class="col-md-4 offset-md-4">
                        <button onclick="return confirm('You are about to send a message to the admin')"
                                class="submit-btn" type="submit">@fas('envelope') submit</button>
                    </div>
                </div>
                {{ Form::close() }}
            </div>
        </div>
    </section>
@endsection
