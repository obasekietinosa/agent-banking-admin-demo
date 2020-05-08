@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <p>
                <a href={{route('admin.agents.home')}}>All Agents</a>
            </p>
            <h2>{{ $agent->title }}</h2>
            <p>{{ $agent->description }}</p>
            <p>{{ $agent->address }}</p>
            <p>{{ $agent->city }}</p>
            <p>{{ $agent->state }}</p>
            <p>{{ $agent->zip_code }}</p>
            <p>{{ "($agent->longitude, $agent->latitude)" }}</p>
        </div>
    </div>
</div>
@endsection