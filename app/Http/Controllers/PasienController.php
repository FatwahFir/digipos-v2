<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use App\Models\Keluarga;
use App\Models\Posyandu;
use Illuminate\Http\Request;
use App\DataTables\PasienDataTable;
use App\Http\Requests\StorePasienRequest;
use App\Http\Requests\UpdatePasienRequest;

class PasienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PasienDataTable $dataTable)
    {
        $this->authorize('read');
        return $dataTable->render('pasien.data_pasien.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $posyandu = Posyandu::get();
        $pasien = new Pasien();
        $keluarga = Keluarga::get();
        return view('pasien.data_pasien.pasien-action', compact('posyandu', 'pasien', 'keluarga'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePasienRequest $request)
    {
        Pasien::create($request->all());

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menambahkan Data Pasien'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function show(Pasien $pasien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posyandu = Posyandu::get();
        $pasien = Pasien::findOrFail($id);
        $keluarga = Keluarga::get();
        return view('pasien.data_pasien.pasien-action', compact('pasien', 'posyandu', 'keluarga'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePasienRequest $request, $id)
    {
        $pasien = Pasien::findOrFail($id);
        $pasien->nik = $request->nik;
        $pasien->nama_anak = $request->nama_anak;
        $pasien->tgl_lahir = $request->tgl_lahir;
        $pasien->jk = $request->jk;
        $pasien->anak_ke = $request->anak_ke;
        $pasien->bb_lahir = $request->bb_lahir;
        $pasien->pb_lahir = $request->pb_lahir;
        $pasien->kia = $request->kia;
        $pasien->imd = $request->imd;
        $pasien->no_kk = $request->no_kk;
        $pasien->id_posyandu = $request->id_posyandu;
        $pasien->update();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Mengubah Data Pasien'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pasien  $pasien
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Pasien::where('id', $id)->delete();
        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil Menghapus Data Pasien'
        ]);
    }
}
