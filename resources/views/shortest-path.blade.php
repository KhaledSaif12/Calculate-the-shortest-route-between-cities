@extends('layout')

@section('content')
    <h2>Find Shortest Path</h2>

    <form action="{{ url('/shortest-path') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="start_city_id">Start City</label>
            <select name="start_city_id" id="start_city_id" class="form-control" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="end_city_id">End City</label>
            <select name="end_city_id" id="end_city_id" class="form-control" required>
                @foreach($cities as $city)
                    <option value="{{ $city->id }}">{{ $city->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Find Shortest Path</button>
    </form>

    @if(isset($allPaths))
        <h3>Possible Paths:</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Path</th>
                    <th>Distance (km)</th>
                </tr>
            </thead>
            <tbody>
                @foreach($allPaths as $index => $path)
                    @php
                        $totalDistance = 0;
                        $pathString = '';
                        for ($i = 0; $i < count($path) - 1; $i++) {
                            $from = $path[$i];
                            $to = $path[$i + 1];
                            $distance = $graph[$from][$to] ?? 0;
                            $totalDistance += $distance;
                            $pathString .= \App\Models\City::find($from)->name . ' -> ';
                        }
                        $pathString .= \App\Models\City::find(end($path))->name;
                    @endphp
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $pathString }}</td>
                        <td>{{ $totalDistance }} km</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>Shortest Path:</h3>
        @if($shortestPath['distance'] < INF)
            <p>Path:
                @foreach($shortestPath['path'] as $cityId)
                    {{ \App\Models\City::find($cityId)->name }} @if (!$loop->last) -> @endif
                @endforeach
            </p>
            <p>Distance: {{ $shortestPath['distance'] }} km</p>
        @else
            <p>No path found.</p>
        @endif
    @endif
@endsection
