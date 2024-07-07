<?php

namespace App\Http\Controllers\API;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;

class CourseController extends Controller
{
    public function getCourses()
    {
        $courses = Course::all();
        return response()->json($courses, 200);
    }
}
