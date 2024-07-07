<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\PurchasedCourse;

class CourseController extends Controller
{
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('front.course_details', compact('course'));
    }

    public function videoContent($course_id)
    {
        $course = Course::findOrFail($course_id);
        return view('front.video_content', compact('course'));
    }

    public function index()
    {
        $courses = Course::all();
        return view('front.courses', compact('courses'));
    }

    public function buy($id)
    {
        $course = Course::findOrFail($id);

        if ($course->user_id === auth()->user()->id) {
            return redirect()->route('profile.show', $course->id)->with('error', 'You cannot purchase your own course!');
        }

        $alreadyPurchased = PurchasedCourse::where('course_id', $course->id)
                                            ->where('user_id', auth()->user()->id)
                                            ->exists();

        if ($alreadyPurchased) {
            return redirect()->route('courses.show', $course->id)->with('error', 'You have already purchased this course!');
        }

        $alreadyPurchasedVideo = PurchasedCourse::whereHas('course', function ($query) use ($course) {
                                        $query->where('video_url', $course->video_url);
                                    })
                                    ->where('user_id', auth()->user()->id)
                                    ->exists();

        if ($alreadyPurchasedVideo) {
            return redirect()->route('profile.show', $course->id)->with('error', 'You have already purchased this video course!');
        }

        PurchasedCourse::create([
            'course_id' => $course->id,
            'user_id' => auth()->user()->id,
        ]);

        return redirect()->route('profile.show', $course->id)->with('success', 'Course purchased successfully!');
    }
}
