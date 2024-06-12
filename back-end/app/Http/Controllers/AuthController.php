<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('auth_token')->plainTextToken;
            return response()->json(['access_token' => $token, 'token_type' => 'Bearer', 'user' => $user]);
        } else {
            return response()->json(['error' => 'Invalid credentials'], 401);
        }
    }

    public function register(Request $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()->json(['access_token' => $token, 'token_type' => 'Bearer', 'user' => $user]);
    }

    public function logout(Request $request)
    {
        $user = $request->user();
        if ($user) {
            $user->tokens()->delete();
            return response()->json(['message' => 'Logged out successfully'], 200);
        } else {
            return response()->json(['message' => 'User not authenticated'], 401);
        }
    }
}