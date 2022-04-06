@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-md-2 text-capitalize">Messages | What the users say about informal job search</h5>
    </div>
    <hr>
    <div class="message-card">
        <div class="message">
            <div class="sub-mess">Subject</div>
            <hr>
            @if(count($messages)>0)
                @foreach($messages as $row)
                    <div class="text-container">
                        <a class="subject" href="{{ route('messages.show', $row -> id) }}">{{ $row -> subject }}</a>
                        @if($row->status == 0)
                            <span class="badge bg-success">new</span>
                        @endif
                    </div>
                    <hr>
                @endforeach
            @else
                <p class="text-container">
                    You have no notifications from users
                </p>
            @endif
        </div>
        <div class="show-message">
            <div class="sub-mess">Message</div>
            <hr>
            <div class="text">
                <p class="text-info-center">
                    Select a text to read.
                </p>
            </div>
        </div>
    </div>
</div>
    <div class="d-flex justify-content-md-end">
        {{ $messages->links() }}
    </div>

    <hr>
    @endsection
