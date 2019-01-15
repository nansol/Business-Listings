@extends('layouts.app')

@section('content')

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="row">
                        <div class="card-header col-10 align-self-start">Dashboard</div>
                        <div class="card-header  col-2 align-self-end"><a href="/listings/create" class="badge badge-success">Add Listing</a></div>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   <h2 class="text-center">Your listings</h2>
                    @if(count($listings))
                    <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    <h3 class="">Company Name</h3>
                                </div>
                            </div>
                                @foreach ($listings as $listing)
                            <div class="row list-group list-group-flush mb-5">
                                <div class="col-12">
                                    <h5 class="list-group-item">{{$listing->name}}</h5>
                                </div>
                                <div class="col-12">
                                    <h5 class="list-group-item">{{$listing->address}}</h5>
                                </div>
                                <div>
                                <a class="btn btn-light"  href="/listings/{{$listing->id}}/edit ">Edit</a>
                                </div>
                            </div>
                                @endforeach
                        </div>

                    @endif
                </div>
            </div>
        </div>
    </div>

@endsection
