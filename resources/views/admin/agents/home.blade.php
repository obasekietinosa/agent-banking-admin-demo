@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Address</th>
                        <th>City</th>
                        <th>State</th>
                        <th>Zip Code</th>
                        <th>Geolocation (Long, Lat)</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($agents as $agent)
                        <tr>
                            <td>{{ $agent->title }}</td>
                            <td>{{ $agent->description }}</td>
                            <td>{{ $agent->address }}</td>
                            <td>{{ $agent->city }}</td>
                            <td>{{ $agent->state }}</td>
                            <td>{{ $agent->zip_code }}</td>
                            <td>{{ "($agent->longitude, $agent->latitude)" }}</td>
                            <td>
                                <a href={{ route('admin.agents.show', $agent) }}>View</a> 
                                <a href={{ route('admin.agents.edit', $agent) }}>Edit</a> 
                                <a href={{ route('admin.agents.destroy', $agent) }}>Delete</a> 
                            </td>
                        </tr>          
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection