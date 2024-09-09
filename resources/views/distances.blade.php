@extends('layout')

@section('content')
    <h2>Add Distance Between Cities</h2>
    <form action="{{ url('/distances') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="from_city_id" class="form-label">From City</label>
            <select class="form-control" id="from_city_id" name="from_city_id" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="to_city_id" class="form-label">To City</label>
            <select class="form-control" id="to_city_id" name="to_city_id" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="distance" class="form-label">Distance (km)</label>
            <input type="number" class="form-control" id="distance" name="distance" required>
        </div>

        <button type="submit" class="btn btn-primary">Add Distance</button>
    </form>

    <h3 class="mt-5">List of Distances</h3>
    <ul class="list-group">
        @foreach($distances as $distance)
            <li class="list-group-item">
                {{ $distance->fromCity->name }} to {{ $distance->toCity->name }} - {{ $distance->distance }} km
            </li>
        @endforeach
    </ul>
@endsection
