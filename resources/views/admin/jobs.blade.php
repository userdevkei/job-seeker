@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2">Job Manager | All Jobs Posted</h5>
        </div>
        <hr>
        @if(count($jobs)> 0)
            <div class="table table-responsive">
                <table class="table table-responsive-sm table-borderless table-striped">
                    <thead>
                    <th>Job Name</th>
                    <th>Chance</th>
                    <th>Age</th>
                    <th>Gender</th>
                    <th>Period</th>
                    <th>Work Hours</th>
                    <th>Location</th>
                    <th>Salary</th>
                    <th>Created on</th>
                    <th>Expiry</th>
                    <th>Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($jobs as $job)
                        <tr>
                            <td nowrap>{{$job->job_name}}</td>
                            <td nowrap>{{$job->vacancies}}</td>
                            <td nowrap>{{$job->age}}</td>
                            <td nowrap>{{$job->gender}}</td>
                            <td nowrap>{{$job->contract}}</td>
                            <td nowrap>{{$job->work_hours}}</td>
                            <td nowrap>{{$job->location}}</td>
                            <td nowrap>{{$job->salary}}</td>
                            <td nowrap>{{$job->created_at}}</td>
                            <td nowrap>
                                @if($job->expiry == 0)
                                    <span class="font-weight-bold text-danger"> Expired </span>
                                @else
                                    <span class="font-weight-bold text-success"> Active </span>
                                @endif
                            </td>
                            <td nowrap>
                                @if($job->status == 0)
                                    <span class="font-weight-bold text-danger"> Incomplete</span>
                                @else($job->status == 1)
                                    <span class="font-weight-bold text-success"> Completed </span>
                                @endif
                            </td>
                            <td>
                                {!! Form::open(['action' => ['SystemController@destroy', $job ->id], 'method' => 'POST']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                <button onclick="return confirm('Are you sure you want to delete this job?')"
                                        class="btn btn-sm btn-danger" type="submit" title="delete job">
                                    @fas('trash-alt')</button>
                                {!! Form::close(); !!}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                    @else
                        You have not added any job vacancies.
                    @endif
                </table>
            </div>
            <div class="d-flex justify-content-sm-end">
                {{ $jobs->links() }}
            </div>
    </div>
@endsection

