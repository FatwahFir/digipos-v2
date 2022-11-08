<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Keluarga;
use App\DataTables\KeluargaDataTable;
use App\Http\Requests\StoreKeluargaRequest;
use App\Http\Requests\UpdateKeluargaRequest;

class KeluargaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KeluargaDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('pasien.data_keluarga.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $keluarga = new Keluarga();
        $desa = Desa::get();

        return view('pasien.data_keluarga.keluarga-action', compact('keluarga', 'desa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKeluargaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKeluargaRequest $request)
    {
        Keluarga::create($request->all());

        return response()->json([
            'status' =>'Sukses',
            'message' => 'Berhasil Menambahkan Data Keluarga'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function show(Keluarga $keluarga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function edit(Keluarga $keluarga)
    {
        $desa = Desa::get();
        return view('pasien.data_keluarga.keluarga-action', compact('keluarga', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKeluargaRequest  $request
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKeluargaRequest $request, Keluarga $keluarga)
    {
        $keluarga->no_kk = $request->no_kk;
        $keluarga->nik_ayah = $request->nik_ayah;
        $keluarga->nik_ibu = $request->nik_ibu;
        $keluarga->nama_ayah = $request->nama_ayah;
        $keluarga->nama_ibu = $request->nama_ibu;
        $keluarga->alamat = $request->alamat;
        $keluarga->no_telp = $request->no_telp;
        $keluarga_status_ekonomi = $request->status_ekonomi;
        $keluarga->id_desa = $request->id_desa;
        $keluarga->save();

        return response()->json([
            'status' =>'Sukses',
            'message' => 'Berhasil Mengubah Data Keluarga'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Keluarga  $keluarga
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keluarga $keluarga)
    {
        $keluarga->delete();

        return response()->json([
            'status' =>'Sukses',
            'message' => 'Berhasil Menghapus Data Keluarga'
        ]);
    }
}
