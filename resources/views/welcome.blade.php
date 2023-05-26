@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <table class="table table-striped table-hover">
                    <caption>Earth Train Table @2023</caption>
                    <thead class="thead-dark">
                        <tr>
                            <th>Company</th>
                            <th>Departue Station</th>
                            <th>Destination Station</th>
                            <th>Departue</th>
                            <th>Arrive</th>
                            <th>Train Code</th>
                            <th>Train Name</th>
                            <th>Train Category</th>
                            <th>Train Type</th>
                            <th>Number Carriages</th>
                            <th>In Time</th>
                            <th>Delayed</th>
                            <th>Cancelled</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($trains as $train)
                            <tr>
                                <td>{{ $train->company }}</td>
                                <td>{{ $train->location_start }}</td>
                                <td>{{ $train->location_end }}</td>
                                <td>{{ $train->start_trip }}</td>
                                <td>{{ $train->end_trip }}</td>
                                <td>{{ $train->train_code }}</td>
                                <td>{{ $train->train_name }}</td>
                                <td>{{ $train->train_category }}</td>
                                <td>{{ $train->train_type }}</td>
                                <td>{{ $train->number_carriages }}</td>
                                <td>{{ $train->in_time ? 'Yes' : 'No' }}</td>
                                <td>{{ $train->delayed ? 'Yes' : 'No' }}</td>
                                <td>{{ $train->cancelled ? 'Yes' : 'No' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
