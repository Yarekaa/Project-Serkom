<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Beasiswa;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMahasiswaRequest;
use App\Http\Requests\UpdateMahasiswaRequest;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan halaman daftar dengan data beasiswa dan semester
        return view('daftarmahasiswa', [
            'beasiswas' => Beasiswa::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validasi data yang diterima
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required|email',
            'nomor_hp' => 'required',
        ]);

        // Menyimpan data mahasiswa ke dalam database
        Mahasiswa::create($validated);

        // Redirect ke halaman daftar dengan pesan sukses
        return redirect()->route('daftar')->with('success', 'Data mahasiswa berhasil disimpan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMahasiswaRequest $request, Mahasiswa $mahasiswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Mahasiswa $mahasiswa)
    {
        //
    }
}
