<?php

namespace App\Http\Controllers;

use App\Models\Desa;
use App\Models\Posyandu;
use App\DataTables\PosyanduDataTable;
use App\Http\Requests\StorePosyanduRequest;
use App\Http\Requests\UpdatePosyanduRequest;

class PosyanduController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PosyanduDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('unit_kesehatan.posyandu.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $desa = Desa::get();
        $posyandu = new Posyandu();
        return view('unit_kesehatan.posyandu.posyandu-action', compact('desa','posyandu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePosyanduRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePosyanduRequest $request)
    {
        Posyandu::create($request->all());

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menambahkan Data Posyandu'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function show(Posyandu $posyandu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function edit(Posyandu $posyandu)
    {
        $desa = Desa::get();
        return view('unit_kesehatan.posyandu.posyandu-action', compact('posyandu', 'desa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePosyanduRequest  $request
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePosyanduRequest $request, Posyandu $posyandu)
    {
        $posyandu->nama_posyandu = $request->nama_posyandu;
        $posyandu->rw = $request->rw;
        $posyandu->id_desa = $request->id_desa;
        $posyandu->save();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Mengubah Data Posyandu'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posyandu  $posyandu
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posyandu $posyandu)
    {
        $posyandu->delete();
        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menghapus Data Posyandu'
        ]);
    }
}
