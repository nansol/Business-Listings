@extends('layouts.app')

@section('content')

<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                    <div class="row">
                            <div class="card-header col-10 align-self-start"><h4>Add Contact</h4></div>
                            <div class="card-header col-2 align-self-end"><a href="/dashboard" class="align-self-end btn btn-light btn-sm">Back</a></div>
                    </div>
                <div class="card-body">
                    <form action="{{action('ListingsController@store')}}" method="POST">
                         <?= csrf_field() ?>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="Name" name="name" placeholder="Company Name">
                        </div>
                        <div class="form-group">
                            <label for="website">Website</label>
                            <input type="text" class="form-control" id="website" name="website" placeholder="Company Website">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email" name="email" placeholder="Contact Email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone Number</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Contact Phone Number">
                        </div>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <input type="text" class="form-control" id="address" name="address" placeholder="Business Address">
                        </div>
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio"placeholder="About the Business" rows="3"></textarea>
                        </div>



                        <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                </div>
            </div>
        </div>
    </div>
@endsection
