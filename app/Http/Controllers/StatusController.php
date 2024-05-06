<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use App\Models\Appointment;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::where('status', 'accepted')->paginate(5);
        return view('admin.booked', compact('appointments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $apt)
    {
        $appointment = Appointment::find($apt);
        return view('admin.view-booked')->with("appointment", $appointment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $apt)
    {
        $appointment = Appointment::find($apt);
        return view('admin.accept')->with("appointment", $appointment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        
        // Validate request data if needed

        // Update appointment status to "accepted"
        $appointment->status = 'accepted';
        $appointment->save();

        // Redirect back or to a specific route
        return redirect("admin/pending");
    }

    public function returned(Request $request, string $appointment_id)
    {
        $appointment = Appointment::findOrFail($appointment_id);
        
        // Validate request data if needed

        // Update appointment status to "accepted"
        $appointment->status = 'returned';
        $appointment->save();


        return redirect("admin/pending");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
