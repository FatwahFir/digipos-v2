<?php

namespace App\Http\Controllers;
use DateTime;
use App\Models\Pasien;
use App\Models\Imunisasi;
use Illuminate\Http\Request;
use App\Models\JenisImunisasi;
use App\DataTables\DataImunisasiDataTable;
use App\Http\Requests\StoreImunisasiRequest;
use App\Http\Requests\UpdateImunisasiRequest;

class ImunisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DataImunisasiDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('imunisasi.data_imunisasi.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create($id)
    {
        $pasien = Pasien::findOrFail($id);
        $Imunisasi = new Imunisasi();
        $jenisImunisasi = JenisImunisasi::get();
        return view('imunisasi.data_imunisasi.data-imunisasi-action', compact('Imunisasi', 'pasien', 'jenisImunisasi'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreImunisasiRequest $request)
    {
        
        $nama_anak        = Pasien::where('id', $request->id_pasien)->first();
        $id_jenis = $request->id_jenis;
        $tgl_imunisasi  =  $request->tgl_imunisasi;
        $id      = $request;

        
    
        $data_imunisasi = [
            'nama_anak' => $nama_anak,
            'id' => $id,
            'tgl_imunisasi'         => $tgl_imunisasi,
            'id_jenis' => $id_jenis,
            'id_pasien'           => $request->id_pasien

        ];

      
        $create = Imunisasi::create($data_imunisasi);
        return response()->json([
            'status'    => 'Sukses',
            'message'   => 'Berhasil menambahkan data Imunisasi'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Imunisasi  $Imunisasi
     * @return \Illuminate\Http\Response
     */
    public function show(Imunisasi $Imunisasi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Imunisasi  $Imunisasi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pasien = new Pasien();
        $Imunisasi = Imunisasi::where('id', $id)->first();
        $jenisImunisasi = JenisImunisasi::get();

        return view('imunisasi.data_imunisasi.data-imunisasi-action', compact('Imunisasi', 'pasien','jenisImunisasi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Imunisasi  $Imunisasi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateImunisasiRequest $request, $id)
    {
        // $id = $request;
        $id_jenis = $request->id_jenis;
        $tgl_imunisasi  =  $request->tgl_imunisasi;

        
        $data_imunisasi = [
                    
                        // 'id' => $id,
                        'tgl_imunisasi' => $tgl_imunisasi,
                        'id_jenis' => $id_jenis,
                        'id_pasien' => $request->id_pasien
            
        ];

        $update = Imunisasi::where('id', $id)
                    ->update($data_imunisasi);

        if($update){
            return response()->json([
                'error'   => 0,
                'status'  => "Sukses", 
                'message' => 'Data berhasil diubah'
            ]);
        }else{
            return response()->json([
                'error'   => 1, 
                'status'  => 'Gagal',
                'message' => 'Data gagal diubah'
            ]);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Imunisasi  $Imunisasi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Imunisasi::where('id', $id)->delete();
        return response()->json([
            'status' => 'Sukses', 
            'message' => 'Data gizi berhasil dihapus!'
        ]);

    }
}
