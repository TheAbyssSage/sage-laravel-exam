@extends('layout')

@section('title', 'Courses')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-3">
    <h2 class="h4 mb-0">Courses</h2>
    <a href="/courses/create" class="btn btn-primary btn-sm">
        New course
    </a>
</div>

@if($courses->isEmpty())
<p>There are no courses yet.</p>
@else
<table class="table table-striped align-middle">
    <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Active</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($courses as $course)
        <tr>
            <td>{{ $course->title }}</td>
            <td>{{ $course->description }}</td>
            <td>
                @if($course->active)
                <span class="badge bg-success">Active</span>
                @else
                <span class="badge bg-secondary">Inactive</span>
                @endif
            </td>
            <td>
                <form
                    method="POST"
                    action="/courses/{{ $course->id }}/toggle"
                    class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-sm btn-outline-dark">
                        {{ $course->active ? 'Set inactive' : 'Set active' }}
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endif
@endsection