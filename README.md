# Laravel Course Manager

A simple Laravel application for managing courses with basic CRUD functionality.

## Features

- View all courses
- Create new courses
- Toggle courses between active/inactive status

## Requirements

- PHP 8.0 or higher
- Composer
- SQLite or MySQL database

## Installation

1. Clone the repository
2. Run `composer install`
3. Copy `.env.example` to `.env` and configure your database settings
4. Run `php artisan key:generate`
5. Run `php artisan migrate`
6. Start the development server with `php artisan serve`

## Usage

- Visit `/` or `/courses` to view all courses
- Click "New course" to add a course
- Toggle courses between active/inactive status

## Routes

- `GET /` - Show all courses
- `GET /courses` - Show all courses
- `GET /courses/create` - Show form to create a new course
- `POST /courses` - Store a new course
- `POST /courses/{id}/toggle` - Toggle course active status

## Structure

This project follows Laravel Exam Style Rules with:
- Plain, minimal Laravel implementation
- Basic MVC pattern (Routes → Controller → Model → View)
- No complex abstractions or unnecessary features
- Bootstrap styling via CDN
- Simple English throughout
