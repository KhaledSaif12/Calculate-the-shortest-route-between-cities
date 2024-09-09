@extends('layout')

@section('content')
    <h2>Add City</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ url('/cities') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">City Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <button type="submit" class="btn btn-primary">Add City</button>
    </form>

    <h3 class="mt-5">List of Cities</h3>
    <ul class="list-group">
        @foreach($cities as $city)
            <li class="list-group-item">{{ $city->name }}</li>
        @endforeach
    </ul>
@endsection
