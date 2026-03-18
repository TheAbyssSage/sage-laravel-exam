@extends('layout')

@section('title', 'New course')

@section('content')
<h2 class="h4 mb-3">Add a new course</h2>

<form method="POST" action="/courses">
    @csrf

    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input
            type="text"
            id="title"
            name="title"
            class="form-control"
            value="{{ old('title') }}"
            required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea
            id="description"
            name="description"
            class="form-control"
            rows="4"
            required>{{ old('description') }}</textarea>
    </div>

    <div class="form-check mb-3">
        <input
            type="checkbox"
            id="active"
            name="active"
            class="form-check-input"
            {{ old('active') ? 'checked' : '' }}>
        <label for="active" class="form-check-label">
            Active course
        </label>
    </div>

    <button type="submit" class="btn btn-primary">
        Save
    </button>

    <a href="/courses" class="btn btn-link">
        Cancel
    </a>
</form>
@endsection