<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AdminPagesController extends Controller
{
    public function admin()
    {
        return view('admin.dashboard');
    }


    public function calendar()
    {
        $appointments = Appointment::where('status', 'accepted')->get();
        
        foreach ($appointments as $appointment) {
            // Convert time to 24-hour format
            $time = date('H:i', strtotime($appointment->time));
    
            $events[] = [
                'title' => $appointment->firstname . ' ' . $appointment->lastname,
                'start' => $appointment->date . 'T' . $time, // Use 24-hour format
                'color' => 'blue',
            ];
        }

        return response()->json($events);
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
