<?php

namespace App\Http\Controllers;

use DateTime;
use Carbon\Carbon;
use App\Models\Gizi;
use App\Models\Pasien;
use App\Models\StandarWho;
use App\Models\StatusGizi;
use Illuminate\Http\Request;
use App\DataTables\GiziDataTable;
use App\Http\Requests\StoreGiziRequest;
use App\Http\Requests\UpdateGiziRequest;

class GiziController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(GiziDataTable $dataTable)
    {
        // $this->authorize('read');
        return $dataTable->render('gizi.data_gizi.index');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $gizi = new Gizi();
        $pasien = Pasien::findOrFail($id);
        // $data = StandarWho::get()->first();
        // dd($data);

        // dd($pasien);
        return view('gizi.data_gizi.data-gizi-action', compact('gizi', 'pasien'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreGiziRequest $request)
    {
        $anak         = Pasien::where('id', $request->id_pasien)->first();
        $tgl_lahir    = new DateTime($anak->tgl_lahir);
        $now          = new DateTime($request->tgl_periksa);       
        $year         = date_diff($now, $tgl_lahir)->y;
        $month        = date_diff($now, $tgl_lahir)->m;
        $usia         = ($year*12)+$month;
        $ukur         = $request->usia<25 ? 1 : 2;
        $tgl_periksa  = now()->format('Y-m-d');
        $countId      = Gizi::where('tgl_periksa', $tgl_periksa)->count();
        $increment    = ($countId + 1);
        $id_gizi      = 'G'.date('Ymd').str_pad($increment, 5, '0', STR_PAD_LEFT);
        $bb           = $request->bb;
        $pb_tb        = $request->pb_tb;
        // dd($pb_tb);

        $bb_u         = $this->countWeightAge($bb, $anak->jk, $usia);
        $pb_tb_u      = $this->countHeightAge($pb_tb, $anak->jk, $usia);
        $bb_pb_tb     = $this->countWeightHeight($bb, $anak->jk, $pb_tb, $usia);
        
        $data_status = [
            'bb_u'      => $bb_u,
            'pb_tb_u'   => $pb_tb_u,
            'bb_pb_tb'  => $bb_pb_tb
        ];

        $exists = StatusGizi::where('bb_u', $bb_u)
                    ->where('pb_tb_u', $pb_tb_u)
                    ->where('bb_pb_tb', $bb_pb_tb)
                    ->exists();
        
        if($exists == false){
            StatusGizi::create($data_status);
        }

        $id_status = StatusGizi::where('bb_u', $bb_u)
                    ->where('pb_tb_u', $pb_tb_u)
                    ->where('bb_pb_tb', $bb_pb_tb)
                    ->value('id');
        
        $data_gizi = [
            'no_pemeriksaan_gizi' => $id_gizi,
            'usia'                => $usia,
            'pb_tb'               => $pb_tb,
            'bb'                  => $bb,
            'tgl_periksa'         => $tgl_periksa,
            'cara_ukur'           => $ukur,
            'asi_eks'             => $request->asi_eks,
            'vit_a'               => $request->vit_a,
            'validasi'            => $request->validasi,
            'id_status_gizi'      => $id_status,
            'id_pasien'           => $request->id_pasien
        ];
        
        //dd($now);
        $create = Gizi::create($data_gizi);
        return response()->json([
            'status'    => 'Sukses',
            'message'   => 'Berhasil menambahkan data gizi'
        ]);
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Gizi  $gizi
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $gizi = Gizi::where('no_pemeriksaan_gizi', $id)->first();
        return view('gizi.data_gizi.modal-detail', compact('gizi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Gizi  $gizi
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $gizi = Gizi::where('no_pemeriksaan_gizi', $id)->first();
        $pasien = new Pasien();
        return view('gizi.data_gizi.data-gizi-action', compact('gizi', 'pasien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Gizi  $gizi
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateGiziRequest $request, $id)
    {
        $gizi         = Gizi::where('no_pemeriksaan_gizi', $id)->first();
        $anak         = Pasien::where('id', $request->id_pasien)->first();
        $tgl_lahir    = new DateTime($anak->tgl_lahir);
        $now          = new DateTime('now');;
        $year         = date_diff($now, $tgl_lahir)->y;
        $month        = date_diff($now, $tgl_lahir)->m;
        $usia         = ($year*12)+$month;

        $bb           = $request->bb;
        $pb_tb        = $request->pb_tb;

        $bb_u         = $this->countWeightAge($bb, $anak->jk, $usia);
        $pb_tb_u      = $this->countHeightAge($pb_tb, $anak->jk, $usia);
        $bb_pb_tb     = $this->countWeightHeight($bb, $anak->jk, $pb_tb, $usia);

        $data_status = [
            'bb_u'      => $bb_u,
            'pb_tb_u'   => $pb_tb_u,
            'bb_pb_tb'  => $bb_pb_tb
        ];

        $exists = StatusGizi::where('bb_u', $bb_u)
                    ->where('pb_tb_u', $pb_tb_u)
                    ->where('bb_pb_tb', $bb_pb_tb)
                    ->exists();
        
        if($exists == false){
            StatusGizi::create($data_status);
        }

        $id_status = StatusGizi::where('bb_u', $bb_u)
                    ->where('pb_tb_u', $pb_tb_u)
                    ->where('bb_pb_tb', $bb_pb_tb)
                    ->value('id');

        $data_gizi = [
            'pb_tb'               => $pb_tb,
            'bb'                  => $bb,
            'asi_eks'             => $request->asi_eks,
            'vit_a'               => $request->vit_a,
            'validasi'            => $request->validasi,
            'id_status_gizi'      => $id_status,
            'id_pasien'           => $request->id_pasien
        ];

        $update = Gizi::where('no_pemeriksaan_gizi', $id)
                    ->update($data_gizi);

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
     * @param  \App\Models\Gizi  $gizi
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd($id);
        Gizi::where('no_pemeriksaan_gizi', $id)->delete();
        return response()->json([
            'status' => 'Sukses', 
            'message' => 'Data gizi berhasil dihapus!'
        ]);
    }


    public function countWeightAge($weight, $gender, $age)
    {
        $std    = StandarWho::where('kategori', 'BB/U')
            ->where('jk', $gender)
            ->where('parameter', $age)
            ->first();

        if ($weight < $std->sd_min_dua) {
            return $status = "SK";
        } elseif ($weight < $std->sd_min_satu && $weight >= $std->sd_min_dua) {
            return $status = "K";
        } elseif ($weight < $std->median && $weight >= $std->sd_min_satu) {
            return $status = "BK";
        } elseif ($weight < $std->sd_plus_satu && $weight >= $std->median) {
            return $status = "N";
        } elseif ($weight < $std->sd_plus_dua && $weight >= $std->sd_plus_satu) {
            return $status = "BG";
        } elseif ($weight < $std->sd_plus_tiga && $weight >= $std->sd_plus_dua) {
            return $status = "G";
        } elseif ($weight >= $std->sd_plus_tiga) {
            return $status = "O";
        }
    }
    public function countHeightAge($height, $gender, $age)
    {
        //cara ukur
        $measure = $age < 25 ? 1 : 2;
        if ($measure == 1) {
            $std = StandarWho::where('kategori', 'PB/U')
                ->where('jk', $gender)
                ->where('parameter', $age)
                ->first();
        } elseif ($measure == 2) {
            $std = StandarWho::where('kategori', 'TB/U')
                ->where('jk', $gender)
                ->where('parameter', $age)
                ->first();
        }

        // return $height;
        // height 49.00
        //std sd min tiga 44.2

        if ($height < $std->sd_min_tiga) {
            return $status = "SP";
        } elseif ($height <= $std->sd_min_dua && $height >= $std->sd_min_tiga) {
            return $status = "P";
        } elseif ($height <= $std->sd_min_satu && $height > $std->sd_min_dua) {
            return $status = "BP";
        } elseif ($height < $std->sd_plus_satu && $height >= $std->median) {
            return $status = "N";
        } elseif ($height < $std->sd_plus_dua && $height >= $std->sd_plus_satu) {
            return $status = "BT";
        } elseif ($height < $std->sd_plus_tiga && $height >= $std->sd_plus_dua) {
            return $status = "T";
        } elseif ($height >= $std->sd_plus_tiga) {
            return $status = "ST";
        }
    }

    public function countWeightHeight($weight, $gender, $height, $age)
    {
        //cara ukur
        $measure = $age < 25 ? 1 : 2;

        if ($measure == 1) {
            $std = StandarWho::where('kategori', 'BB/PB')
                ->where('jk', $gender)
                ->where('parameter', $height)
                ->first();
        } elseif ($measure == 2) {
            $std = StandarWho::where('kategori', 'BB/TB')
                ->where('jk', $gender)
                ->where('parameter', $height)
                ->first();
        }

        if ($weight < $std->sd_min_dua) {
            return $status = "SK";
        } elseif ($weight < $std->sd_min_satu && $weight >= $std->sd_min_dua) {
            return $status = "K";
        } elseif ($weight < $std->median && $weight >= $std->sd_min_satu) {
            return $status = "BK";
        } elseif ($weight < $std->sd_plus_satu && $weight >= $std->median) {
            return $status = "N";
        } elseif ($weight < $std->sd_plus_dua && $weight >= $std->sd_plus_satu) {
            return $status = "BG";
        } elseif ($weight < $std->sd_plus_tiga && $weight >= $std->sd_plus_dua) {
            return $status = "G";
        } elseif ($weight >= $std->sd_plus_tiga) {
            return $status = "O";
        }
    }

    public function dataAnak($id){
        $gizi = Gizi::where('no_pemeriksaan_gizi', $id)->first();
        return view('gizi.data_gizi.modal-data-anak', compact('gizi'));
    }

}
