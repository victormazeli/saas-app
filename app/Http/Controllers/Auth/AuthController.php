<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Resources\User\UserResource;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    // public function register(Request $request){
    //     $validatedData = $request->validate([
    //         'name' => 'required',
    //         'email' => 'email|required|unique:users',
    //         'password' => 'required|string|min:8',
    //         // 'confirm_password' => 'required|min:8|same:password',
    //     ]);

    //     $validatedData['password'] = bcrypt($request->password);

    //     $user = User::create($validatedData);

    //     return new UserResource($user);

    // }


    public function storeRegister(Request $request){
        $validatedData = $request->validate([
            'store_name' => 'required|max:55',
            'email' => 'email|required|unique:users',
            'password' => 'required|string|min:8|confirmed',
            // 'confirm_password' => 'required|min:8|same:password',
            'device_name' => 'required',
        ]);

        $validatedData['password'] = bcrypt($request->password);

        $user = User::create([
            'email'=> $validatedData['email'],
            'password'=> $validatedData['password']
        ]);

        $user->store()->create([
            'name' => $validatedData['store_name']
        ]);


       $token = $user->createToken($request->device_name)->plainTextToken;

       return response()->json(['user' => $user, 'token' => $token]);

    }


    public function storeLogin(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'device_name' => 'required',
        ]);
    
        $user = User::where('email', $request->email)->first();
    
        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }
    
        $token = $user->createToken($request->device_name)->plainTextToken;

        return response()->json(['user' => $user, 'token' => $token]);
    }

}
