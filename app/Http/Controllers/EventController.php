<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\Appointment;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
         // Fetch appointments with accepted status
        $appointments = Appointment::where('status', 'accepted')->get();

        $events = [];

         // Format appointments for fullcalendar
        foreach ($appointments as $appointment) {
            $events[] = [
                'title' => $appointment->firstname . ' ' . $appointment->lastname,
                'start' => $appointment->date . 'T' . $appointment->time, // Combine date and time
                'color' => 'blue', // Optional: You can set a custom color for the event
            ];
        }

        return view('admin.calendar', compact('events'));
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
