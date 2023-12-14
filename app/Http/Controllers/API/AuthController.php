<?php

namespace App\Http\Controllers\API;

use App\Models\User;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    // protected $firstName;
    public function __construct()
    {
        $this->middleware('auth:api', ['except' => ['login', 'register']]);
        // $this->middleware('guest')->except('logout');
        // $this->firstName = 'firstName';
    }

    // public function firstName(){
    //     return $this->firstName;
    // }

    public function login(Request $request)
    {
        // $request->validate([
        //     'empId' => 'required|string|max:10|min:6',
        //     'password' => 'required|string',
        // ]);
        $this->validate($request, [
            'empId' => 'required|string|max:10|min:6',
            'password' => 'required|string',
        ]);
        // $credentials = $request->only('email', 'password');
        $credentials = ['empId' => $request->empId, 'password' => $request->password];
        $token = Auth::attempt($credentials);


        if (!$token) {
            return response()->json([
                'message' => 'Unauthorized',
            ], 401);
        }

        $user = Auth::user();
        if ($user === null) {
            return response()->json([
                'message' => 'User doest not exist',
            ], 401);
        }
        return response()->json([
            'user' => $user,
            'authorization' => [
                'token' => $token,
                'type' => 'bearer',
            ]
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            'empId' => 'required|string|max:10',
            'lastName' => 'required|string|max:30',
            'firstName' => 'required|string|max:30',
            'middleName' => 'required|string|max:30',
            'password' => 'required|string|min:6',
            'status' => 'required|string|max:10',
            'dateHired' => 'required|date',
            'salary' => 'required',
            'notes' => 'required|string|max:255',
            'remark' => 'required|string|max:255',
        ]);

        $user = User::create([
            'empId' => $request->empId,
            'lastName' => $request->lastName,
            'firstName' => $request->firstName,
            'middleName' => $request->middleName,
            'password' => Hash::make($request->password),
            'status' => $request->status,
            'dateHired' => $request->dateHired,
            'salary' => $request->salary,
            'notes' => $request->notes,
            'remark' => $request->remark,
        ]);

        return response()->json([
            'message' => 'User created successfully',
            'user' => $user
        ], 200);
    }

    public function logout()
    {
        Auth::logout();
        return response()->json([
            'message' => 'Successfully logged out',
        ], 200);
    }

    public function refresh()
    {
        return response()->json([
            'user' => Auth::user(),
            'authorisation' => [
                'token' => Auth::refresh(),
                'type' => 'bearer',
            ]
        ], 200);
    }
}
