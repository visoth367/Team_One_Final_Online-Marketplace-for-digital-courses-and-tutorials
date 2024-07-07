<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\PurchasedCourse;

class CourseController extends Controller
{
    // Method to show detailed course information
    public function show($id)
    {
        $course = Course::findOrFail($id);

        // Example: Return view with course details
        return view('front.course_details', compact('course'));
    }

    // Method to handle video content display
    public function videoContent($course_id)
    {
        $course = Course::findOrFail($course_id);

        // Example: Return view with video content or related details
        return view('front.video_content', compact('course'));
    }

    // Method to display form for creating a new course
    public function create()
    {
        return view('front.uploadPage');
    }

    // Method to store a newly created course
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'required|mimetypes:video/mp4|max:204800', // max 200MB
        ]);

        // Handle image upload
        $imagePath = $request->file('image')->store('uploads/images', 'public');

        // Handle video upload
        $videoPath = $request->file('video')->store('uploads/videos', 'public');

        // Save course to database
        $course = Course::create([
            'title' => $request->title,
            'thumbnail' => $request->thumbnail,
            'description' => $request->description,
            'price' => $request->price,
            'image_url' => '/storage/' . $imagePath,
            'video_url' => '/storage/' . $videoPath,
            'rating' => 0,
            'user_id' => auth()->user()->id, // Associate the course with the authenticated user
        ]);

        // Redirect back with success message
        return redirect()->back()->with('success', 'Course created successfully!');
    }

    // Method to display form for editing a course
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('front.edit_course', compact('course'));
    }

    // Method to update an existing course
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string',
            'thumbnail' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'video' => 'nullable|mimetypes:video/mp4|max:204800',
        ]);

        $course = Course::findOrFail($id);

        // Handle image update if new image is provided
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('uploads/images', 'public');
            $course->image_url = '/storage/' . $imagePath;
        }

        // Handle video update if new video is provided
        if ($request->hasFile('video')) {
            $videoPath = $request->file('video')->store('uploads/videos', 'public');
            $course->video_url = '/storage/' . $videoPath;
        }

        // Update other course details
        $course->title = $request->title;
        $course->thumbnail = $request->thumbnail;
        $course->description = $request->description;
        $course->price = $request->price;
        $course->save();

        // Redirect to course details page with success message
        return redirect()->route('courses.show', $course->id)->with('success', 'Course updated successfully!');
    }

    // Method to delete a course
    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();

        return redirect()->route('profile.show')->with('success', 'Course deleted successfully!');
    }

    // Method to list all courses
    public function index()
    {
        $courses = Course::all();

        return view('front.courses', compact('courses'));
    }

    // Method to handle purchasing a course
    public function buy($id)
    {
        $course = Course::findOrFail($id);

        // Check if the authenticated user is the owner of the course
        if ($course->user_id === auth()->user()->id) {
            return redirect()->route('profile.show', $course->id)->with('error', 'You cannot purchase your own course!');
        }

        // Check if the course has already been purchased by the user
        $alreadyPurchased = PurchasedCourse::where('course_id', $course->id)
                                            ->where('user_id', auth()->user()->id)
                                            ->exists();

        if ($alreadyPurchased) {
            return redirect()->route('courses.show', $course->id)->with('error', 'You have already purchased this course!');
        }

        // Here you can implement a specific check for video courses
        // For example, check if the video URL is already purchased
        $alreadyPurchasedVideo = PurchasedCourse::whereHas('course', function ($query) use ($course) {
                                        $query->where('video_url', $course->video_url);
                                    })
                                    ->where('user_id', auth()->user()->id)
                                    ->exists();

        if ($alreadyPurchasedVideo) {
            return redirect()->route('profile.show', $course->id)->with('error', 'You have already purchased this video course!');
        }

        // Create a record in the PurchasedCourse table
        PurchasedCourse::create([
            'course_id' => $course->id,
            'user_id' => auth()->user()->id,
        ]);

        // Redirect the user to the purchased course page
        return redirect()->route('profile.show', $course->id)->with('success', 'Course purchased successfully!');
    }

    // Method to display purchased courses for the authenticated user
    public function purchasedCourses()
    {
        $purchasedCourses = PurchasedCourse::where('user_id', auth()->user()->id)
                                            ->with('course')
                                            ->get();

        return view('front.purchased_course', compact('purchasedCourses'));
    }

    // Method to display courses purchased by the authenticated user
    public function userCourses()
    {
        $courses = Course::whereHas('purchasedCourses', function ($query) {
            $query->where('user_id', auth()->user()->id);
        })->get();

        return view('front.purchased-course', compact('courses'));
    }

    // Method to purchase a course
    public function purchase($id)
    {
        $course = Course::findOrFail($id);

        // Create a record in the PurchasedCourse table
        PurchasedCourse::create([
            'course_id' => $course->id,
            'user_id' => auth()->user()->id,
        ]);

        // Redirect the user to the purchased course page
        return redirect()->route('courses.show', $course->id)->with('success', 'Course purchased successfully!');
    }
}
