@extends('layout')

@section('content')
    <h2>List of City Distances</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>From City</th>
                <th>To City</th>
                <th>Distance (km)</th>
            </tr>
        </thead>
        <tbody>
            @foreach($distances as $index => $distance)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ optional($distance->fromCity)->name ?? 'Unknown City' }}</td>
                    <td>{{ optional($distance->toCity)->name ?? 'Unknown City' }}</td>
                    <td>{{ $distance->distance }} km</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
