<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        $pageTitle = 'Manage Users';
        $users = User::where('is_admin', 0)->paginate(10);
        return view('admin.users.index', compact('pageTitle', 'users'));
    }

    public function delete($id)
    {
        $user = User::where('id', $id)->first();
        $user->delete();
        return redirect()->back()->with('success', 'User deleted successfully');
    }

    public function ban($id)
    {
        $user = User::where('id', $id)->first();
        $user->is_ban = 1;
        $user->save();
        return redirect()->back()->with('success', 'User banned successfully');
    }

    public function unban($id)
    {
        $user = User::where('id', $id)->first();
        $user->is_ban = 0;
        $user->save();
        return redirect()->back()->with('success', 'User unbanned successfully');
    }
}
