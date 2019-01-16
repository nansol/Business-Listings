@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
            <div class="col-2 align-self-end"><a href="/" class="btn btn-light btn-sm">Back</a></div>

            <div class="panel-body">
              <ul class="list-group">
                <li class="list-group-item">{{$listing->name}}</li>
                <li class="list-group-item">Address: {{$listing->address}}</li>
                <li class="list-group-item">Website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                <li class="list-group-item">Email: {{$listing->email}}</li>
                <li class="list-group-item">Phone: {{$listing->phone}}</li>
                <li class="list-group-item">Bio: {{$listing->bio}}</li>

              </ul>
              <div>
        </div>
    </div>
</div>
@endsection
