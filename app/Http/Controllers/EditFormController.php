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
    $alertMessages = [];

    // Check if any returned appointments are found
    if ($returnedAppointments->count() > 0) {
        foreach ($returnedAppointments as $appointment) {
            // Assuming you have some way to identify the user associated with the appointment
            $user = $appointment->user;

            // Build the alert message
            $alertMessage = "Your appointment with ID " . $appointment->id . " has been returned.";

            // Include reason for rejection if available
            if ($appointment->reason_for_return) {
                $alertMessage .= " Reason: " . $appointment->reason_for_return;
            }

            $alertMessages[] = $alertMessage;
        }
    }

    // Pass the alert messages to the view
    return view('client.dashboard', compact('alertMessages'));
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
