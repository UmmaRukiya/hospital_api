<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Http\Controllers\Api\BaseController;

class ScheduleController extends BaseController
{
    public function index( Request $request){
        // Return all schedules with their related doctor, day, and shift
        $data = Schedule::with('doctor', 'day', 'shift');
        if($request->doctor_id)
            $data=$data->where('doctor_id', $request->doctor_id);

        $data=$data->get();
        
        return $this->sendResponse($data, "Schedule data retrieved successfully.");
    }

    public function store(Request $request){
        // Validate the request data
        $validated = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day_id' => 'required|array', // Validate that day_id is an array
            'shift_id' => 'required|exists:shifts,id',
            'status' => 'required|numeric',
        ]);

        // Loop through each day and create separate schedule entries
        foreach ($validated['day_id'] as $dayId) {
            // Create a new schedule for each selected day
            Schedule::create([
                'doctor_id' => $validated['doctor_id'],
                'day_id' => $dayId,  // Store individual day
                'shift_id' => $validated['shift_id'],
                'status' => $validated['status'],
            ]);
        }

        return $this->sendResponse([], "Schedule created successfully.");
    }

    public function show(Schedule $schedule){
        // Return a specific schedule with related data
        return $this->sendResponse($schedule, "Schedule details retrieved successfully.");
    }

    public function update(Request $request, $id){
        // Validate the request data
        $validated = $request->validate([
            'doctor_id' => 'required|exists:doctors,id',
            'day_id' => 'required|array', // Validate that day_id is an array
            'shift_id' => 'required|exists:shifts,id',
            'status' => 'required|numeric',
        ]);

        // Update the schedule record by looping through the selected days
        // Here we would first delete existing schedule for the given id (if needed), and then create new ones
        $existingSchedules = Schedule::where('doctor_id', $validated['doctor_id'])
            ->where('id', $id)
            ->delete();

        // Create a new schedule record for each selected day
        foreach ($validated['day_id'] as $dayId) {
            Schedule::create([
                'doctor_id' => $validated['doctor_id'],
                'day_id' => $dayId,  // Store each individual day
                'shift_id' => $validated['shift_id'],
                'status' => $validated['status'],
            ]);
        }

        return $this->sendResponse([], "Schedule updated successfully.");
    }

    public function destroy(Schedule $schedule)
    {
        // Delete the specific schedule
        $schedule->delete();
        return $this->sendResponse([], "Schedule deleted successfully.");
    }
}
