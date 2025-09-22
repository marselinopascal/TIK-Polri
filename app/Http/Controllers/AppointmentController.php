<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppointmentController extends Controller
{
    public function index()
    {
        /** @var \App\Models\User $user */
        $user = Auth::user();
        
        $appointments = $user->appointments()->latest()->get();
        
        return view('appointment.index', compact('appointments'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'date' => 'required|date',
            'purpose' => 'required|string|max:1000',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        $user->appointments()->create([
            'name' => $user->name, // Ambil nama dari user yang login
            'date' => $request->date,
            'purpose' => $request->purpose,
            'status' => 'Menunggu',
        ]);

        return back()->with('success', 'Janji temu berhasil dibuat!');
    }

    public function destroy(Appointment $appointment)
    {
        // Pastikan hanya pemilik janji temu yang bisa menghapus
        if ($appointment->user_id !== Auth::id()) {
            abort(403, 'AKSI TIDAK DIIZINKAN');
        }

        $appointment->delete();

        return back()->with('success', 'Janji temu berhasil dibatalkan.');
    }
}