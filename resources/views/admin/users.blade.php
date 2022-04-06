
@extends('layouts.app')
@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-2">User Manager | Registered Users</h5>
        </div>
        <hr>
        @if(count($users)> 0)
            <div class="table table-responsive ">
                <table class="table table-responsive-sm table-borderless table-striped">
                    <thead>
                    <th>User Name</th>
                    <th>ID Number</th>
                    <th>Contact</th>
                    <th>Email</th>
                    <th>Residence</th>
                    <th>User Level</th>
                    <th>Registered on</th>
                    <th>Status</th>
                    <th>Action</th>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td nowrap>{{$user->name}}</td>
                            <td nowrap>{{$user->idnumber}}</td>
                            <td nowrap>{{$user->contact}}</td>
                            <td nowrap>{{$user->email}}</td>
                            <td nowrap>{{$user->residence}}</td>
                            <td nowrap>{{$user->level}}</td>
                            <td nowrap>{{$user->created_at}}</td>
                            <td nowrap>
                                @if($user->status == 1)
                                    <a href="{{ route('profile.show', $user->id) }}"  class="btn btn-sm btn-success"
                                       title="User active">@fas('toggle-on')</a>
                                @else
                                    <a href="{{ route('profile.show', $user->id) }}"  class="btn btn-sm btn-warning"
                                    title="User inactive">@fas('toggle-off')
                                    </a>
                                @endif
                            </td>
                            <td>
                             {!! Form::open(['action' => ['ShortlistController@destroy', $user ->id], 'method' => 'POST']) !!}
                              {!! Form::hidden('_method', 'DELETE') !!}
                              <button onclick="return confirm('Are you sure you want to remove this user?')"
                                      class="btn btn-sm btn-danger" type="submit" title="delete user">
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
                {{ $users->links() }}
            </div>
    </div>
@endsection

