<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Appointment;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::where('status', 'pending')->paginate(5);
        return view('admin.pending', compact('appointments'));
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
        $request->validate([
            // Validate other necessary fields
            'firstname' => 'required',
            'lastname' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'location' => 'required',
            'date' => 'required|date|after_or_equal:today',
            'time' => 'required',
            'type' => 'required',
            'theme' => 'required',
            'package' => 'required',

            // add other fields as necessary
        ]);
    
        $appointment = new Appointment($request->all());
        $appointment->user_id = auth()->id(); // Set the user ID from the authenticated user
        $appointment->save();
    
        return redirect()->route('dashboard')->with('alert', 'Request Submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show($apt)
    {
        $appointment = Appointment::find($apt);
        return view('admin.accept')->with("appointment", $appointment);
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
        return redirect()->route('admin.appointment.show', $appointment->id)->with('success', 'Appointment status updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
