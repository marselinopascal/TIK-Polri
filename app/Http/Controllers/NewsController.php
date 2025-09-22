<?php
namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi input dari form
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:100',
            'status' => 'required|string|in:Draft,Published',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validasi gambar
        ]);

        // Proses upload gambar jika ada
        if ($request->hasFile('image')) {
            // Simpan gambar ke public/storage/news_images dan dapatkan path-nya
            $imagePath = $request->file('image')->store('news_images', 'public');
            $validated['image'] = $imagePath;
        }

        // Buat berita baru di database
        News::create($validated);

        // Kembali ke dashboard dengan pesan sukses
        return back()->with('success', 'Berita berhasil ditambahkan!');
    }
}