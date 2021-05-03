<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $path = $request->path();

        if($path == 'admin/users'){
            $users = User::all();
            return view($path, compact('users'));
        }

        return view($path);
    }
}
