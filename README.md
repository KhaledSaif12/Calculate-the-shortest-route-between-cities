# City Distance Calculator

## Overview

City Distance Calculator is a web application built with Laravel that allows users to input cities and the distances between them. The application calculates and displays the shortest path between cities based on the entered distances.

## Features

- **Add Cities**: Allows users to add new cities to the system.
- **Add Distances**: Allows users to add distances between cities.
- **View Distances**: Displays a table of all distances between cities, sorted from the shortest to the longest.
- **Calculate Shortest Path**: Computes the shortest path between cities based on the entered distances.

## Requirements

- PHP >= 8
- Composer
- Laravel 8.x
- MySQL 

## Installation

1. **Clone the Repository**

   ```bash
   git clone https://github.com/yourusername/city-distance-calculator.git

# Welcome to the Calculate-the-shortest-route-between-cities wiki!
![image](https://github.com/user-attachments/assets/2a35f946-99c2-44ea-83ad-8dd2d56330fb)

# Add a New City
You can add a new city by clicking the button below. Simply enter the name of the city you want to add, and it will be stored in the system.

![image](https://github.com/user-attachments/assets/3aed0b5c-b9bd-4fb8-82c2-497729556b52)
# Add Distance Between Cities
To define the distance between two cities, use the button below. You will need to select the cities and provide the distance between them.
![image](https://github.com/user-attachments/assets/c559c8fe-d0f8-4043-af85-06300aa1c602)

# Show all possible distances between cities in a table with distances arranged from nearest to farthest.
![image](https://github.com/user-attachments/assets/d5493755-1a2a-4cd9-8ae6-21bdfeb8dff4)

Here’s a refined version of your README content:

---

# Shortest Path Finder

This application allows users to find the shortest path between two cities using Dijkstra's algorithm. Below is an overview of the main components and functionalities:

## View Overview

### 1. City Selection Form

- **Purpose**: Enables users to select a starting city and an ending city from dropdown menus.
- **Fields**: Includes two `<select>` dropdown lists and a submit button to initiate the path finding.

### 2. Possible Paths Display

- **Purpose**: Lists all possible paths between the selected cities along with the total distance for each path.
- **Display**: Presented in a table format with columns for the path number, the path itself, and the distance.

### 3. Shortest Path Display

- **Purpose**: Shows the shortest path between the selected start and end cities, including the total distance.
- **Condition**: Displays the path if a valid route is found. If no path exists, a message indicating "No path found" is shown.

## How to Use

1. **Select Cities**:
   - Choose the starting and ending cities from the dropdown lists.

2. **Find Paths**:
   - Click the "Find Shortest Path" button to see all possible paths and the shortest path.

3. **View Results**:
   - Possible paths and the shortest path will be displayed, including the distance for each.

![image](https://github.com/user-attachments/assets/aecf057c-0e63-4463-bc9d-fb806d79ad42)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[WebReinvent](https://webreinvent.com/)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Jump24](https://jump24.co.uk)**
- **[Redberry](https://redberry.international/laravel/)**
- **[Active Logic](https://activelogic.com)**
- **[byte5](https://byte5.de)**
- **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
