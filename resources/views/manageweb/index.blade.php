@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="well">
        <h5 class="h5 mt-1">Web | Manage Home Page</h5>
    </div>
    <hr>
    <div class="d-flex justify-content-sm-end">
        <a class="btn btn-sm btn-success" href="{{ route('manager.create') }}" title="add homepage banner">@fas('plus') </a>
    </div>
    <div class="container-fluid">
        <div class="card-deck">
        @if(count($data) > 0)
            @foreach($data as $data)
                <div class="col-3 my-2">
                <div class="card h-100">
                    <img class="card-img-top" src="/storage/images/{{$data -> image}}" alt="Card image cap" style="min-height: 200px;">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data -> title }}</h5>
                        <p class="card-text text-truncate">{{ $data -> description }}.</p>
                    </div>
                    <div class="card-footer d-flex justify-content-sm-end" style="background-color: green; color: yellow;">
                        <a href="{{ route('manager.edit', $data->id ) }}" class="btn btn-sm btn-primary"
                        title="update homepage banner" style="margin-right: 5px !important;">@fas('edit')</a>
                        {!! Form::open(['action' => ['ManagewebController@destroy', $data ->id], 'method' => 'POST']) !!}
                        {!! Form::hidden('_method', 'DELETE') !!}
                        <button class="btn btn-sm btn-danger" type="submit" title="delete homepage banner">
                            @fas('trash-alt')</button>
                        {!! Form::close(); !!}
                    </div>
                </div>
                </div>
            @endforeach
            @else
        <p class="muted"> No home slider photos added. Click <a type="link" href="{{ route('manager.create') }}">here</a> to add slider photos. </p>
            @endif
    </div>
    </div>
</div>
    @endsection
