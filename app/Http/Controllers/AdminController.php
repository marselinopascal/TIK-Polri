<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Consultation;
use App\Models\News;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display the admin dashboard.
     */
    public function dashboard()
    {
        // Ambil semua data untuk ditampilkan di dashboard, diurutkan dari yang terbaru
        $news = News::latest()->get();
        $consultations = Consultation::latest()->get();
        $appointments = Appointment::latest()->get();

        // Kirim data ke view admin.dashboard
        return view('admin.dashboard', compact('news', 'consultations', 'appointments'));
    }
}