<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::orderBy('title')->get();

        return view('courses.index', [
            'courses' => $courses,
        ]);
    }

    public function create()
    {
        return view('courses.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:3',
            'description' => 'required',
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;
        $course->active = $request->has('active') ? 1 : 0;
        $course->save();

        return redirect('/courses');
    }

    public function toggle($id)
    {
        $course = Course::findOrFail($id);

        $course->active = !$course->active;
        $course->save();

        return redirect('/courses');
    }
}
