<?php

namespace App\Http\Controllers;



use App\Models\Desa;

use App\Models\Gizi;
use App\Models\Bidan;
use App\Models\Kader;
use App\Models\Posyandu;
use App\Models\Imunisasi;
use App\Models\Kecamatan;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $totalBidan = Bidan::count();
        $totalKader = Kader::count();
        $totalPosyandu = Posyandu::count();
        $totalPuskesmas = Puskesmas::count();
        $totalKecamatan = Kecamatan::count();
        $totalDesa = Desa::count();
        $totalGizi = Gizi::count();
        $totalImunisasi = Imunisasi::count();
        // dd($totalBidan);
        // $totalSubs = Subscription::count();
        // $totalPendapatan = subscriptionHistory::all()->sum('amount');
        
        return view('dashboard', compact('totalBidan','totalKader','totalPosyandu','totalPuskesmas','totalKecamatan','totalDesa','totalGizi','totalImunisasi'));
    }

    // // public function chart(Request $request)
    // // {
    // //     $year = $request->year ?? date('Y');
    // //     $dinas = Dinas::whereYear('created_at', $year)->get();
    // //     $data = monthArray();

    // //     foreach ($data as &$item) {
    // //         $from = date("Y-m-d", strtotime(date("Y-".$item['code']."-01")))." 00:00:00";
    // //         $to = date("Y-m-t", strtotime(date("Y-".$item['code']."-01")))." 23:59:59";
    // //         $item['value'] = $dinas->whereBetween('created_at', [$from, $to])->count();
    // //     }
        
    // //     return response()->json($data);
    // // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
