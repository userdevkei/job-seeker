@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2">Application Manager | List of Applicants</h5>
        </div>
        <hr>
        <div class="table table-responsive">
            @if(count($apps) > 0)
            <table class="table table-responsive-sm table-borderless table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">ID. Number</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Available</th>
                    <th scope="col">Applying For</th>
                    <th scope="col">Application Date</th>
                    <th>Accept</th>
                    <th>Decline</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($apps as $app)
                        <tr>
                            <td nowrap>{{$app -> name}}</td>
                            <td nowrap>{{$app->  gender}}</td>
                            <td nowrap>{{$app -> age}}</td>
                            <td nowrap>{{$app -> id_no}}</td>
                            <td nowrap>{{$app -> contact}}</td>
                            <td nowrap>{{$app -> experience}}</td>
                            <td nowrap>{{$app -> availability}}</td>
                            <td nowrap>{{$app -> job_applied}}</td>
                            <td nowrap>{{$app -> created_at}}</td>
                            <td nowrap>
                                <a onclick="return confirm('Add this applicant to your pool of candidates')"
                                   href="{{route('approve',$app->id)}}" class="btn btn-sm btn-info"
                                   title="shortlist candidate">@fas('thumbs-up')</a>
                            </td>
                            <td nowrap="">
                                {!! Form::open(['action' => ['ApplicationController@destroy', $app ->id],
                                'method' => 'POST']) !!}
                                {!! Form::hidden('_method', 'DELETE') !!}
                                <button onclick="return confirm('Are you sure you want to delete this application?')"
                                        class="btn btn-sm btn-danger" type="submit" title="delete application">
                                    @fas('trash-alt')</button>
                                {!! Form::close(); !!}
                            </td>
                        </tr>
                    @endforeach
                @else
                    <tr>
                        <td>
                            <p class="text-muted">No applications that have been made yet.</p>
                        </td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-sm-end">
            {{ $apps->links() }}
        </div>
    </div>
@endsection
