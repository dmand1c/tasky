<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;

class RegisterController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function index()
    {
        if (auth()->user()->admin) {
            return view('auth.register');
        } else {
            return redirect()->route('tasks');
        }
         
    }

    /* Register new user and redirect */
    public function registerUser(Request $request)
    {
        /* Validate data from registration form */
        $this->validate($request, [
            'name' => ['required', 'max:255'],
            'username' => ['required', 'max:255'],
            'email' => ['required', 'email'],
            'password' => ['required', 'confirmed', 'min:6'],
        ]);

        /* Create new user */
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'admin' => 0
        ]);

        

        return redirect('register');
    }
}
