<style>
    .as-employer{
        margin: 5px auto !important;
        width: 49% !important;
        float: right;
    }
    .as-jobseeker{
        margin: 5px auto !important;
        width: 49% !important;
        float: left;
    }
</style>
@extends('layouts.app')

@section('content')
<h1 class="job-header">How to use this platform</h1>
    <hr>
    <div class="container">
        <div class="as-jobseeker">
            <h1 class="job-header" style="font-size: 110% !important;">As Jobseeker</h1>
            <hr>
            <ul>
                <li>
                    Informal Job System System will provide you with daily, weekly and monthly non-formal jobs for                                     people with skills or without major academic qualification.
                </li>
                <li>
                    After visiting a our site select find job to view list of jobs in our system.
                </li>
                <li>
                    If you did not find a job that matches your choice you can go to next page of the jobs list                                         using links provided below this page.
                </li>
                <li>
                    After getting a job that matches your choice click on the job description statement to apply for                                    a for the selected job.
                </li>
                <li>
                    Fill the application form provided correctly and ensure the details provided are correct to                                         increase chances of securing a job.
                </li>
                <li>
                    Then click on the submit application button to send your application to your potential employer.
                </li>
                <li>
                    if details provided are correct a message will pop-up showing you applied for the job                                               successfully.
                </li>
                <li>
                    Wait to hear back from your employer through phone call or message.
                </li>
            </ul>
        </div>
        <div class="as-employer">
            <h1 class="job-header" style="font-size: 110% !important;">As employer</h1>
            <hr>
            <ul>
                <li>
                    Do you have jobs that you want them to be advertised online through our site?
                </li>
                <li>
                    Visit our website and creat an account or
                    <a class="card-link" href="{{ route('register') }}">click here to register employer account</a>
                </li>
                <li>
                    If you have already created an account <a class="card-link" href="{{ route('login') }}">click                                      here to log in</a>
                </li>
                <li>
                    After successful login you will be able to do the following:
                    <ul>
                        <li>
                            Create, edit or delete a vacancy.
                        </li>
                        <li>
                            View list of candidates who applied for a job vacancy.
                        </li>
                        <li>
                            Select the candidate with the desirable qualification to do your job.
                        </li>
                        <li>
                            Access your profile and update your details if need be
                        </li>
                    </ul>
                </li>
                <li>
                    Informal Job Search System will enable you to get a pool of applicants from which you will be                                      able to choose candidates who match your search criteria.
                </li>
                <li>
                    Informal Job Search System will offer you 24/7hours of job advertisement and application from                                      all over the country.
                </li>
            </ul>
        </div>
    </div>
    @endsection
