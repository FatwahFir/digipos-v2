<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Bidan;
use App\Models\Puskesmas;
use Illuminate\Http\Request;
use App\DataTables\BidanDataTable;
use App\Http\Requests\StoreBidanRequest;

class BidanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(BidanDataTable $dataTable)
    {
        // $this->authorize('read');
        // dd($user->id);
        return $dataTable->render('users.bidan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $user = new User();
        $puskesmas = Puskesmas::get();
        return view('users.bidan.bidan-action', compact('user', 'puskesmas'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBidanRequest $request)
    {
        // dd($request);
        $validatedData = $request;
        // $validatedData['password'] = bcrypt($validatedData['password']);
        $user = User::create([
            'username' => $validatedData['username'],
            'password' => bcrypt('password'),
        ])->assignRole('bidan');
        Bidan::create([
            'nama' => $validatedData['name'],
            'user_id' => $user->id,
            'puskesmas_id' => $validatedData['puskesmas_id'],
        ]);
        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil menambahkan akun admin'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $puskesmas = Puskesmas::get();

        return view('users.bidan.bidan-action', compact('user', 'puskesmas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $rules = [
            'name' => 'required|max:255'
            // 'password' => 'required|min:6|max:255'
        ];
        if($request->username != $user->username){
            $rules['username'] = 'required|unique:users|min:6';
        }

        $validatedData = $request->validate($rules);
        $validatedData['password'] = bcrypt('password');

        User::where('id', $id)->update($validatedData);

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil mengubah data'
        ]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Bidan::where('user_id', $id)->delete();
        User::findOrFail($id)->delete();

        return response()->json([
            'status' => 'Sukses',
            'message' => 'Berhasil mengubah data'
        ]);
    }
}
