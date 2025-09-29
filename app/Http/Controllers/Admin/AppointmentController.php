<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Appointment;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    public function show(Appointment $appointment)
    {
        return view('admin.appointments.show', compact('appointment'));
    }
    
    public function update(Request $request, Appointment $appointment)
    {
        $validated = $request->validate([
            'status' => 'required|string',
        ]);

        $appointment->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Status janji temu berhasil diperbarui.');
    }
}