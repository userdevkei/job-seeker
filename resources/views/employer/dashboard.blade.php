@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-0">Dashboard | Employer Dashboard</h5>
    </div>
    <hr>
    <div class="container-info">
    <a class="info-card" href="{{ route('jobs.index') }}">
        <div class="info-card-header">
            Job ads
        </div>
        <hr>
        <div class="total">
            {{ $job }}
        </div>
        <div class="info-card-percentage">
            {{ round($jobs,2) }} %
            <div>
                <small>Total percentage of jobs you jobs you have posted in JobFinder.</small>
            </div>
            <hr>
        </div>
        <div class="info-card-text">
            Number of job ads you have advertised using JobFinder.
        </div>
    </a>
        <a class="info-card" href="{{ route('applications.index') }}">
            <div class="info-card-header">
                Job applications
            </div>
            <hr>
            <div class="total">
                {{ $apps }}
            </div>
            <div class="info-card-percentage">
                {{ round($japps,2) }} %
                <div>
                    <small>Total percentage of jobs you have posted in JobFinder.</small>
                </div>
                <hr>
            </div>
            <div class="info-card-text">
                Number of applications which have been made for different job vacancies applied using JobFinder.
            </div>
        </a>
        <a class="info-card" href="{{ route('shortlist.index') }}">
            <div class="info-card-header">
                Shortlisted
            </div>
            <hr>
            <div class="total">
                {{ $short }}
            </div>
            <div class="info-card-percentage">
                {{ round($list,2) }} %
                <div>
                    <small>Total percentage of jobs you have posted in JobFinder.</small>
                </div>
                <hr>
            </div>
            <div class="info-card-text">
                Number of job applicants shortlisted  who successfully applied for vacancies using JobFinder.
            </div>
        </a>
        <a class="info-card" href="{{ route('profile.index') }}">
            <div class="info-card-header">
                User Profile
            </div>
            <hr>
            <div class="total">
                @fas('user')
            </div>
            <div class="info-card-text">
                {{ Auth::user()->level }}
            </div>
            <div class="info-card-text">
                {{ Auth::user()->name }}
            </div>
            <div class="info-card-text">
                {{ Auth::user()->phone }}
            </div>
                <hr>
            <div class="info-card-text">
                Details of the logged in user in JobFinder.
            </div>
        </a>
    </div>
</div>

    @endsection
