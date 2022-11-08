<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Kecamatan;
use App\DataTables\DesaDataTable;
use App\Http\Requests\StoreDesaRequest;
use App\Http\Requests\UpdateDesaRequest;

class DesaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DesaDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('data_wilayah.desa.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kecamatan = Kecamatan::get();
        $desa = new Desa();
        return view('data_wilayah.desa.desa-action', compact('desa','kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDesaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDesaRequest $request)
    {
        Desa::create($request->all());

        return response()->json([
            'status' => 'sukses',
            'message' => 'Berhasil Menambahkan Data Desa'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function show(Desa $desa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function edit(Desa $desa)
    {
        $kecamatan = Kecamatan::get();
        return view('data_wilayah.desa.desa-action', compact('kecamatan', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDesaRequest  $request
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDesaRequest $request, Desa $desa)
    {
        $desa->nama_desa = $request->nama_desa;
        $desa->id_kecamatan = $request->id_kecamatan;
        $desa->save();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Mengubah Data Desa'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Desa  $desa
     * @return \Illuminate\Http\Response
     */
    public function destroy(Desa $desa)
    {
        $desa->delete();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menghapus Data Desa'
        ]);
    }
}
