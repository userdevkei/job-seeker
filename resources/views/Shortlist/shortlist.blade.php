@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2">Shortlist Manager | List of Shortlisted Applicants</h5>
        </div>
        <hr>
        <div class="table table-responsive">
            @if(count($shortlists) >0 )
            <table class="table table-responsive-sm table-borderless table-striped">
                <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Age</th>
                    <th scope="col">ID. NO</th>
                    <th scope="col">Contact</th>
                    <th scope="col">Location</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Available</th>
                    <th scope="col">Applying For</th>
                    <th scope="col">Application Date</th>
                    <th scope="col">Text</th>
                    <th scope="col">Undo</th>
                    <th scope="col">Rate</th>
                </tr>
                </thead>
                <tbody>
                @foreach($shortlists as $app)
                        <tr>
                            <td nowrap="">{{$app -> name}}</td>
                            <td nowrap="">{{$app-> gender}}</td>
                            <td nowrap="">{{$app -> age}}</td>
                            <td nowrap="">{{$app -> id_no}}</td>
                            <td nowrap="">{{$app -> contact}}</td>
                            <td nowrap="">{{$app -> location}}</td>
                            <td nowrap="">{{$app -> experience}}</td>
                            <td nowrap="">{{$app -> availability}}</td>
                            <td nowrap="">{{$app -> job_applied}}</td>
                            <td nowrap="">{{$app -> created_at}}</td>
                            <td nowrap="">
                                @if($app -> t_status == 0 )
                      <a onclick="return confirm('Send a text message to this applicant')"
                         class="submit-btn-sm text-center" href="{{ route('text', $app->id) }}"
                         title="send sms to this job seeker">@fas('sms')</a>
                                    @else()
                      <a class="btn disabled btn-sm btn-success text-center" href="{{ route('text', $app->id) }}"
                         title="already send a text to this client">@fas('comment-slash')</a>
                                @endif
                            </td>
                            <td nowrap="">
                                <a class="btn btn-sm btn-danger"
                                title="decline candidate" onclick=" return confirm('You are about to decline this shortlisted candidate.')" href="{{ route('disapprove', $app->id) }}" id="decline">@fas('thumbs-down')</a>
                            </td>
                            <td>
                                <button class="btn btn-sm btn-info" type="button" title="five star rating">
                                    @fas('star-half-alt')</button>
                            </td>
                        </tr>
                @endforeach
                </tbody>
            </table>

                @else
                        <td><p class="text-muted">No shortlisted candidates at the moment</p></td>
                @endif
                <div class="d-flex justify-content-sm-end">
                    {{ $shortlists->links() }}
                </div>
        </div>
    </div>
@endsection
    <script>
        function popModal() {
            if (confirm('You are about to decline this shortlisted candidate.')) {
                // Save it!
                console.log('Thing was saved to the database.');
            } else {
                // Do nothing!
                console.log('Thing was not saved to the database.');
            }
        }
    </script>
