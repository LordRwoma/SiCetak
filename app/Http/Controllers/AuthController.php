<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        // Untuk sementara tanpa autentikasi penuh
        session(['user_logged_in' => true]);
        session(['user_name' => 'User']);
        
        return redirect()->route('dashboard');
    }
    
    public function logout(Request $request)
    {
        session()->forget('user_logged_in');
        session()->forget('user_name');
        
        return redirect()->route('home');
    }
}