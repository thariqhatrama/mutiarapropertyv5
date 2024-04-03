<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('adminDashboard', [
            'artikels' => Artikel::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|min:3|max:255',
            'gambar' => 'required',
            'slug' => 'nullable|string',
            'subjudul' => 'nullable|string',
            'body' => 'required|string',
            'published_at' => 'required'
        ]);

        Artikel::create($validatedData);

        // $request->session()->flash('success', 'Registrasi Selesai! Silahkan Masuk');

        return redirect('/dashboard/admin')->with('success', 'Penambahan Artikel Berhasil!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Artikel $artikel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel, $id)
    {
        $artikel = Artikel::find($id);

        $artikel->delete();
        return redirect('dashboard/admin')->with('success', 'Artikel telah dihapus');
    }
}
