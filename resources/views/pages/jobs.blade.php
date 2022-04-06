@extends('layouts.app')

@section('content')
    <section class="jobs" id="jobs">
        <h1 class="job-header">Available Jobs</h1>
        <hr>
        <div class="job-container">
            @if(count($jobs)>0)
                @foreach($jobs as $job)
                    <a href="{{ route('applications.show', $job->id) }}">
                        <div class="job-card">
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
                <p>wait for new jobs to be updated soon</p>
            @endif
                <div class="d-flex justify-content-sm-end">
                    {{ $jobs->links() }}
                </div>
        </div>
    </section>
    <hr>
    @endsection
