<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
            return redirect()->route('dashboard.index');
        }  
        $user = Auth::user();
        return view('admin.login.index', compact('user'));
        
    }
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
           
            if (Auth::user()->is_admin == '1') {
                return redirect()->route('songs.index');
            } else {
                Auth::logout();
                return redirect()->back()->with('error', 'Invalid Credentials');
            }
        }else {
            return redirect()->back()->with('error', 'Invalid Credentials');
        }

    }
}
