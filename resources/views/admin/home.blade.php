@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! Click <a href={{ route('admin.agents.home') }}>Here</a> to manage all agents.
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add Agent</div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <div class="card-body">
                    <form method="POST" action={{ route('admin.agents.store') }}>
                        @csrf
                        <div class="form-group">
                            <label for="title" class="col-form-label">Title</label>
                            <div class="">
                                <input type="text" class="form-control" id="title" name="title" placeholder="Agent Title">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="description" class="col-form-label">Description</label>
                            <div class="">
                                <textarea class="form-control mb-2" id="description" name="description" placeholder="Your Description Here"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="address" class="col-form-label">Address</label>
                            <div class="">
                                <textarea class="form-control mb-2" id="address" name="address" placeholder="Your Address Here"></textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="city" class="col-form-label">City</label>
                            <div class="">
                                <input type="text" class="form-control" id="city" name="city" placeholder="City">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="state" class="col-form-label">State</label>
                            <div class="">
                                <input type="text" class="form-control" id="state" name="state" placeholder="State">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="zip_code" class="col-form-label">Zip code</label>
                            <div class="">
                                <input type="text" class="form-control" id="zip_code" name="zip_code" placeholder="Zip Code">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="longitiude" class="col-form-label">longitiude</label>
                            <div class="">
                                <input type="text" class="form-control" id="longitiude" name="longitiude" placeholder="Longitude">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="latitude" class="col-form-label">latitude</label>
                            <div class="">
                                <input type="text" class="form-control" id="latitude" name="latitude" placeholder="Latitude">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="">
                                <button type="submit" class="btn btn-primary">Add Agent</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection