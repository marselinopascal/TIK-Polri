<?php

namespace App\Http\Controllers;
use App\Models\Consultation; 
use App\Models\News;
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
    
    public function storeConsultation(Request $request)
    {
        $validated = $request->validate([
            'fullName' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'institution' => 'required|string|max:255',
            'institutionType' => 'required|string',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'consultationDetails' => 'required|string',
        ]);

        Consultation::create([
            'name' => $validated['fullName'],
            'institution' => $validated['institution'],
            'type' => $validated['institutionType'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'details' => $validated['consultationDetails'],
            'status' => 'Baru', // Status default saat pertama kali dibuat
        ]);

        return back()->with('success', 'Permohonan konsultasi Anda telah berhasil dikirim! Tim kami akan segera meninjau.');
    }
     public function showNews(News $news)
    {
        // Pastikan hanya berita yang sudah di-publish yang bisa diakses
        if ($news->status !== 'Published') {
            abort(404);
        }

        // Ambil 3 berita lainnya sebagai "Berita Terkait"
        $relatedNews = News::where('status', 'Published')
                            ->where('id', '!=', $news->id)
                            ->latest()
                            ->take(3)
                            ->get();

        return view('pages.news-show', [
            'news' => $news,
            'relatedNews' => $relatedNews
        ]);
    }
}