<?php

namespace App\Http\Controllers;

use App\Models\Kecamatan;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\DataTables\PuskesmasDataTable;
use App\Http\Requests\StorePuskesmasRequest;
use App\Http\Requests\UpdatePuskesmasRequest;

class PuskesmasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PuskesmasDataTable $dataTable)
    {
        $this->authorize('read');
        return $dataTable->render('unit_kesehatan.puskesmas.index');   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $puskesmas = new Puskesmas();
        $kecamatan = Kecamatan::get();
        return view('unit_kesehatan.puskesmas.puskesmas-action', compact('puskesmas', 'kecamatan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePuskesmasRequest $request)
    {
        Puskesmas::create($request->all());

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menambahkan Data Puskesmas'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Puskesmas  $puskesmas
     * @return \Illuminate\Http\Response
     */
    public function show(Puskesmas $puskesmas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Puskesmas  $puskesmas
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $puskesmas = Puskesmas::findOrFail($id);
        $kecamatan = Kecamatan::get();
        return view('unit_kesehatan.puskesmas.puskesmas-action', compact('puskesmas', 'kecamatan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Puskesmas  $puskesmas
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePuskesmasRequest $request, $id)
    {
        $puskesmas = Puskesmas::findOrFail($id);
        $puskesmas->nama_puskesmas = $request->nama_puskesmas;
        $puskesmas->id_kecamatan = $request->id_kecamatan;
        $puskesmas->alamat = $request->alamat;
        $puskesmas->update();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Mengubah Data Puskesmas'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Puskesmas  $puskesmas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Puskesmas $puskesmas)
    {
        //
    }
}
