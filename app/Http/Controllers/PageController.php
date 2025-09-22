<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function news()
    {
        // Data ini bisa Anda pindahkan ke database nanti
        $newsData = collect([
            ['id' => 1, 'title' => 'Peluncuran Sistem Keamanan Siber Terbaru POLRI', 'excerpt' => 'TIK POLRI meluncurkan sistem keamanan siber generasi terbaru yang mampu mendeteksi dan mencegah serangan cyber dengan tingkat akurasi 99.8%.', 'category' => 'keamanan', 'date' => '2024-01-15'],
            ['id' => 2, 'title' => 'Implementasi AI dalam Sistem Kepolisian', 'excerpt' => 'TIK POLRI mengintegrasikan teknologi AI untuk meningkatkan efisiensi operasional kepolisian di seluruh Indonesia.', 'category' => 'teknologi', 'date' => '2024-01-14'],
            ['id' => 3, 'title' => 'Pelatihan Keamanan Siber untuk Personel POLRI', 'excerpt' => 'Program pelatihan komprehensif untuk meningkatkan kemampuan personel dalam menghadapi ancaman siber.', 'category' => 'pelatihan', 'date' => '2024-01-13'],
        ]);

        return view('pages.news', [
            'featured_news' => $newsData->first(),
            'latest_news' => $newsData->slice(1)
        ]);
    }

    public function consultation()
    {
        return view('pages.consultation');
    }
}