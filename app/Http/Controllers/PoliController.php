<?php

namespace App\Http\Controllers;

use App\Models\Poli;
use Illuminate\Http\Request;


class PoliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $polis = Poli::latest()->paginate(10); // Menampilkan 10 data per halaman
        return view('poli_index', compact('polis'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('poli_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->validate([
            'nama' => 'required',
            'biaya' => 'required',
            'keterangan' => 'required',
        ]);

        $poli = new Poli();
        $poli->fill($requestData);
        $poli->save();

        flash('Data berhasil disimpan')->success();

        return redirect()->route('poli.index');
    }
    // // Validasi data
    // $request->validate([
    //     'nama' => 'required|string|max:255',
    //     'biaya' => 'required|numeric',
    //     'keterangan' => 'nullable|string|max:255',
    // ]);

    // // Simpan data ke dalam database
    // Poli::create([
    //     'nama' => $request->nama,
    //     'biaya' => $request->biaya,
    //     'keterangan' => $request->keterangan,
    // ]);

    // // Redirect ke halaman index dengan pesan sukses
    // flash('Data berhasil disimpan')->success();
    // return back();
    //}

    /**
     * Display the specified resource.
     */
    public function show(Poli $poli)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Poli $poli)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Poli $poli)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poli = Poli::findOrfail($id);
        if ($poli->daftar->count() >= 1) {
            flash('Data tidak bisa dihapus karena sudah terkait dengan data pendaftaran')->error();
            return back();
        }

        $poli->delete();
        flash('Data sudah dihapus')->success();
        return back();
    }
}