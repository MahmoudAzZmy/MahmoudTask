<?php

namespace Modules\AuthModule\App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Modules\UsersModule\App\Http\Model\User;
use Tymon\JWTAuth\Facades\JWTAuth;

class AuthApiController extends Controller
{
    // public function login(Request $request)
    // {
    //     $validatedData = Validator::make($request->all(), [
    //         'email'         => 'required|exists:users,email',

    //     ]);
    //     if ($validatedData->fails()) {
    //         $errors = [];
    //         return response()->json($validatedData->errors()->all(), 422);
    //     }
    //     $user = User::where('email', $request['email'])->first();
    //     if (Hash::check($request->password, $user->password)) {
    //         $authToken = $user->createToken('auth-token')->plainTextToken;
    //         $data['user'] = $user;
    //         $data['access_token'] = $authToken;
    //     } else {
    //         return response()->json([
    //             'message' => 'Invalid credentials'
    //         ], 422);
    //     }
    //     return response()->json($data, 201);
    // }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json([
                'message' => 'Invalid credentials'
            ], 422);
        } else {
            return response()->json(['data' => $credentials, 'token' => $token], 201);
        }
    }


    public function logout()
    {
        if (auth()) {
            auth()->logout();
            return response()->json([
                'message' => 'Success'
            ], 200);
        } else {
            return response()->json([
                'message' => 'Cant Logout'
            ], 422);
        }
    }
}
