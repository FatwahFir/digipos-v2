<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JenisImunisasi;
use App\DataTables\JenisImunisasiDataTable;
use App\Http\Requests\StoreJenisImunisasiRequest;
use App\Http\Requests\UpdateJenisImunisasiRequest;

class JenisImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(JenisImunisasiDataTable $dataTable)
    {
        $this->authorize('read');
        return $dataTable->render('imunisasi.jenis_imunisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jenisImunisasi = new JenisImunisasi();
        return view('imunisasi.jenis_imunisasi.jenis-imunisasi-action', compact('jenisImunisasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreJenisImunisasiRequest $request)
    {
        JenisImunisasi::create($request->all());

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menambahkan Data Jenis Imunisasi'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisImunisasi  $jenisImunisasi
     * @return \Illuminate\Http\Response
     */
    public function show(JenisImunisasi $jenisImunisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisImunisasi  $jenisImunisasi
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisImunisasi $jenisImunisasi)
    {
        return view('imunisasi.jenis_imunisasi.jenis-imunisasi-action', compact('jenisImunisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JenisImunisasi  $jenisImunisasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateJenisImunisasiRequest $request, JenisImunisasi $jenisImunisasi)
    {
        $jenisImunisasi->nama_imunisasi = $request->nama_imunisasi;
        $jenisImunisasi->update();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Mengubah Data Jenis Imunisasi'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisImunisasi  $jenisImunisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisImunisasi $jenisImunisasi)
    {
        $jenisImunisasi->delete();
        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menghapus Data Jenis Imunisasi'
        ]);

    }
}
