@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="well">
            <h5 class="h5 mt-md-1">Profile | My Details.</h5>
        </div>
        <hr>
        <div class="d-flex justify-content-center">
            <div class="container">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3 col-sm-3" style="margin: auto;">
                                @if(auth::user()->level == 'Admin')
                                    <img src="{{ asset('img/system.png') }}" class="img-avatar">
                                @else
                                    <img src="{{ asset('img/employer.png') }}" class="img-avatar">
                                @endif
                        </div>
                        <div class="col-md-9 col-sm-9" style="border: 2px solid lightseagreen; border-radius: 4px; margin: auto;">
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">User Level:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                  <p class="text-capitalize">
                                      {{ auth::user()->level }}
                                  </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">Name:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="text-capitalize">
                                        {{ auth::user()->name }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">Email:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="">
                                        {{ auth::user()->email }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">ID Number:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="text-capitalize">
                                        {{ auth::user()->idnumber }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">Contact:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="text-capitalize">
                                        {{ auth::user()->phone }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">Residential:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="text-capitalize">
                                        {{ auth::user()->residence }}
                                    </p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-2 col-sm-2 text-md-right">
                                    <p class="lead">Registered:</p>
                                </div>
                                <div class="col-md-10 col-sm-10">
                                    <p class="text-capitalize">
                                        {{ auth::user()->created_at }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    @endsection
