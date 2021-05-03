<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
        echo "<script>setTimeout(function(){ window.location.href = 'http://127.0.0.1:8000/admin/dashboard'; }, 3000);</script>";
        return view('admin.home');
    }
}
