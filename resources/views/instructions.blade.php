@extends('layout')

@section('content')
    <h2>System Instructions</h2>

    <p>Welcome to the City Distance and Path System! Below is a guide on how to use the system along with buttons for each operation.</p>

    <h3>1. Add a New City</h3>
    <p>You can add a new city by clicking the button below. Simply enter the name of the city you want to add, and it will be stored in the system.</p>
    <a href="{{ url('/cities') }}" class="btn btn-primary mb-3">Add City</a>

    <h3>2. Add Distance Between Cities</h3>
    <p>To define the distance between two cities, use the button below. You will need to select the cities and provide the distance between them.</p>
    <a href="{{ url('/distances') }}" class="btn btn-primary mb-3">Add Distance</a>

    <h3>3. Calculate the Shortest Path</h3>
    <p>To calculate the shortest path between two cities, click the button below. Select the starting and destination cities, and the system will calculate the shortest route.</p>
    <a href="{{ url('/shortest-path') }}" class="btn btn-primary mb-3">Calculate Shortest Path</a>

    <h3>4. View All Cities</h3>
    <p>If you want to view a list of all cities in the system, click the button below.</p>
    <a href="{{ url('/cities') }}" class="btn btn-secondary mb-3">View Cities</a>

    <h3>5. View All Distances</h3>
    <p>If you want to view all defined distances between cities, click the button below.</p>
    <a href="{{ url('/distances') }}" class="btn btn-secondary mb-3">View Distances</a>

@endsection
