<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\ContactMessage;
use App\Models\Course;
use App\Models\PurchasedCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage; // Add this line

class UsersController extends Controller
{
    // Show sign-up form
    public function create()
    {
        return view('front.Sign_up');
    }

    // Store new user in database
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'phone_number' => 'required',
            'password' => 'required|min:8'
        ]);

        Users::create([
            'username' => $request->username,
            'email' => $request->email,
            'gender' => $request->gender,
            'phone_number' => $request->phone_number,
            'password' => Hash::make($request->password),
        ]);

        return redirect('/login')->with('success', 'User created successfully!');
    }

    // Show login form
    public function showLoginForm()
    {
        return view('front.Sign_in');
    }

    // Handle login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials, $request->filled('remember'))) {
            return redirect('/home');
        }

        return back()->withErrors([
            'email' => 'Incorrect email or password.',
        ]);
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    // Show user profile
    public function showProfile()
    {
        if (Auth::check()) {
            $user = Auth::user();
            // Fetch courses associated with the authenticated user
            $courses = $user->courses; // This assumes the relationship is defined correctly in User model
            return view('front.profile', compact('user', 'courses'));
        } else {
            return redirect('/login')->with('error', 'Please log in to view your profile.');
        }
    }

    // Update user profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'gender' => 'required|string',
            'phone_number' => 'required|string|max:15',
        ]);

        $user = Auth::user();

        $user->username = $request->username;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;

        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            $imagePath = $image->storePublicly('profile_images', 'public');
            $user->profile_image = $imagePath;
        }

        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
            'user' => $user
        ]);
    }

    // Show contact form
    public function showContactForm()
    {
        return view('contact');
    }

    // Handle contact form submission
    public function sendContactForm(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->route('login')->with('error', 'You must be logged in to send a message.');
        }

        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone_number' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        ContactMessage::create([
            'user_id' => Auth::id(),
            'username' => $request->username,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'message' => $request->message,
        ]);

        return redirect()->back()->with('success', 'Message sent successfully!');
    }

    // Show all contact messages (for admin)
    public function showMessages()
    {
        $messages = ContactMessage::all();
        return view('admin.message', compact('messages'));
    }
}
