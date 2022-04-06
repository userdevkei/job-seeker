@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-0">Dashboard | Admin Dashboard</h5>
        </div>
        <hr>
        <div class="card-deck">
            <div class="card">
                <div class="card-header" style="background-color: green; color: yellow;">
                    Registered Users
                </div>
                <div class="card-body">

                    <div class="card-title">
                        <h1 class="display-1">
                                {{ $user }}
                        </h1>
                    </div>
                    <div class="card-text">
                        <p>
                            On this category an Admin is able to view the details of employers who have registered to use this system.
                        </p>
                    </div>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <a class="card-link" href="{{ url('/users') }}">View users ..</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: green; color: yellow;">
                    Jobs Advertised
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h1 class="display-1">
                            {{ $job }}
                        </h1>
                    </div>
                    <div class="card-text">
                        <p>
                            Number of informal jobs which have been advertised in the system and are ready for applications.
                        </p>
                    </div>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <a class="card-link" href="{{ url('/job') }}">View Jobs..</a>
                </div>
            </div>
            <div class="card" style="background-color: white;">
                <div class="card-header" style="background-color: green; color: yellow;">
                    Applications
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h1 class="display-1">
                            {{ $apps }}
                        </h1>
                    </div>
                    <div class="card-text">
                        <p>
                            Number of applications which have been made for different job vacancies applied in the system.
                        </p>
                    </div>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <a class="card-link" href="{{ url('/application') }}">View applications ..</a>
                </div>
            </div>
            <div class="card">
                <div class="card-header" style="background-color: green; color: yellow;">
                   Messages
                </div>
                <div class="card-body">
                    <div class="card-title">
                        <h1 class="display-1">
                        {{ $mess }}
                    <span class="badge-pill badge-success" style="border-radius: 5px; font-size: 25%; font-family: 'Comic Sans MS',monospace;">
                        {{ $text }} new
                    </span>
                        </h1>
                    </div>
                    <div class="card-text">
                        <p>
                           Messages received from informal job search users.
                        </p>
                    </div>
                </div>
                <div class="card-footer" style="background-color: white;">
                    <a class="card-link" href="{{ route('messages.index') }}">View messages ..</a>
                </div>
            </div>
        </div>
        <hr>
@endsection
