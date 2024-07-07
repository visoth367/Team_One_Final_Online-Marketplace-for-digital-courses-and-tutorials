<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function getProfile()
    {
        $user = Auth::user();
        return response()->json($user, 200);
    }

    public function updateProfile(Request $request)
    {
        $request->validate([
            'username' => 'sometimes|required|string|max:255',
            'gender' => 'sometimes|required|string|max:255',
            'phone_number' => 'sometimes|required|string|max:20',
        ]);

        $user = Auth::user();

        if ($request->has('username')) {
            $user->username = $request->username;
        }

        if ($request->has('gender')) {
            $user->gender = $request->gender;
        }

        if ($request->has('phone_number')) {
            $user->phone_number = $request->phone_number;
        }

        $user->save();

        return response()->json(['message' => 'Profile updated successfully', 'user' => $user], 200);
    }
}