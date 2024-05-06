<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }
    public function calendar()
    {
        return view('admin.calendar');
    }
    public function booked()
    {
        return view('admin.booked');
    }
    public function pending()
    {
        return view('admin.pending');
    }
    public function reviews()
    {
        return view('admin.reviews');
    }
    public function returned()
    {
        return view('admin.returned');
    }
    public function users()
    {
        return view('admin.users');
    }
    public function editusertype(string $id){

        $user = User::find($id);
        return view('admin.edit-usertype')->with("user", $user);
    }
}
