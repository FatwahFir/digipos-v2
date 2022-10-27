<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\DataTables\KecamatanDatatable;
use App\Http\Requests\StoreKecamatanRequest;
use App\Http\Requests\UpdateKecamatanRequest;

class KecamatanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(KecamatanDatatable $dataTable)
    {
        $this->authorize('read');
        return $dataTable->render('data_wilayah.kecamatan.index');
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data_wilayah.kecamatan.kecamatan-action', ['kecamatan' => new Kecamatan()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKecamatanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreKecamatanRequest $request)
    {
        Kecamatan::create($request->all());

        return response()->json([
            'status' => 'sukses',
            'message' => 'Berhasil Menambahkan Data Kecamatan'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kecamatan $kecamatan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kecamatan $kecamatan)
    {
    
        return view('data_wilayah.kecamatan.kecamatan-action', compact('kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKecamatanRequest  $request
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateKecamatanRequest $request, Kecamatan $kecamatan)
    {
        $kecamatan->nama_kecamatan = $request->nama_kecamatan;
        $kecamatan->kodepos = $request->kodepos;
        $kecamatan->save();

        return response()->json([
            'status' => 'sukses',
            'message' => 'Berhasil Mengubah Data Kecamatan'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kecamatan  $kecamatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();

        return response()->json([
            'status' => 'sukses',
            'message' => 'Berhasil Menghapus Data Kecamatan'
        ]);
    }
}
