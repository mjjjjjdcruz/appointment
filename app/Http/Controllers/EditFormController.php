<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Appointment;

class EditFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $returnedAppointments = Appointment::where('status', 'returned')->get();
        $alertMessage = '';

        foreach ($returnedAppointments as $appointment) {
            // Assuming you have some way to identify the user associated with the appointment
            $user = $appointment->user;

            // Build the alert message
            $alertMessage .= "Your appointment with ID ".$appointment->id." has been returned.\\n";
        }

        // Pass the alert message to the view
        return view('client.dashboard', compact('alertMessage'));
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
