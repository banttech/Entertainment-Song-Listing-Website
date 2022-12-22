<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $songs = DB::table('songs')->latest()->paginate(10);
        $pageTitle = 'Dashboard';
        return view('admin.dashboard.index', compact('songs', 'pageTitle'));
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $search_by = $request->get('search_by');
        $sort_by = $request->get('sort_by');

        $songs = DB::table('songs')
            ->where($search_by, 'like', '%' . $search . '%')
            ->orderBy('id', $sort_by)
            ->paginate(10);

        $pageTitle = 'Dashboard';
        return view('admin.dashboard.index', compact('songs', 'pageTitle'));
    }
    // public function index()
    // {
        
    //     return view('admin.dashboard.index');
    // }
}
