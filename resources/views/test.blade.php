@extends('layouts.app')
@section('content')
    @foreach($js as $job)
        <div>
            {{ $job->app_deadline }} |
            {{ $job->status }} | {{ $now }}
        </div>
    @endforeach
@endsection
