<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        $user = User::find(auth()->user()->id);
        $pageTitle = 'Edit Profile';
        return view('admin.profile.edit', compact('user', 'pageTitle'));
    }

    public function update(Request $request)
    {
        // validate
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
        // update password if entered
        if ($request->password) {
            $request->validate([
                'password' => 'required|min:6|confirmed',
            ]);
            $user = User::find(auth()->user()->id);
            $user->password = Hash::make($request->password);
            $user->save();
        }else{
            $user = User::find(auth()->user()->id);
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();
        }
       
    }
}
