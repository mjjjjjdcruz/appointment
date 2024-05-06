<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function manager()
    {
        return view('manager.dashboard');
    }
    
    public function client()
    {
        return view('client.dashboard');
    }

}
