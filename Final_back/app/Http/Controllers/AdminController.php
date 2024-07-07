<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User; 
use App\Models\Admin;
use App\Models\ContactMessage; 
use App\Models\Course;

class AdminController extends Controller
{

    // Show admin sign-up form
    public function showRegistrationForm()
    {
        return view('admin.sign_up');
    }

    // Handle admin registration
    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:admins,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('admin.login')->with('success', 'Admin account created successfully! Please login.');
    }

    // Show admin login form
    public function showLoginForm()
    {
        return view('admin.sign_in');
    }

    // Handle admin login
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            // Authentication passed
            return redirect()->intended('/admin/dashboard');
        }

        return back()->withErrors(['message' => 'Invalid credentials.']);
    }

    // Admin logout
    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('/admin/login');
    }

    // Show admin profile
    public function showProfile()
    {
        $admin = Auth::guard('admin')->user();
        return view('admin.profile', compact('admin'));
    }

    // Update admin profile
    public function updateProfile(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        // Retrieve the authenticated admin
        $admin = Auth::guard('admin')->user();

        // Update admin information from request inputs
        $admin->username = $request->username;
        $admin->gender = $request->gender;
        $admin->phone_number = $request->phone_number;

        // Handle profile image upload if provided
        if ($request->hasFile('profile_image')) {
            $image = $request->file('profile_image');
            
            // Store the new profile image
            $imagePath = $image->storePublicly('profile_images', 'public');
            
            // Update the admin's profile image URL or file path in the database
            $admin->profile_image = $imagePath;
        }

        // Save the updated admin model
        $admin->save();

        // Return a JSON response with success message and updated profile details
        return response()->json([
            'success' => true,
            'message' => 'Profile updated successfully',
            'admin' => $admin // Return the updated admin object if needed
        ]);
    }


    // Show all users (admin-only access)
    public function show()
    {
        $users = User::all(); // Fetch all users
        return view('admin.user', compact('users'));
    }

    // Edit user details (admin-only access)
    public function edit($id)
    {
        $user = User::findOrFail($id); // Find user by ID
        return view('admin.user_edit', compact('user'));
    }

    // Update user details (admin-only access)
    public function update(Request $request, $id)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'gender' => 'required',
            'phone_number' => 'required',
            'password' => 'nullable|min:8',
        ]);

        $user = User::findOrFail($id); // Find user by ID
        $user->username = $request->username;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->phone_number = $request->phone_number;

        if ($request->filled('password')) {
            $user->password = Hash::make($request->password);
        }

        $user->save();
        return redirect('/admin/user')->with('success', 'User updated successfully!');
    }

    // Delete user (admin-only access)
    public function destroy($id)
    {
        $user = User::findOrFail($id); // Find user by ID
        $user->delete(); // Delete the user
        return redirect('/admin/user')->with('success', 'User deleted successfully!');
    }

    // Show messages (example method, adjust as per your application)
    public function showMessages()
    {
        // Fetch all messages (example: assuming you have a Message model)
        $messages = ContactMessage::all();
        
        // Pass messages to the view
        return view('admin.message', compact('messages'));
    }
    public function showCourses()
    {
        $courses = Course::all(); // Fetch all courses
        return view('admin.courses', compact('courses'));
    }
}
