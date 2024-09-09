@extends('layout')

@section('content')
    <h2>Calculate Shortest Path Between Cities</h2>
    <form action="{{ url('/shortest-path') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="start_city_id" class="form-label">Start City</label>
            <select class="form-control" id="start_city_id" name="start_city_id" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="end_city_id" class="form-label">End City</label>
            <select class="form-control" id="end_city_id" name="end_city_id" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Calculate</button>
    </form>

    @if(isset($shortestPath))
        <h3 class="mt-5">Shortest Path</h3>
        <p>
            The shortest path from {{ $startCity->name }} to {{ $endCity->name }} is:
        </p>
        <ul class="list-group">
            @foreach($shortestPath['path'] as $cityId)
                <li class="list-group-item">{{ \App\Models\City::find($cityId)->name }}</li>
            @endforeach
        </ul>
        <p>Total Distance: {{ $shortestPath['distance'] }} km</p>
    @endif
@endsection
