<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     * (Biasanya digunakan untuk halaman index, kita gunakan dashboard sebagai index)
     */
    public function index()
    {
        // Arahkan ke dashboard utama sebagai halaman index
        return redirect()->route('admin.dashboard');
    }

    /**
     * Show the form for creating a new resource.
     * Menampilkan halaman formulir untuk menambah berita baru.
     */
    public function create()
    {
        return view('admin.news.create');
    }

    /**
     * Store a newly created resource in storage.
     * Menyimpan data dari formulir 'create' ke database.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'status' => 'required|string|in:Draft,Published',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Validasi gambar
        ]);

        if ($request->hasFile('image')) {
            // Simpan gambar ke public/storage/news_images dan dapatkan path-nya
            $validated['image'] = $request->file('image')->store('news_images', 'public');
        }

        News::create($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     * (Tidak digunakan saat ini, karena detail bisa dilihat di halaman publik)
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * Menampilkan halaman formulir untuk mengedit berita yang sudah ada.
     */
    public function edit(News $news)
    {
        return view('admin.news.edit', compact('news'));
    }

    /**
     * Update the specified resource in storage.
     * Memperbarui data di database dari formulir 'edit'.
     */
    public function update(Request $request, News $news)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string',
            'status' => 'required|string|in:Draft,Published',
            'summary' => 'nullable|string',
            'content' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($news->image) {
                Storage::disk('public')->delete($news->image);
            }
            // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('news_images', 'public');
        }

        $news->update($validated);

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     * Menghapus berita dari database.
     */
    public function destroy(News $news)
    {
        // Hapus gambar dari storage jika ada
        if ($news->image) {
            Storage::disk('public')->delete($news->image);
        }
        
        $news->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Berita berhasil dihapus!');
    }
}