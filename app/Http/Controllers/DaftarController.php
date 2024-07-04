<?php

namespace App\Http\Controllers;

use App\Models\Beasiswa;
use App\Models\Semester;
use App\Models\Pendaftar;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class DaftarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Menampilkan halaman daftar dengan data beasiswa dan semester
        return view('daftar', [
            'beasiswas' => Beasiswa::all(),
            'semesters' => Semester::all(),
            'mahasiswas' => Mahasiswa::all(),
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
            'semester' => 'required',
            'ipk' => 'required',
            'beasiswa' => 'required',
            'berkas' => 'file | mimes:pdf,jpg,png',
        ]);

        // Menyimpan status ajuan menjadi 'Belum diverifikasi'
        $validated['status_ajuan'] = 'Belum diverifikasi';

        // Menyimpan berkas yang diunggah
        $validated['berkas'] = $request->file('berkas')->storeAs('berkas', time() . '.' . $request->file('berkas')->extension());

        // Menyimpan data pendaftar ke dalam database
        Pendaftar::create($validated);

        // Redirect ke halaman daftar dengan pesan sukses
        $data = Pendaftar::latest()->first();
        return redirect()->route('hasil')->with('data', $data);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
