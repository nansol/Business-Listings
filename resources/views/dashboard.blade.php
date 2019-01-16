@extends('layouts.app')

@section('content')

<div class="row row justify-content-center">
    <div class="col-md-8 col-md-offset-2">
        <div class="panel panel-default">
                <div class="row">
                        <div class="card-header col-10 align-self-start">Dashboard</div>
                        <div class="card-header  col-2 align-self-end"><a href="/listings/create" class="badge badge-success">Add Listing</a></div>
                    </div>

                <h2 class="text-center">Your listings</h2>
                @if(count($listings))
            <div class="panel-body">
                    @foreach ($listings as $listing)

              <ul class="list-group">
                <li class="list-group-item">{{$listing->name}}</li>
                <li class="list-group-item">Address: {{$listing->address}}</li>
                <li class="list-group-item">Website: <a href="{{$listing->website}}" target="_blank">{{$listing->website}}</a></li>
                <li class="list-group-item">Email: {{$listing->email}}</li>
                <li class="list-group-item">Phone: {{$listing->phone}}</li>
                <li class="list-group-item">About: {{$listing->bio}}</li>
              </ul>
              <div class="row">
                <div class="col-2 align-self-start">
                    <a class="btn btn-light"  href="/listings/{{$listing->id}}/edit ">Edit</a>
                </div>
                <div class="col-2 align-self-end">
                    <form action="{{action('ListingsController@destroy', [$listing->id])}}" method="POST">
                         <?= csrf_field() ?>
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
            <br>
            @endforeach

            </div>
            @endif
        </div>
    </div>
</div>








@endsection
