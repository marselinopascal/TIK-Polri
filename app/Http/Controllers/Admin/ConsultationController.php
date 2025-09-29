<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function show(Consultation $consultation)
    {
        return view('admin.consultations.show', compact('consultation'));
    }

    public function update(Request $request, Consultation $consultation)
    {
        $validated = $request->validate([
            'status' => 'required|string',
            'internal_notes' => 'nullable|string',
        ]);

        $consultation->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Status konsultasi berhasil diperbarui.');
    }
}